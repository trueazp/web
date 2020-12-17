<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    return view('pages/welcome_message');
  }

  public function home()
  {
    $data = [
      'title' => "Home | Miaowmere's Homepage",
      'test' => ['one', 'two', 'three']
    ];
    return view('pages/home', $data);
  }

  public function about()
  {
    $data = [
      'title' => "About | About Miaowmere",
      'test' => ['one', 'two', 'three']
    ];
    return view('pages/about', $data);
  }
  
  public function contact()
  {
    $data = [
      'title' => 'Contact Us',
      'people' => [
        [
          'name' => 'Kris',
          'gender' => 'Male',
          'age' => '14'
        ],
        [
          'name' => 'Ralsei',
          'gender' => 'Male',
          'age' => '13'
        ]
      ]
    ];
    return view('pages/contact', $data);
  }
}
