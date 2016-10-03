<?php

function use_a_wordpress_function() {
    $posts = get_posts();

    return count( $posts );
}

/*
function sumOfInts( int ...$ints ) {
    return array_sum( $ints );
}
*/