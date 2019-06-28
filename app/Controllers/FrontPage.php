<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

  public function SliderHome() {

    $sliders = [];

    if( have_rows('slide_home', 'option') ):
        while ( have_rows('slide_home', 'option') ) : the_row();
          $slider = [
            'link' => get_sub_field('link_slide', 'option'),
            'image' => get_sub_field('image_slide', 'option'),
          ];
          $sliders[] = $slider;
        endwhile;
    endif;

    return $sliders;
  }

}
