<?php
  if(have_rows('module')){
    while(have_rows('module')){
      the_row();
      switch(get_row_layout()){
        case 'headline':
          get_template_part('modules/headline');
          break;
        case 'subline':
          get_template_part('modules/subline');
          break;
        case 'copytext':
          get_template_part('modules/copytext');
          break;
        case 'aufklapp-boxen':
          get_template_part('modules/aufklapp-boxen');
          break;
        case 'bild':
          get_template_part('modules/bild');
          break;
        case 'parallax':
          get_template_part('modules/parallax');
          break;
        case 'slider':
          get_template_part('modules/slider');
          break;
        case 'header':
          get_template_part('modules/header');
          break;
        case 'google-map':
          get_template_part('modules/googlemaps');
          break;
        case 'text-bild':
          get_template_part('modules/text-bild');
          break;
        case 'galerie':
          get_template_part('modules/galerie');
          break;
          case 'galerie-responsiv':
            get_template_part('modules/galerie-responsiv');
            break;
        case 'text-slider':
          get_template_part('modules/text-slider');
          break;
        case 'video':
          get_template_part('modules/video');
          break;
        case 'zitatbox':
          get_template_part('modules/zitatbox');
          break;
        case 'kontaktformular':
            get_template_part('modules/kontaktformular');
          break;
        case 'trenner_infos':
            get_template_part('modules/trenner_infos');
          break;
        case 'trenner-text':
            get_template_part('modules/trenner-text');
          break;
        case 'icon':
            get_template_part('modules/icon');
          break;
          default:
          break;
      }
    }
  }
?>