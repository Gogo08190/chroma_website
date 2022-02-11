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
    'menu_icon' => 'dashicons-networking',
    'menu_position' => 200,
    'labels' => ""
])
->set();

  Metabox::make('mymodpack', 'modpack')
  ->add(new Section('modpack_info', 'Informations', [
    Field::textarea('titre', ['label' => 'Version']),
    Field::choice('categorie', ['label' => 'Catégorie', 'choices' => ['Technologie', 'Exploration', 'Magie', 'Aventure & RPG', 'Mini-Jeux', 'Skyblock', 'Science Fiction', 'Quêtes', 'Technology', 'Magic', 'Minigames', 'Quests'], 'multiple' => true]),
    Field::textarea('desc', ['label' => 'Description']),
    Field::text('url', ['label' => 'URL']),
    Field::text('btn', ['label' => 'Bouton']),
    Field::text('plus', ['label' => 'Plus']),
    Field::media('logo', ['label' => 'Logo']),
  ]))

  ->add(new Section('iles', 'Islands', [
    Field::checkbox('online', ['label' => 'Iles ?']),
    Field::textarea('island_title', ['label' => 'Titre']),
  ]))
  ->addTranslation('done', 'Enregistrement effectué !')
	->addTranslation('error', 'Veuillez vérifier que les champs ont été correctement complétés')
	->addTranslation('submit', 'Enregistrer')
	->setTitle('Informations')
	->set();
