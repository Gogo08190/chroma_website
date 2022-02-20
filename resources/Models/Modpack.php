<?php

Namespace Theme\Models;

use Illuminate\Database\Eloquent\Model;
use \WP_Query;

class Modpack extends Model{

    public function get_modpack(){
        $args = array(
            'post_type' => 'modpack',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        $posts = new WP_Query($args);

        $modpack = [];
        foreach ($posts->get_posts() as $key => $val) {
          $id = $val->ID;
          $modpack[$id]['id'] = $val->ID;
          $modpack[$id]['title'] = get_the_title($val->ID);
          $modpack[$id]['titre'] = get_post_meta($val->ID, 'th_titre', true);
          $modpack[$id]['categorie'] = get_post_meta($val->ID, 'th_categorie');
          $modpack[$id]['desc'] = get_post_meta($val->ID, 'th_desc', true);
          $modpack[$id]['url'] = get_post_meta($val->ID, 'th_url', true);
          $modpack[$id]['btn'] = get_post_meta($val->ID, 'th_btn', true);
          $modpack[$id]['plus'] = get_post_meta($val->ID, 'th_plus', true);
          $modpack[$id]['logo'] = get_post_meta($val->ID, 'th_logo', true);
          $modpack[$id]['cd'] = get_post_meta($val->ID, 'th_cd', true);
          $modpack[$id]['online'] = get_post_meta($val->ID, 'th_online', true);
          $modpack[$id]['island_title'] = get_post_meta($val->ID, 'th_island_title', true);
        }
        return $modpack;
    }
}
