<?= $this->extend('layout/template3'); ?>

<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('pesan')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
  </div>
<?php endif; ?>

<div class="ui container">

  <div class="ui center aligned segment">
    <h2 class="ui centered header">Comic List</h2>
    <div class="ui clearing divider"></div>
    <p>
      MangaPlus is a manga site that provides informations about many manga.
      With MangaPlus you can read many information about the manga that is provided,
      such as the writer, publisher, even synopsis.
    </p>
    <a href="<?= base_url('/komik/create'); ?>">

      <div class="ui animated vertical green big button" tabindex="0" style="width: 150px;">
        <div class="visible content">
          <i class="plus circle icon"></i>
        </div>
        <div class="hidden content">
          Tambah Komik
        </div>
      </div>
    </a>
  </div>

  <div class="ui three link cards" style="margin-top: 20px;">

    <?php $i = 1 ?>
    <?php foreach ($komik as $k) : ?>

      <div class="ui card">
        <a class="image" href="/komik/komik/<?= $k['slug']; ?>">
          <img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul" id="covers">
        </a>
        <div class="content">
          <h3 class="ui center aligned header"><?= $k['judul']; ?></h3>
        </div>
      </div>

    <?php endforeach; ?>

  </div>
  <script>
    $('#test-card').dimmer({
      on: 'hover'
    });
  </script>
</div>

<?= $this->endSection(); ?>