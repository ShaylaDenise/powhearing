<?php

add_action( 'cmb2_admin_init', 'cmb2_banner');
/**
 * Define the metabox and field configurations.
 */
function cmb2_banner() {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_banner_';

    $cmb = new_cmb2_box( array(
        'id'           => 'page banner',
        'title'        => 'Page Banner',
        'object_types' => array( 'page' ), // post type
        //'show_on'      => array( 'key' => 'page-template', 'value' => 'page-organizations.php' ),
        'show_on'      => array( 'key' => 'page-template',
            'value' => array('front-page.php', 'page-templates/page-organizations.php',

                'page-templates/page-individuals.php', 'page-templates/live-events-page.php')

         ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $group_field_id = $cmb->add_field( array(
        'id'          => 'banner_repeat_group',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Entry', 'cmb2' ),
            'remove_button' => __( 'Remove Entry', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb->add_group_field( $group_field_id, array(
		'name' => 'Image',
		'id'   => 'image',
		'type' => 'file',
	) );
}

?>
