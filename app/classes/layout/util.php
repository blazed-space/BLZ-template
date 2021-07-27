<?php

class Layout_Util{
    public static function format_api_response($type, $obj = null){
        return json_encode($obj);
    }
}