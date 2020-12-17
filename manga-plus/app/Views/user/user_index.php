<?= $this->extend('layout/template4'); ?>

<?= $this->section('content'); ?>

<div class="ui container absolute-center">

  <h2 class="ui center aligned icon header" style="margin-bottom: 40px;">
    <i class="circular book icon" id="mainHeader"></i>
    MANGAPLUS
  </h2>

  <div class="ui divider"></div>

  <div class="ui two column padded grid">
    <div class="five wide column">

      <!-- <div class="ui segment"> -->
      <img src="/img/main-logo.png" alt="" id="snkCover" height="400" width="295" class="transition hidden">
      <!-- </div> -->

    </div>
    <div class="eleven wide column transition hidden" id="welcomeMessage">

      <!-- <div class="ui blurring piled segment custom transition hidden" id="welcomeMessage"> -->

      <h2 class="ui center aligned header">Welcome to MangaPlus</h2>

      <h3>
        Manga are comics or graphic novels originating from Japan.
        Most manga conform to a style developed in Japan in the late 19th century,
        though the art form has a long prehistory in earlier Japanese art.
        The term manga is used in Japan to refer to both comics and cartooning.
      </h3>
      <h3>
        MangaPlus is a manga site that provides informations about many manga.
        With MangaPlus you can read many information about the manga that is provided,
        such as the writer, publisher, even synopsis.
      </h3>
      <h3>
        This website was created using <a href="https://semantic-ui.com/" target="__blank">Semantic UI</a> and
        <a href="https://getbootstrap.com/" target="__blank">Bootstrap</a>, if you want to learn more about them
        make sure to check out their framework!
      </h3>

      <a href="<?= base_url('/user/user_komik'); ?>">
        <div class="ui animated right floated orange button" tabindex="0" style="margin-top: 50px; width:100px">
          <div class="visible content">
            <i class="list ul icon"></i>
          </div>
          <div class="hidden content">
            Go to the list!
          </div>
        </div>
      </a>
    </div>

  </div>
  <div class="ui divider"></div>
</div>

</div>

<?= $this->endSection(); ?>