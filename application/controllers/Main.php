<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	private $elastic = array();

	public function __construct() {
            parent::__construct();
			$this->elastic = array ("hosts" => array ( "host" => "http://techulus.cloudapp.net", "port" => "9200"));
       }

	public function index() {
		if($_FILES) {
			$client = new Elasticsearch\Client($this->elastic);
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1000000';
			$config['max_width']  = '10000';
			$config['max_height']  = '10000';
			$this->load->library('upload', $config);

			foreach ($_FILES as $file => $object) {
				if ( ! $this->upload->do_upload($file)) {
					new \dBug ($this->upload->display_errors());
				} else {
					$upload_data = $this->upload->data();
					$file_path = $upload_data['full_path'];
					imagepng(imagecreatefromstring(file_get_contents($file_path)), $file_path);
                    $hash = hash_file('sha256', $file_path);
                    rename($file_path,  './uploads/' .  $hash .  ".png");
					$key = substr($hash, 0, 10);

					$params = array();
				    $params['body']  = array('file_name' => $hash);
				    $params['index'] = 'images';
				    $params['type']  = 'string';
				    $params['id']    = $key;
				    $ret = $client->index($params);
					if($ret) {
						$data['key'] = $key;
						$this->load->view('upload_success', $data);
					}
				}
			}

		} else {
			$this->load->view('welcome_message');
		}
	}

	public function api($key) {
		$client = new Elasticsearch\Client($this->elastic);
		$getParams = array();
	    $getParams['index'] = 'images';
	    $getParams['type']  = 'string';
	    $getParams['id']    = $key;
	    $file = $client->get($getParams);
		$filename = $file['_source']['file_name'].'.png';
		$im = imagecreatefrompng("./uploads/".$filename);
		header('Content-Type: image/png');
		imagepng($im);
	}
}
