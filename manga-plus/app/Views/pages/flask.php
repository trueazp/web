<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row" style="margin-top:30px">
  <div class="col">
    <div class="lead">
      <h1>
        <b>
          Flask
        </b>
      </h1>
    </div>
  </div>
</div>

<div class="row" style="margin-top:10px">
  <div class="col">
    <p class="text-justify">
      Type - Microframework Available under the BSD license, Flask is another popular
      Python framework. Inspired by the Sinatra Ruby framework, the microframework requires
      Jinja2 template and Werkzeug WSGI toolkit. Thanks to its lighweight and modular
      design, Flask is readily adaptable.
    </p>
  </div>
</div>

<div class="row" style="margin-top:5px">
  <div class="col">
    <p class="text-justify">
      Flask allows the developers to build a solid web application foundation from where it is
      possible to use any kind of extensions required. The micro-framework is compatible with
      Google App Engine.
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
      <li>Built-in fast debugger</li>
      <li style="margin-top: 5px">HTTP request handling</li>
      <li style="margin-top: 5px">Inbuilt development server</li>
      <li style="margin-top: 5px">Jinja2 templating</li>
      <li style="margin-top: 5px">RESTful request dispatching</li>
      <li style="margin-top: 5px">Support for plugging in any ORM</li>
      <li style="margin-top: 5px">Supports secure cookies to establish client-side sessions</li>
      <li style="margin-top: 5px">Unicode-based</li>
      <li style="margin-top: 5px">Unit testing support</li>
      <li style="margin-top: 5px">WSGI 1.0 compliance</li>
    </ul>
  </div>
</div>

<?= $this->endSection(); ?>