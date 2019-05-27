
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
<?php

$table = new Table();
$table->setHeading(['Name','<style="width: 10%">Phone','<style="width: 5%">&nbsp;']);
foreach ($orders as $order) {
  $order['edit']='<a style="float: right" href="vieworder&id=' . $order['rent_id'] . '">View</a>';
  unset($order['rent_id']);
  unset($order['items']);
  unset($order['seen']);
  $table->addRow($order);
}
echo $table->getHTML();
?>
