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
          $modpack[$key]['title'] = get_the_title($val->ID);
          $modpack[$key]['titre'] = get_post_meta($val->ID, 'th_titre', true);
          $modpack[$key]['categorie'] = get_post_meta($val->ID, 'th_categorie');
          $modpack[$key]['desc'] = get_post_meta($val->ID, 'th_desc', true);
          $modpack[$key]['url'] = get_post_meta($val->ID, 'th_url', true);
          $modpack[$key]['btn'] = get_post_meta($val->ID, 'th_btn', true);
          $modpack[$key]['plus'] = get_post_meta($val->ID, 'th_plus', true);
          $modpack[$key]['logo'] = get_post_meta($val->ID, 'th_logo', true);
        }
        return $modpack;
    }
}
