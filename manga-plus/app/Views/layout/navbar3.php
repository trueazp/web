<div class="ui inverted top fixed large menu">

  <div class="item">
    <img src="/mangaplus.ico">
  </div>

  <a href="<?= base_url('/komik'); ?>" class="item">
    <div>
      <i class="home icon"></i>Home
    </div>
  </a>

  <a href="<?= base_url('/komik/komik'); ?>" class="item">
    <div>
      <i class="book icon"></i>Comics
    </div>
  </a>

  <a href="<?= base_url('https://github.com/trueazp'); ?>" class="item" target="__blank">
    <div>
      <i class="user icon"></i>About Me
    </div>
  </a>

  <?php if (logged_in()) : ?>
    <a href="<?= base_url('/'); ?>" class="item">
      <div>
        <i class="low vision icon"></i>User Page
      </div>
    </a>
  <?php endif; ?>

  <?php if (logged_in()) : ?>
    <a href="<?= base_url('/logout'); ?>" class="item right">
      <div>
        <i class="sign out icon"></i>Logout
      </div>
    </a>
  <?php else : ?>
    <a href="<?= base_url('/login'); ?>" class="item right">
      <div>
        <i class="sign in icon"></i>Login
      </div>
    </a>
  <?php endif; ?>

</div>