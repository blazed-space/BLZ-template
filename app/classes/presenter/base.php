<?php
    class Presenter_Base extends Presenter{
        public function view(){
            $site = \Config::get('site');
            $meta = $site['meta'];
            $this->t = $site;
            if(isset($this->title)){
              $this->t .= ' | ' . $this->title;  
            } 
            if(isset($this->desc)){
                $this->d = $this->desc;
            } else {
                $this->d = $meta['default_desc'];
            }
            $this->color = $meta['site_color'];
            $this->contact_email = $meta['contact_email'];

            $this->actual_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            //$this->fb_app_id = $site['fb']['app_id'];
            //$this->google_site_verification = $site['google']['verification'];
            

            // Only load FB & RC SDK on login and register pages
            if(($this->page === 4) || ($this->page === 3)){
                // Only load FB & RC SDK in PRODUCTION
                if(\Fuel::$env == \Fuel::PRODUCTION){
                    $this->rc_sdk = '<script src="https://www.google.com/recaptcha/api.js"></script>';
                }
            }
        }
    }