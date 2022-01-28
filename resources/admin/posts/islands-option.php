<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Section;

PostType::make('islands', 'islands', 'Island')
->setArguments([
    'label' => 'Iles',
    'public'        => true,
    'rewrite'       => true,
    'query_var'     => true,
    'show_ui'		=> true,
    'has_archive'   => true,
    'supports' => ['title', 'thumbnail'],
    'show_in_menu'	=> true,
    'show_ui'	=> true,
    'menu_icon' => 'dashicons-palmtree',
    'menu_position' => 200,
    'labels' => ""
])
->set();

  Metabox::make('listislands', 'islands')
  ->add(Field::text('creator', ['label' => 'Créateur']))
  ->add(Field::text('intro', ['label' => 'Intro']))
  ->add(Field::textarea('desc', ['label' => 'Histoire']))
  ->add(Field::media('logo', ['label' => 'Logo']))
  ->add(Field::collection('slider', ['label' => 'Slider']))
  ->add(Field::text('btn', ['label' => 'Bouton']))
  ->add(Field::text('url', ['label' => 'URL']))
  ->addTranslation('done', 'Enregistrement effectué !')
	->addTranslation('error', 'Veuillez vérifier que les champs ont été correctement complétés')
	->addTranslation('submit', 'Enregistrer')
	->setTitle('Informations')
	->set();
