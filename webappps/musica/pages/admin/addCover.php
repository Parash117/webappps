<?php
$cover=new Database('cover_img');
$title="Admin Home";
if(isset($_POST['addCover'])){
  foreach ($_FILES["images"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["images"]["name"][$key];
    $file_tmp=$_FILES["images"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    $extension=array("jpeg","jpg","png","gif");
    if(in_array($ext,$extension)){
      $name=$file_name;
      if(!file_exists("../../uploads/cover_image/".$file_name)){
        move_uploaded_file($file_tmp=$_FILES["images"]["tmp_name"][$key],"../../uploads/cover_image/".$file_name);
      }
      else{
        $filename=basename($file_name,$ext);
        $name=$filename.time().".".$ext;
        move_uploaded_file($file_tmp=$_FILES["images"]["tmp_name"][$key],"../../uploads/cover_image/".$name);
      }
      $cri=[
        'title'=>$_POST['title'],
        'cover_img'=>$name
      ];
      $cover->insert($cri);
    }
  }
}
$output=tampletLoader('../../templates/admin/addcover_template.html.php',[]);

?>
