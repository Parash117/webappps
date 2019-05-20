<?php
  $categories = new Database('category');
  $category = $categories->findAll();
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
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(); height: 50px;">
<div class="bradcumbContent">
        <h2>Rent Sheet</h2>
    </div>
</div>
 <div class="bg-gradients"></div>



 <div class="container" style="width: 80%; margin-top: 50px;">
    <form method="GET" action="submit_rent">
     <div class="row">
         <div class="col-12">

 <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="300ms">

<?php foreach ($category as $cat): ?>
   <table  style="width: 20%; float:left;">
     <tr>
         <th><?php echo $cat['category_name']; ?></th>
     </tr>
     </table>
<?php endforeach; ?>
         <table style="float: left;">
           <?php $i=0; foreach($lights as $light){?>
                <tr>
                  <td>
                    <?php echo $light['pname']; ?>
                    <input type="checkbox" name="light[<?php echo $i++; ?>]" value="<?php echo $light['pid']; ?>"
                  </td>
                </tr>
           <?php }?>
         </table>

         <table style="float: left;">
           <?php $i=0; foreach($grips as $grip){?>
                <tr>
                  <td>
                    <?php echo $grip['pname']; ?>
                    <input type="checkbox" name="grip[<?php echo $i++; ?>]" value="<?php echo $grip['pid']; ?>"
                  </td>
                </tr>
           <?php }?>
         </table>

         <table style="float: left;">
           <?php $i=0; foreach($cameras as $camera){?>
                <tr>
                  <td>
                    <?php echo $camera['pname']; ?>
                    <input type="checkbox" name="camera[<?php echo $i++; ?>]" value="<?php echo $camera['pid']; ?>"
                  </td>
                </tr>
           <?php }?>
         </table>

         <table style="float: left;">
           <?php $i=0; foreach($screens as $screen){?>
                <tr>
                  <td>
                    <?php echo $screen['pname']; ?>
                    <input type="checkbox" name="screen[<?php echo $i++; ?>]" value="<?php echo $screen['pid']; ?>"
                  </td>
                </tr>
           <?php }?>
         </table>

         <table style="float: left;">
           <?php $i=0; foreach($lens as $len){?>
                <tr>
                  <td>
                    <?php echo $len['pname']; ?>
                    <input type="checkbox" name="lens[<?php echo $i++; ?>]" value="<?php echo $len['pid']; ?>"
                  </td>
                </tr>
           <?php }?>
         </table>









 </div>
 </div>
 </div>
 <input type="submit" name="submit" class="btn">
 </form>
 </div>
