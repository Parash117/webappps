<a href="addCover">Add Products</a>
<style>
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
</style>
<?php
$table = new Table();
$table->setHeading(['Name','<style="width: 10%">Image','Option']);
foreach ($covers as $row) {
  $row['image']='<img src="../uploads/cover_image/'.$row['cover_img'].'" style="height:200px;width:300px;"></img>';
  unset($row['cover_img']);
  $row['delete']='<form method="post" action="">
  <input type="hidden" name="id" value=' . $row['cover_id'] . ' />
  <input type="submit" name="delete" value="Delete" />
  </form>';
  unset($row['cover_id']);
  $table->addRow($row);
}
echo $table->getHTML();
?>
