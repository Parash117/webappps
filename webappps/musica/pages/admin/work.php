  <?php
  $title="Admin Home";
  $work=new Database('work');
  if(isset($_POST['addwork'])){
    foreach ($_FILES["images"]["tmp_name"] as $key=>$tmp_name) {
      $file_name=$_FILES["images"]["name"][$key];
      $file_tmp=$_FILES["images"]["tmp_name"][$key];
      $ext=pathinfo($file_name,PATHINFO_EXTENSION);
      $extension=array("jpeg","jpg","png","gif");
      if(in_array($ext,$extension)){
        $name=$file_name;
        if(!file_exists("../uploads/work/".$file_name)){
          move_uploaded_file($file_tmp=$_FILES["images"]["tmp_name"][$key],"../uploads/work/".$file_name);
        }
        else{
          $filename=basename($file_name,$ext);
          $name=$filename.time().".".$ext;
          move_uploaded_file($file_tmp=$_FILES["images"]["tmp_name"][$key],"../uploads/work/".$name);
        }
        $cri=[
          'title'=>$_POST['title'],
          'link'=>$_POST['link'],
          'image'=>$name
        ];
        $work->insert($cri);
      }
    }
  }
  $output=tampletLoader('../templates/admin/work_template.html.php',[]);
   ?>
