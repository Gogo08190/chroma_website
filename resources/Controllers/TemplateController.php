<?php

namespace Theme\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TemplateController extends BaseController
{
    public function index() {
        return view('pages.template', []);
    }
}
