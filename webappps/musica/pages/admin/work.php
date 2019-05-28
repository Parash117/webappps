  <?php
  $title="Admin Home";
  $works=new Database('work');
  if(isset($_POST['delete'])){
    $works->delete('work_id',$_POST['id']);
  }
  $work=$works->findAll();
  $output=tampletLoader('../../templates/admin/work_template.html.php',['works'=>$work]);
   ?>
