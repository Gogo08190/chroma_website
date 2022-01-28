<?php

Namespace Theme\Models;

use Illuminate\Database\Eloquent\Model;
use \WP_Query;

class Islands extends Model{

    public function get_islands(){
        $args = array(
            'post_type' => 'islands',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        $posts = new WP_Query($args);

        $islands = [];
        foreach ($posts->get_posts() as $key => $val) {
          $id = $val->ID;
          $islands[$id]['id'] = $val->ID;
          $islands[$id]['title'] = get_the_title($val->ID);
          $islands[$id]['creator'] = get_post_meta($val->ID, 'th_creator', true);
          $islands[$id]['intro'] = get_post_meta($val->ID, 'th_intro', true);
          $islands[$id]['desc'] = get_post_meta($val->ID, 'th_desc', true);
          $islands[$id]['logo'] = get_post_meta($val->ID, 'th_logo', true);
          $islands[$id]['slider'] = get_post_meta($val->ID, 'th_slider', false);
          $islands[$id]['url'] = get_post_meta($val->ID, 'th_url', true);
          $islands[$id]['btn'] = get_post_meta($val->ID, 'th_btn', true);
        }
        return $islands;
    }
}
