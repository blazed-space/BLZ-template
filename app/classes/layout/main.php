<?php

class Layout_Main{
    static function do_header($page){
        $header = View::forge('templates/components/header');
        $header->active = Layout_Menu::build_active_array($page, 4);
        return $header;
    }
    static function do_footer(){
        $footer = View::forge('templates/components/footer');
        return $footer;
    }
}