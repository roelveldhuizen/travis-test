<?php

function use_a_wordpress_function(){
    $post = get_post(2);
    return $post->post_title;
}