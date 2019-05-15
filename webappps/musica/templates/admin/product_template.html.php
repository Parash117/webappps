<a href="addproduct">Add Products</a>
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
$categoryTable=new Database('category');
$table = new Table();
$table->setHeading(['Name','<style="width: 10%">Descripton','Type','<style="width: 5%">&nbsp;','<style="width: 5%">&nbsp;']);
foreach ($products as $product) {
  $categorys=$categoryTable->find('category_id',$product['p_type']);
  $category=$categorys->fetch();
  unset($product['p_type']);
  $product['cateogy_name']=$category['category_name'];
  $product['edit']='<a style="float: right" href="addproduct&eid=' . $product['pid'] . '">Edit</a>';
  $product['delete']='<form method="post" action="">
  <input type="hidden" name="id" value=' . $product['pid'] . ' />
  <input type="submit" name="delete" value="Delete" />
  </form>';
  unset($product['pid']);
  $table->addRow($product);
}
echo $table->getHTML();
?>
