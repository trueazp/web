<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function python()
  {
    $data = [
      'title' => 'Python Framework'
    ];
    return view('pages/python', $data);
  }

  public function django()
  {
    $data = [
      'title' => 'Python | Django'
    ];
    return view('pages/django', $data);
  }

  public function flask()
  {
    $data = [
      'title' => 'Python | Flask'
    ];
    return view('pages/flask', $data);
  }

  public function pyramid()
  {
    $data = [
      'title' => 'Python | Pyramid'
    ];
    return view('pages/pyramid', $data);
  }
}
