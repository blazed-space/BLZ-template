 
<?php

class Controller_Base extends Controller_Blz{
    public function action_index(){
        $this->layout->page = 1;
        $this->layout->content = View::forge('pages/home');
    }
}