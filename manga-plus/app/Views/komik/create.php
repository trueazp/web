<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<div class="ui container">

  <h1 class="ui header">
    Add Comic's Data
  </h1>

  <form action=" <?= base_url('/komik/save'); ?>" method="post" enctype="multipart/form-data" class="ui form">
    <?= csrf_field(); ?>

    <div class="field">
      <label>Title</label>
      <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
      <div class="invalid-feedback">
        <?= $validation->getError('judul'); ?>
      </div>
    </div>


    <div class="field">
      <label>Writer</label>
      <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
    </div>

    <div class="field">
      <label>Publisher</label>
      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
    </div>

    <div class="field">
      <label>Cover</label>
      <div class="form-group row">
        <div class="col-sm-2">
          <img src="/img/default.png" class="img-thumbnail img-preview">
        </div>
        <div class="col-sm-8">
          <div class="custom-file">
            <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
            <div class="invalid-feedback">
              <?= $validation->getError('sampul'); ?>
            </div>
            <label class="custom-file-label" for="sampul">Pilih gambar</label>
          </div>
        </div>
      </div>
    </div>

    <div class="field">
      <label>Description</label>
      <textarea type="text" class="form-control" id="description" name="description" value="<?= old('description'); ?>" cols="70" rows="15"></textarea>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="ui green button">Confirm Data</button>
        <a href="<?= base_url('/komik/komik'); ?>">
          <div class="ui blue button">
            Back
          </div>
        </a>
      </div>
    </div>
    <div class="ui error message"></div>
  </form>

</div>

<script>
  function previewImg() {
    const sampul = document.querySelector('#sampul');
    const sampulLabel = document.querySelector('.custom-file-label');
    const imgPrev = document.querySelector('.img-preview');

    sampulLabel.textContent = sampul.files[0].name;

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload = function(e) {
      imgPrev.src = e.target.result;
    }
  }
</script>

<?= $this->endSection(); ?>