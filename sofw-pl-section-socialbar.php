<?php
/*

  Plugin Name: PageLines Section Socialbar

  Description: A Pagelines Platform 5 section for displaying social icon links.

  Author:      Jeremy Caris
  
  Author URI:   https://714web.com/

  Version:     1.0

  PageLines:   PL_SOFW_Section_Socialbar

  Tags:         starter

  Category:     framework, sections

  Filter:       component

*/

if (!defined('ABSPATH')) exit();


/*
*
* Note: Pagelines seems to force Platform 5 class extension plugin update 
* checks through their system, rendering custom update checkers ineffective.
*
*/


if( ! class_exists('PL_Section') ){
    return;
}

class PL_SOFW_Section_Socialbar extends PL_Section {
    
    function section_persistent() {}
    
    function section_styles() {}
    
    function section_opts() {
        
        $options = array(
            pl_std_opt('icons'),
        );
    
        $options[] =  array(
            'key'     => 'nopadding',
            'type'    => 'check',
            'label'   => __( 'Full Width', 'pagelines' ),
        );
    
        $options[] =  array(
            'key'     => 'brandcolors',
            'type'    => 'check',
            'label'   => __( 'Use brand colors', 'pagelines' ),
        );
    
        return $options;
    }
    
    function section_template() {
        ?>
        <div class="sofw-socialbar-wrapper pl-content-area" data-bind="plclassname: [nopadding() == 1 ? 'nopadding' : '']">
            <div data-bind="plclassname: [brandcolors() == 1 ? 'brandcolors' : '']">
                <div class="socialbar-icons" data-bind="plicons: icons"></div>
            </div>
        </div>
    <?php
  }

}
