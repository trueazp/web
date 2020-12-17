<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row" style="margin-top:30px">
  <div class="col">
    <div class="lead">
      <h1>
        <b>
          Django
        </b>
      </h1>
    </div>
  </div>
</div>

<div class="row" style="margin-top:10px">
  <div class="col">
    <p class="text-justify">
      Type - Full-stack framework Django is one the most beloved web development
      frameworks for developing Python applications. In fact, it ended up being one
      of the <a class="text-decoration-none text-primary">top 10 web development frameworks of 2020</a>.
      Django framework follows thr DRY (<b>D</b>on't <b>R</b>epeat <b>Y</b>ourself) principle.
    </p>
  </div>
</div>

<div class="row" style="margin-top:5px">
  <div class="col">
    <p class="text-justify">
      Unlike others, the free-to-use and open-source full-stack Python framework
      include a grand number of built-in features rather than offering them as individual
      libraries. Django makes use of its ORM for mapping objects to database tables.
    </p>
  </div>
</div>

<div class="row" style="margin-top:5px">
  <div class="col">
    <p class="text-justify">
      This results in allowing the code to work across different databases as well as making it
      easier to migrate from one databse to the other. Though Django has inherent support for MySQL,
      PostgreSQL, SQLite, and Oracle Database, it can support other databases via third-party drivers.
    </p>
  </div>
</div>

<div class="row" style="margin-top:5px">
  <div class="col">
    <div class="lead">
      <h5>
        <b>
          Key Highlights:-
        </b>
      </h5>
    </div>
  </div>
</div>

<div class="row" style="margin-top:5px">
  <div class="col">
    <ul style="margin-left:-30px;">
      <li>A plethora of ready-to-use libraries</li>
      <li style="margin-top: 5px">Authentication support</li>
      <li style="margin-top: 5px">Databse schema migrations</li>
      <li style="margin-top: 5px">Object-relational mapper</li>
      <li style="margin-top: 5px">Support for web servers</li>
      <li style="margin-top: 5px">Template engine</li>
      <li style="margin-top: 5px">URL routing</li>
    </ul>
  </div>
</div>

<?= $this->endSection(); ?>