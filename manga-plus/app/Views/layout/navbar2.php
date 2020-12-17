<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="<?= base_url('/'); ?>">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="<?= base_url('/komik/komik'); ?>">Komik</a>
        <a class="nav-link" href="<?= base_url('https://github.com/trueazp'); ?>" target="__blank">About Me</a>
        <?php if (logged_in()) : ?>
          <a class="nav-link" href="<?= base_url('/logout'); ?>">Logout</a>
        <?php else : ?>
          <a class="nav-link" href="<?= base_url('/login'); ?>">Login</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>