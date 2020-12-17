<?php

namespace App\Controllers;

use App\Models\KomikModel;

class CommonUser extends BaseController
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

    return view('user/user_index', $data);
  }

  // KOMIK FUCNTION
  public function komik()
  {
    $data = [
      'title' => 'MangaPlus | Comics',
      'komik' => $this->komikModel->getKomik()
    ];
    return view('user/user_komik', $data);
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

    return view('user/user_detail', $data);
  }
}
