<?php
// Control SSLSwitcher
if( isset($output) ){
  $onSSL=false;
  $sslKeys=array('HTTPS','X-HTTPS','HTTP_X_HTTPS');
  foreach( $sslKeys as $key ){
    if( isset($_SERVER[$key]) && $_SERVER[$key] != 'off' ){
      $onSSL=true;
    }
  }

  $srcSSL=preg_match('/<base +href="https:/i',$output);
  if( $onSSL && !$srcSSL ){
    // https -> http
    header('HTTP/1.0 301 Moved Permanently');
    header('Location:http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
  }elseif( !$onSSL && $srcSSL ){
    // http -> https
    header('HTTP/1.0 301 Moved Permanently');
    header('Location:https://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
  }
}
