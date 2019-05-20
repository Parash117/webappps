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
table tr:nth-child(odd) {
  background-color: #eee;
}
table tr:nth-child(even) {
 background-color: #fff;
}
table th {
  background-color: black;
  color: white;
}
</style>
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(); height: 50px;">
<div class="bradcumbContent">
        <h2>select</h2>
    </div>
</div>
 <div class="bg-gradients"></div>



 <div class="container" style="width: 80%; margin-top: 50px;">
    <form method="GET" action="submit_rent">
     <div class="row">
         <div class="col-12">

 <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="300ms">

<h2>light:</h2>
<table border="5"><tr>
<?php for($i=0; $i<count($light);$i++){ ?>
<td> <?php echo $light[$i]; ?> </td>
<?php } ?>
</tr>
</table>
<br><br>

<h2>Grip:</h2>
<table border="5"><tr>
<?php for($i=0; $i<count($grip);$i++){ ?>
<td> <?php echo $grip[$i]; ?> </td>
<?php } ?>
</tr>
</table>
<br><br>
<h2>Camera:</h2>
<table border="5"><tr>
<?php for($i=0; $i<=count($camera);$i++){ ?>
<td> <?php echo $camera[$i]; ?> </td>
<?php } ?>
</tr>
</table>
<br><br>

<h2>Screen:</h2>
<table border="5"><tr>
<?php for($i=0; $i<count($screen);$i++){ ?>
<td> <?php echo $screen[$i]; ?> </td>
<?php } ?>
</tr>
</table>
<br><br>

<h2>lens:</h2>
<table border="5"><tr>
<?php for($i=0; $i<count($lens);$i++){ ?>
<td> <?php echo $lens[$i]; ?> </td>
<?php } ?>
</tr>
</table>
<br><br>
 </div>
 </div>
 </div>
 </div>
