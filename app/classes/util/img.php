<?php
/***********************************************************
* #### PHP Image Compressor Class ####
* Coded by Ican Bachors 2016.
* http://ibacor.com/labs/php-image-compressor-class
* Updates will be posted to this site.
***********************************************************/

class Util_Img {
	
	function __construct($setting) {
		$this->setting = $setting;
	}
	
	private function create($image, $name, $type, $size, $c_type, $level) {
		
		$im_name = time().$name;
		$im_output = $this->setting['directory'].'/'.$im_name;
		$im_ex = explode('.', $im_output); 
		
		if($type == 'image/jpeg'){
			$im = imagecreatefromjpeg($image); 
		}else if($type == 'image/gif'){
			$im = imagecreatefromgif($image); 
		}else{
			$im = imagecreatefrompng($image);  
		}
	
		if(in_array($c_type, array('jpeg','jpg','JPG','JPEG'))){
			$im_name = str_replace(end($im_ex), 'jpg', $im_name);
			$im_output = str_replace(end($im_ex), 'jpg', $im_output); 
			if(!empty($level)){
				imagejpeg($im, $im_output, 100 - ($level * 10)); 
			}else{
				imagejpeg($im, $im_output, 100);
			}
			$im_type = 'image/jpeg';
			
		}else if(in_array($c_type, array('gif','GIF'))){
			$im_name = str_replace(end($im_ex), 'gif', $im_name);
			$im_output = str_replace(end($im_ex), 'gif', $im_output); 
			if($this->check_transparent($im)) { 
				imageAlphaBlending($im, true);
				imageSaveAlpha($im, true);
				imagegif($im, $im_output);
			}
			else {
				imagegif($im, $im_output);
			}
			$im_type = 'image/gif';
			
		}else if(in_array($c_type, array('png','PNG'))){
			$im_name = str_replace(end($im_ex), 'png', $im_name); 
			$im_output = str_replace(end($im_ex), 'png', $im_output); 
			if($this->check_transparent($im)) { 
				imageAlphaBlending($im, true);
				imageSaveAlpha($im, true);
				imagepng($im, $im_output, $level);
			}
			else {
				imagepng($im, $im_output, $level); 
			}
			$im_type = 'image/png';
		}
		

		imagedestroy($im);
		

		$im_size = filesize($im_output);
		$data = array(
			'original' => array(
				'name' => $name,
				'image' => $image,
				'type' => $type,
				'size' => $size
			),
			'compressed' => array(
				'name' => $im_name,
				'image' => $im_output,
				'type' => $im_type,
				'size' => $im_size
			)
		);
		return $data;
	}

	private function check_transparent($im) {

		$width = imagesx($im); 
		$height = imagesy($im); 

		for($i = 0; $i < $width; $i++) {
			for($j = 0; $j < $height; $j++) {
				$rgba = imagecolorat($im, $i, $j);
				if(($rgba & 0x7F000000) >> 24) {
					return true;
				}
			}
		}

		return false;
	}  
	
	function run($image, $c_type, $level = 0) {
		
		$im_info = getImageSize($image);
		$im_name = basename($image);
		$im_type = $im_info['mime'];
		$im_size = filesize($image);
		
		$result = array();
		
		if(in_array($c_type, array('jpeg','jpg','JPG','JPEG','gif','GIF','png','PNG'))) { 
			if(in_array($im_type, $this->setting['file_type'])){
				if($level >= 0 && $level <= 9){
					$result['status'] = 'success';
					$result['data'] = $this->create($image, $im_name, $im_type, $im_size, $c_type, $level);
				}else{
					$result['status'] = 'error';
					$result['message'] = 'Compression level: from 0 (no compression) to 9';
				}
			}else{
				$result['status'] = 'error';
				$result['message'] = 'Failed file type';
			}
		}else{
			$result['status'] = 'error';
			$result['message'] = 'Failed file type';
		}
		
		return $result;
	}
	
}