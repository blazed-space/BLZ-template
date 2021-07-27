<?php

    class Layout_Menu{
        public static function build_active_array($page, $max_pages){
            $active = array();
            for($i = 0; $i <= $max_pages; $i++){
              $e = '';
              if(isset($page)):
                if($i == $page){
                  $e = ' active'; 
                }
              endif;
              $active[$i] = $e;
            } 
            return $active;
        }
    }