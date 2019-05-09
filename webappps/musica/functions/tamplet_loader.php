<?php
  function tampletLoader($pagename,$data){
    extract($data);
    ob_start();
    require $pagename;
    $output = ob_get_clean();
    return $output;
  }
 ?>
