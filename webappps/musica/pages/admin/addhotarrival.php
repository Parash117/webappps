<?php
$hot=new Database('hotarrival');
$title="Admin Home";
if(isset($_POST['addhotarrival'])){
  foreach ($_FILES["images"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["images"]["name"][$key];
    $file_tmp=$_FILES["images"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    $extension=array("jpeg","jpg","png","gif");
    if(in_array($ext,$extension)){
      $name=$file_name;
      if(!file_exists("../uploads/hotarrivals/".$file_name)){
        move_uploaded_file($file_tmp=$_FILES["images"]["tmp_name"][$key],"../uploads/hotarrivals/".$file_name);
      }
      else{
        $filename=basename($file_name,$ext);
        $name=$filename.time().".".$ext;
        move_uploaded_file($file_tmp=$_FILES["images"]["tmp_name"][$key],"../uploads/hotarrivals/".$name);
      }
      $cri=[
        'title'=>$_POST['title'],
        'image'=>$name,
        'hdate'=>$_POST['date']
      ];
      $hot->insert($cri);
    }
  }
}
$output=tampletLoader('../templates/admin/addhotarrival_template.html.php',[]);

?>
