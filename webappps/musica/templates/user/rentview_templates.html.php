<?php
  $categories = new Database('category');
  $category = $categories->findAll();
  $productlist = new Database('product_0117');
?>
<style>
table {
 width: 20%;
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
<script>
  function check(a){
    b=document.getElementById(a).checked;
  if(window.XMLHttpRequest){
    xmlHTTP=new XMLHttpRequest();
    xmlHTTP.onreadystatechange=function(){
      if(this.readyState==4){
       // alert(this.responseText);
      }
    }
    xmlHTTP.open('POST',"../ajax/addcheck.php",true);
    var data = new FormData();
    data.append('check',a);
    data.append('status',b);
    xmlHTTP.send(data);
  }
}


  </script>
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(); height: 50px;">
<div class="bradcumbContent">
        <h2>Rent Sheet</h2>
    </div>
</div>
 <div class="bg-gradients"></div>



 <div class="container" style="width: 80%; margin-top: 50px;">
    <form method="POST" action="">
     <div class="row">
         <div class="col-12">

 <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="300ms">

<?php foreach ($category as $cat): ?>
   <table  style="width: 20%; float:left;">
     <tr>
         <th><?php echo $cat['category_name']; ?></th>
     </tr>
     <?php $products=$productlist->find('p_type',$cat['category_id']);?>
           <?php $i=0; foreach($products as $light){?>
                <tr>
                  <td>
                    <?php echo $light['pname']; ?>
                    <input type="checkbox" id="<?php echo $light['pid'];?>" name="<?php echo $light['pid'];?>" onclick="check('<?php echo $light['pid'];?>')" value="<?php echo $light['pid']; ?>">
                  </td>
                </tr>
           <?php }?>
         </table>
<?php endforeach; ?>
 </div>
 </div>
 </div>
 <input type="submit" name="submit" class="btn" value="Book">
 </form>
 </div>
