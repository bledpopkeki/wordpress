<?php
function wpdevs_customizer( $wp_customize ){
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'=>'Copyright Settings',
            'decription'=> 'Copyright Settings',
        )
        );
        $wp_customize->add_setting(
            'set_copyright',
            array(
                'type'=>'theme_mod'
                'default'=> 'Copyright X - All Rights Reserved',
                'sanitize_callback'=> 'sanitize_text_field'
            )
            );
        }
?>