<?php

namespace Theme\Controllers;

use Theme\Models\Team;
use Theme\Models\Modpack;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{

    // Haut de page
    protected $slider;
    protected $titre;

    protected $titre_team;

    protected $titre_modpack;

    protected $titre_partenaire;
    protected $nom_partenaire;
    protected $desc_partenaire;
    protected $logo_partenaire;
    protected $link_partenaire;
    protected $btn_partenaire;

    protected $content;


    public function __construct() {

      // Haut de page
      $this->slider = get_post_meta(get_the_ID(), 'th_slider', false);
      $this->titre = get_post_meta(get_the_ID(), 'th_titre', true);

      $this->titre_team = get_post_meta(get_the_ID(), 'th_titre_team', true);

      $this->titre_modpack = get_post_meta(get_the_ID(), 'th_titre_modpack', true);

      $this->titre_partenaire = get_post_meta(get_the_ID(), 'th_titre_partenaire', true);
      $this->nom_partenaire = get_post_meta(get_the_ID(), 'th_nom_partenaire', true);
      $this->desc_partenaire = get_post_meta(get_the_ID(), 'th_desc_partenaire', true);
      $this->logo_partenaire = get_post_meta(get_the_ID(), 'th_logo_partenaire', true);
      $this->link_partenaire = get_post_meta(get_the_ID(), 'th_link_partenaire', true);
      $this->btn_partenaire = get_post_meta(get_the_ID(), 'th_btn_partenaire', true);

      $modpack = new Modpack();
      $this->content['modpack'] = $modpack->get_modpack();

    }


    public function index(Team $model) {
  	  return view('pages.home', [

        // Haut de page
        'slider' => $this->slider,
        'titre' => $this->titre,

        'titre_team' => $this->titre_team,

        'titre_modpack' => $this->titre_modpack,

        'titre_partenaire' => $this->titre_partenaire,
        'nom_partenaire' => $this->nom_partenaire,
        'desc_partenaire' => $this->desc_partenaire,
        'logo_partenaire' => $this->logo_partenaire,
        'link_partenaire' => $this->link_partenaire,
        'btn_partenaire' => $this->btn_partenaire,

        'content' => $this->content,

        'list_team' => $model->get_team(),
      ]);
    }
}
