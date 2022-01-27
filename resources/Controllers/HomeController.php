<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{

    // Haut de page
    protected $slider;


    public function __construct() {

      // Haut de page
      $this->slider = get_post_meta(get_the_ID(), 'th_slider', false);

    }


    public function index(Post $model) {
  	  return view('pages.home', [

        // Haut de page
        'slider' => $this->slider,
      ]);
    }
}
