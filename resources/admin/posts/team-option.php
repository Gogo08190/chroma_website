<?php

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Section;

PostType::make('team', 'Teams', 'Team')
->setArguments([
    'label' => 'Équipe',
    'public'        => true,
    'rewrite'       => true,
    'query_var'     => true,
    'show_ui'		=> true,
    'has_archive'   => true,
    'supports' => ['title', 'thumbnail'],
    'show_in_menu'	=> true,
    'show_ui'	=> true,
    'menu_icon' => 'dashicons-groups',
    'menu_position' => 200,
    'labels' => ""
])
->set();

Metabox::make('equipe', 'team')
->add(Field::textarea('desc', ['label' => 'Résumé']))
->add(Field::text('youtube', ['label' => 'Youtube']))
->add(Field::text('twitch', ['label' => 'Twitch']))
->add(Field::media('logo', ['label' => 'Logo']))
->setTitle('Informations')
->addTranslation('done', 'Sauvegarde réussie')
->addTranslation('error', 'Une erreur s\'est produite pendant la sauvegarde')
->addTranslation('saving', 'Sauvegarde en cours')
->set();
