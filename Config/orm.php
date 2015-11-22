<?php
 
require_once './venders/php-activerecord/ActiveRecord.php'; 
// require_once './venders/rych/phpass/PHPassLib.php'; 
ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory('./Model');
     $cfg->set_connections(array(
        'development' => 'mysql://nodalinf_roadHuk:VTM.otTFIQzQ@localhost/nodalinf_roadHunk'));
 });


//$make = 'PHPassLib\Hash\BCrypt';