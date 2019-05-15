<?php
$categoryTable=new Database('category');
$productTable=new Database('product_0117');
$image=new Database('product_image');
if(isset($_POST['addProduct'])){
  $criteria=['pname'=>$_POST['pname'],
              'p_type'=>$_POST['p_type'],
              'discription'=>$_POST['discription'],
              'pid'=>$_post['pid']];
  $productTable->save($criteria,'pid');
  $pid=$productTable->lastInsertId();
  foreach ($_FILES["images"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["images"]["name"][$key];
    $file_tmp=$_FILES["images"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    $extension=array("jpeg","jpg","png","gif");
    if(in_array($ext,$extension)){
      $name=$file_name;
      if(!file_exists("../uploads/images/".$file_name)){
        move_uploaded_file($file_tmp=$_FILES["images"]["tmp_name"][$key],"../uploads/images/".$file_name);
      }
      else{
        $filename=basename($file_name,$ext);
        $name=$filename.time().".".$ext;
        move_uploaded_file($file_tmp=$_FILES["images"]["tmp_name"][$key],"../uploads/images/".$name);
      }
      $cri=[
        'image_name'=>$name,
        'pid'=>$pid
      ];
      $image->insert($cri);
    }
  }

  header('location:product');
}

if(isset($_GET['eid'])){
  $products=$productTable->find('pid',$_GET['eid']);
  $row=$products->fetch();
}else{
  $row=[];
}
$categories=$categoryTable->findAll();
$title="Products";
$output=tampletLoader('../templates/admin/addproduct_template.html.php',['categories'=>$categories,'row'=>$row]);
 ?>
