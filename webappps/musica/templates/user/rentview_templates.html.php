<?php
  $categories = new Database('category');
  $category = $categories->findAll();
  //$prod = $products->fetchAll();
  $prod = array('light', 'grips', 'camera', 'screen', 'lens');
  foreach ($product as $pro) {
    if($pro['p_type']==1){
      array_push($prod['light'], $pro['pname']);
    }
    elseif($pro['p_type']==2){
      array_push($prod['grips'], $pro['pname']);
    }
    elseif($pro['p_type']==3){
      array_push($prod['camera'], $pro['pname']);
    }
    elseif($pro['p_type']==4){
      array_push($prod['screen'], $pro['pname']);
    }
    elseif($pro['p_type']==5){
      array_push($prod['lens'], $pro['pname']);
    }
    else{

    }
  }
?>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table tr:nth-child(even) {
  background-color: #eee;
}
table tr:nth-child(odd) {
 background-color: #fff;
}
table th {
  background-color: black;
  color: white;
}
</style>
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(); height: 50px;">
<div class="bradcumbContent">
        <h2>Rent Sheet</h2>
    </div>
</div>
 <div class="bg-gradients"></div>



 <div class="container" style="width: 80%; margin-top: 50px;">
     <div class="row">
         <div class="col-12">

 <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="300ms">
   <table border="5">

     <tr>
       <?php foreach ($category as $cat): ?>
         <th><?php echo $cat['category_name']; ?></th>
       <?php endforeach; ?>

     </tr>
<?php foreach($prod as $pp){?>
     <tr>
       <?php foreach($pp as $key => $value){?>
       <td>
         <?php echo $value ?>
       </td>
     <?php }?>
     </tr>
<?php }?>
   </table>


 </div>
 </div>
 </div>
 </div>
