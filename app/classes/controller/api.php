 
<?php

class Controller_Api extends Controller_Blz{
    public function action_get($endpoint, $query){
        $this->layout->page = 0;
        $this->layout->title = "BLZ-API-V1.0";
        switch($endpoint){
            default:
                $this->layout->response = "success.";
                break;
        }
    }
    public function action_post($endpoint){
        $this->layout->page = 0;
        $this->layout->title = "BLZ-WATCH-API-V1.0";
    }
}