<?= $this->extend('layout/template4'); ?>

<?= $this->section('content'); ?>
<div class="ui container">

  <div class="ui center aligned segment">
    <h2 class="ui centered header">Comic's Detail</h2>
    <div class="ui clearing divider"></div>
    <p>
      MangaPlus is a manga site that provides informations about many manga.
      With MangaPlus you can read many information about the manga that is provided,
      such as the writer, publisher, even synopsis.
    </p>
  </div>

  <div class="ui placeholder segment">
    <div class="ui two column stackable center aligned grid">
      <div class="ui vertical divider">
        <i class="arrow right icon"></i>
      </div>
      <div class="middle aligned row">

        <div class="column">
          <div class="ui segment" id="comic-details">
            <img src="/img/<?= $komik['sampul']; ?>" alt="" class="sampul" id="covers" style="border-radius: 8px;">
          </div>
          <!-- </div> -->
        </div>

        <div class="column">
          <div class="ui segment" id="comic-details">

            <h1 class="ui icon header">
              <b></b><?= $komik['judul']; ?>
            </h1>
            <h3 class="title">
              Written by <?= $komik['penulis']; ?>
            </h3>
            <h3 class="title">
              Published by <?= $komik['penerbit']; ?>
            </h3>

            <div class="ui section divider"></div>

            <h4>
              <?= $komik['description']; ?>
            </h4>

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="ui three column centered grid" style="margin-top: 20px;">

    <div class="column">
      <div class="segment">
        <!-- back -->
        <a href="<?= base_url('/user/user_komik/'); ?>">
          <button class="ui animated vertical blue button">
            <div class="visible content">
              <i class="angle double left large icon"></i>
            </div>
            <div class="hidden content">
              Back
            </div>
          </button>
        </a>
      </div>
    </div>

  </div>

</div>
<?= $this->endSection(); ?>