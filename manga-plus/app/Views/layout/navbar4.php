<!-- NAVBAR -->
<div class="ui inverted top fixed large menu">

  <div class="item">
    <img src="/mangaplus.ico">
  </div>

  <a href="<?= base_url('/'); ?>" class="item">
    <div>
      <i class="home icon"></i>Home
    </div>
  </a>

  <a href="<?= base_url('/user/user_komik'); ?>" class="item">
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
    <a href="<?= base_url('/komik'); ?>" class="item">
      <div>
        <i class="bug icon"></i>Admin Page
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


<!-- SIDEBAR -->
<div class="ui left vertical inverted sidebar labeled icon menu">

  <a class="item" id="toggleSidebarOff">
    <i class="book icon"></i>
    MangaPlus
  </a>

  <a href="<?= base_url('/'); ?>" class="item">
    <i class="home icon"></i>Home
  </a>

  <a href="<?= base_url('/user/user_komik'); ?>" class="item">
    <i class="book icon"></i>Comics
  </a>

  <a href="<?= base_url('https://github.com/trueazp'); ?>" class="item" target="__blank">

    <i class="user icon"></i>About Me

  </a>

  <?php if (logged_in()) : ?>
    <a href="<?= base_url('/komik'); ?>" class="item">

      <i class="bug icon"></i>Admin Page

    </a>
  <?php endif; ?>

  <?php if (logged_in()) : ?>
    <a href="<?= base_url('/logout'); ?>" class="item">

      <i class="sign out icon"></i>Logout

    </a>
  <?php else : ?>
    <a href="<?= base_url('/login'); ?>" class="item">

      <i class="sign in icon"></i>Login

    </a>
  <?php endif; ?>

</div>