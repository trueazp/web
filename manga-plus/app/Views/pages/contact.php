<?= $this->extend('layout/template2'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2>Contact Us</h2>
      <?php foreach ($people as $a) : ?>
        <ul>
          <li>Name : <?= $a['name'] ?></li>
          <li>Gender : <?= $a['gender'] ?></li>
          <li>Age : <?= $a['age'] ?></li>
        </ul>
      <?php endforeach ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>