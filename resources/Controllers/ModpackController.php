<?php

namespace Theme\Controllers;

use Theme\Models\Modpack;
use Theme\Models\Islands;
use Illuminate\Routing\Controller as BaseController;

class ModpackController extends BaseController
{
    protected $modpacks;

    public function __construct(Modpack $model) {
        $this->list_modpack = $model->get_modpack();
        $this->modpacks = $this->list_modpack[get_the_ID()];

        $islands = new Islands();
        $this->content['islands'] = $islands->get_islands();

    }


    public function index(Modpack $model) {
  	  return view('pages.modpack', [
          'modpacks' => $this->modpacks,

          'content' => $this->content,

          // Post
          'list_modpack' => $model->get_modpack(),
      ]);
    }
}
