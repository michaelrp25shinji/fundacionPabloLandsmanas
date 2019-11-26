<?php

/*
Widget Name: Divider top
Description: Draws a line or a divider with a Back to Top link on the right. The user is smooth scrolled to the top of the page upon clicking the Back to Top link.
Author: LiveMesh
Author URI: https://www.livemeshthemes.com
*/


class MO_Divider_Top_Widget extends SiteOrigin_Widget {
    function __construct() {
        parent::__construct(
            "divider_top",
            __("Divider top", "mo_theme"),
            array(
                "description" => __("Draws a line or a divider with a Back to Top link on the right. The user is smooth scrolled to the top of the page upon clicking the Back to Top link.", "mo_theme"),
                "panels_icon" => "dashicons dashicons-minus",
            ),
            array(),
            array(
            )
        );
    }

    function get_template_variables($instance, $args) {
        return array(
        );
    }

}
siteorigin_widget_register("divider_top", __FILE__, "MO_Divider_Top_Widget");