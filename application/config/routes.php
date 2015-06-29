<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['api/(.+?)'] = 'main/api/$1';

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
