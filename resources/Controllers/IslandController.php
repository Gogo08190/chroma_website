<?php

namespace Theme\Controllers;

use Theme\Models\Islands;
use Illuminate\Routing\Controller as BaseController;

class IslandController extends BaseController
{
    protected $island;

    public function __construct(Islands $model) {

      $this->list_island = $model->get_islands();
      $this->island = $this->list_island[get_the_ID()];

    }


    public function index(Islands $model) {
  	  return view('pages.islands', [

        'island' => $this->island,

        // Post
        'list_island' => $model->get_islands(),
      ]);
    }
}
