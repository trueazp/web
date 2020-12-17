<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
  protected $komikModel;

  // CONSTRUCTOR
  public function __construct()
  {
    $this->komikModel = new KomikModel();
    // $db = \Config\Database::connect();
    // $komik = $db->query("SELECT * FROM komik");
    // dd($komik);
  }

  // IINDEX FUCNTION
  public function index()
  {
    $data = [
      'title' => 'MangaPlus | Home'
    ];

    return view('komik/index', $data);
  }

  // KOMIK FUCNTION
  public function komik()
  {
    $data = [
      'title' => 'MangaPlus | Comics',
      'komik' => $this->komikModel->getKomik()
    ];
    return view('komik/komik', $data);
  }

  // SAVE FUCNTION
  public function detail($slug)
  {
    $data = [
      'title' => 'MangaPlus | Detail',
      'komik' => $this->komikModel->getKomik($slug)
    ];
    // jika komik tidak ada
    if (empty($data['komik'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan.');
    }

    return view('komik/detail', $data);
  }

  // CREATE FUCNTION
  public function create()
  {
    $data = [
      'title' => 'MangaPlus | Create',
      'validation' => \Config\Services::validation()
    ];
    return view('komik/create', $data);
  }

  // SAVE FUCNTION
  public function save()
  {
    // validasi inputan
    if (!$this->validate([
      'judul' => [
        'rules' => 'required|is_unique[komik.judul]',
        'errors' => [
          'required' => '{field} komik harus diisi',
          'is_unique' => '{field} komik sudah ada'
        ]
      ],
      'sampul' => [
        'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran file terlalu besar (max file 1mb)',
          'is_image' => 'File yang dipilih bukan gambar',
          'mime_in' => 'File yang dipilih bukan gambar'
        ]
      ]
    ])) {
      // $validation = \Config\Services::validation();
      // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
      return redirect()->to('/komik/create')->withInput();
    }

    // ambil gambar
    $fileSampul = $this->request->getFile('sampul');

    // cek apakah ada file yang diupload
    if ($fileSampul->getError() == 4) {
      $namaSampul = 'default.png';
    } else {
      // generate random name
      $namaSampul = $fileSampul->getRandomName();
      // memindahkan file ke folder public/img
      $fileSampul->move('img', $namaSampul);
    }

    $slug = url_title($this->request->getVar('judul'), '-', true);
    $this->komikModel->save([
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $namaSampul,
      'description' => $this->request->getVar('description')
    ]);
    session()->setFlashdata('pesan', 'Data added successfully');
    return redirect()->to("/komik/komik");
  }

  // EDIT FUCNTION
  public function edit($slug)
  {
    $data = [
      'title' => 'MangaPlus | Edit',
      'komik' => $this->komikModel->getKomik($slug),
      'validation' => \Config\Services::validation()
    ];
    return view('komik/edit', $data);
  }

  // UPDATE FUCNTION
  public function update($id)
  {
    // cek judul
    $komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
    if ($komikLama['judul'] == $this->request->getVar('judul')) {
      $rule_judul = 'required';
    } else {
      $rule_judul = 'required|is_unique[komik.judul]';
    }

    // validasi inputan
    if (!$this->validate([
      'judul' => [
        'rules' => $rule_judul,
        'errors' => [
          'required' => '{field} komik harus diisi',
          'is_unique' => '{field} komik sudah ada'
        ]
      ],
      'sampul' => [
        'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran file terlalu besar (max file 1mb)',
          'is_image' => 'File yang dipilih bukan gambar',
          'mime_in' => 'File yang dipilih bukan gambar'
        ]
      ]
    ])) {
      // $validation = \Config\Services::validation();
      // return redirect()->to('/komik/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
      return redirect()->to('/komik/edit/' . $this->request->getVar('slug'))->withInput();
    }

    // mengambil file
    $fileSampul = $this->request->getFile('sampul');

    // cek apakah gambar berubah (gambar lama menjadi gambar baru)
    if ($fileSampul->getError() == 4) {
      $namaSampul = $this->request->getVar('sampulLama');
    } else {
      // generate random name
      $namaSampul = $fileSampul->getRandomName();
      // memindahkan file ke folder public/img
      $fileSampul->move('img', $namaSampul);

      // mencari file berdasarkan id
      $komik = $this->komikModel->find($id);

      // cek apakah file gambar adalah file default.png
      if ($komik['sampul'] != 'default.png') {
        // menghapus gambar
        unlink('img/' . $this->request->getVar('sampulLama'));
      }
    }

    $slug = url_title($this->request->getVar('judul'), '-', true);
    $this->komikModel->save([
      'id' => $id,
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $namaSampul,
      'description' => $this->request->getVar('description')
    ]);
    session()->setFlashdata('pesan', 'Data changed successfully');
    return redirect()->to("/komik/komik");
  }

  // DELETE FUCNTION
  public function delete($id)
  {

    // mencari file berdasarkan id
    $komik = $this->komikModel->find($id);

    // cek apakah file gambar adalah file default.png
    if ($komik['sampul'] != 'default.png') {
      // menghapus gambar
      unlink('img/' . $komik['sampul']);
    }

    $this->komikModel->delete($id);
    session()->setFlashdata('pesan', 'Data deleted successfully');
    return redirect()->to('/komik/komik');
  }
}
