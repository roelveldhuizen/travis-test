<?php
/**
 * Class SampleTest
 *
 * @package Travis_Test
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {

    /**
     * A single example test.
     */
    function test_sample() {
        // Replace this with some actual testing code.
        $this->assertTrue( true );
    }

    /**
     * A single example test.
     */
    function test_sample2() {
        // Replace this with some actual testing code.

        $str = use_a_wordpress_function();
        $this->assertEquals( $str, 0 );

    }
}
