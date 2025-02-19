<?php
function sjj_changelogo($wp_customize){
    $wp_customize->add_section('logoChnage',array(
        'title'=>_('logo upload','sjana'),
        'description'=> 'now you can change website logo'
    ));
    $wp_customize->add_setting('logoChange',array(
        'default' => get_bloginfo('template_directory').'/img/github.webp'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,'logoChange',array(
        'label' => 'logo upload',
        'description'=>'change your logo',
        'section' => 'logoChnage',
        'setting' => 'logoChange'
        );
        
    ));  

}
add_action('customize_register','sjj_changelogo');