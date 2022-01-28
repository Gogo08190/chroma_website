<?php

Namespace Theme\Models;

use Illuminate\Database\Eloquent\Model;
use \WP_Query;

class Team extends Model{

    public function get_team(){
        $args = array(
            'post_type' => 'team',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        $posts = new WP_Query($args);

        $team = [];
        foreach ($posts->get_posts() as $key => $val) {
          $team[$key]['title'] = get_the_title($val->ID);
          $team[$key]['desc'] = get_post_meta($val->ID, 'th_desc', true);
          $team[$key]['twitch'] = get_post_meta($val->ID, 'th_twitch', true);
          $team[$key]['youtube'] = get_post_meta($val->ID, 'th_youtube', true);
          $team[$key]['logo'] = get_post_meta($val->ID, 'th_logo', true);
        }
        return $team;
    }
}
