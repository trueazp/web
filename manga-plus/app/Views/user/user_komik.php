<?= $this->extend('layout/template4'); ?>

<?= $this->section('content'); ?>

<div class="ui container" id="toptop">

  <div class="ui center aligned segment">
    <h2 class="ui centered header">Comic List</h2>
    <div class="ui clearing divider"></div>
    <p>
      MangaPlus is a manga site that provides informations about many manga.
      With MangaPlus you can read many information about the manga that is provided,
      such as the writer, publisher, even synopsis.
    </p>
  </div>

  <div class="ui three link cards" style="margin-top: 20px;">

    <?php $i = 1 ?>
    <?php foreach ($komik as $k) : ?>


      <div class="ui card">
        <a class="image" href="/user/user_komik/<?= $k['slug']; ?>">
          <img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul" id="covers">
        </a>
        <div class="content">
          <h3 class="ui center aligned header"><?= $k['judul']; ?></h3>
        </div>
      </div>


    <?php endforeach; ?>

  </div>
</div>

<div class="ui center aligned container" style="margin-top: 150px;">
  <a href="#toptop">
    <div class="ui orange button">
      Back to top
    </div>
  </a>
</div>

<script>
  $('#toggleButton').click(function() {
    $('.ui.dimmer').dimmer('show');
  });
</script>

<?= $this->endSection(); ?>