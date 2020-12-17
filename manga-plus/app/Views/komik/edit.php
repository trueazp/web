<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<div class="ui container">

  <h1 class="ui header">
    Edit Comic's Data
  </h1>

  <form action="/komik/update/<?= $komik['id']; ?>" method="post" enctype="multipart/form-data" class="ui form">
    <?= csrf_field(); ?>

    <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
    <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">

    <div class="field">
      <label>Title</label>
      <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul']; ?>">
      <div class="invalid-feedback">
        <?= $validation->getError('judul'); ?>
      </div>
    </div>


    <div class="field">
      <label>Writer</label>
      <input type="text" class="form-control" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis']; ?>">
    </div>

    <div class="field">
      <label>Publisher</label>
      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit']; ?>">
    </div>

    <div class="field">
      <label>Cover</label>
      <div class="form-group row">
        <div class="col-sm-2">
          <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">
        </div>
        <div class="col-sm-8">
          <div class="custom-file">
            <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
            <div class="invalid-feedback">
              <?= $validation->getError('sampul'); ?>
            </div>
            <label class="custom-file-label" for="sampul"><?= $komik['sampul']; ?></label>
          </div>
        </div>
      </div>
    </div>

    <div class="field">
      <label>Description</label>
      <textarea cols="70" rows="10" type="text" class="form-control" id="description" name="description">
        <?= (old('description')) ? old('description') : $komik['description']; ?>
      </textarea>
    </div>

    <div class="form-group row" style="margin-top: 10px;">
      <div class="col-sm-10">
        <button type="submit" class="ui green button">Confirm Edit</button>
        <a href="<?= base_url('/komik/komik'); ?>">
          <div class="ui blue button">
            Back
          </div>
        </a>
      </div>
    </div>
  </form>

</div>
<?= $this->endSection(); ?>