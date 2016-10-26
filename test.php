<?php 

require_once('minifyr.php');


$debug  = isset( $_GET[ 'debug' ] ) ? TRUE : FALSE;
$screen = isset( $_GET[ 'screen' ] ) ? TRUE : FALSE;
$files  = isset( $_GET[ 'f' ] ) ? $_GET[ 'f' ] : NULL;

$m = new RT\Minifyr($debug, $screen);
$m->files( explode(',', $files) )->uglify(true)->render();

?>
