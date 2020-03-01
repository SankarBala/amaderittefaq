<?php
    if(is_home()){
        
        get_template_part('template-parts/homepage-sidebar'); 
        
    } else {
        
        get_template_part('template-parts/common-sidebar'); 
        
    }

?>