<?php
$title="Admin Home";
$hot=new Database('hotarrival');
if(isset($_POST['delete'])){
  $hot->delete('haid',$_POST['id']);
}
$hots=$hot->findAll();
$output=tampletLoader('../../templates/admin/hotarrival_template.html.php',['hot'=>$hots]);
 ?>
