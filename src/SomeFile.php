<?php

function use_a_wordpress_function() {
    $posts = get_posts();

    return count( $posts );
}

function some_ugly_function(){
    $_SESSION['start'] = 'Yes';

    return 0;
}

function use_global(){
    global $user;

    if(isset($user)){
        return true;
    }
}

function some_untested_function() {
    $i = 0;
    for ( $i = 0; $i < 100; $i ++ ) {
        $i ++;
    }

}


/*
function sumOfInts( int ...$ints ) {
    return array_sum( $ints );
}
*/