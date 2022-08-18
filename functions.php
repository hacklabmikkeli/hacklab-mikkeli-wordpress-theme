<?php
/* Hook into the colours added via the customiser. */
add_filter( 'theme_mod_accent_accessible_colors', 'op_change_default_colours', 10, 1 );

/**
 * Override the colours added in the customiser.
 *
 * @param array $default An array of the key colours being used in the theme.
 */
function op_change_default_colours( $default ) {

    $default = array(
        'content'       => array(
            'accent'    => '##eb008c',
            'secondary' => '#6d6d6d',
            'borders'   => '#dcd7ca',
        ),
    );

    return $default;
}
?>