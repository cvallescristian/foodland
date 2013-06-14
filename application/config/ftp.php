<?php 

$this->load->library('ftp');
$config['hostname'] = 'ftp.ejemplo.com';
$config['username'] = 'su-usuario';
$config['password'] = 'su-contraseña';
$config['port']     = 21;
$config['passive']  = FALSE;
$config['debug']    = TRUE;
$this->ftp->connect($config);

 ?>