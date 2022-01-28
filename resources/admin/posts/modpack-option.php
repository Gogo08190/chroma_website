<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Section;

PostType::make('modpack', 'Modpacks', 'Modpack')
->setArguments([
    'label' => 'Modpacks',
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

  Metabox::make('mymodpack', 'modpack')
  ->add(Field::textarea('titre', ['label' => 'Version']))
  ->add(Field::choice('categorie', ['label' => 'Catégorie', 'choices' => ['Technologie', 'Exploration', 'Magie', 'Aventure & RPG', 'Mini-Jeux', 'Skyblock', 'Science Fiction', 'Quêtes'], 'multiple' => true]))
  ->add(Field::textarea('desc', ['label' => 'Description']))
  ->add(Field::text('url', ['label' => 'URL']))
  ->add(Field::text('btn', ['label' => 'Bouton']))
  ->add(Field::text('plus', ['label' => 'Plus']))
  ->add(Field::media('logo', ['label' => 'Logo']))
  ->addTranslation('done', 'Enregistrement effectué !')
	->addTranslation('error', 'Veuillez vérifier que les champs ont été correctement complétés')
	->addTranslation('submit', 'Enregistrer')
	->setTitle('Informations')
	->set();
