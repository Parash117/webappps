<h3>Name:<?=$order['name']?></h3>
<h3>Phone:<?=$order['phone']?></h3><br><br>
<h3>Order List</h3>
    <?php
    $product = new Database('product_0117');
    $items=explode(',',$order['items']);
    foreach($items as $item){
        if($item!=''){
        $proo=$product->find('pid',$item);
        $pro=$proo->fetch();
        echo $pro['pname'];
        echo '<br>';
        }
    }
?>

<?php if($order['seen']==0){ 
    ?>

<form action="" method="POST">
    <input type="hidden" name="rent_id" value="<?=$order['rent_id']?>">
<input type="submit" name="submit" value="Mark As Read">
</form>
<?php }else{
    echo '<br><br>';
    echo "This order is already marked.";
} ?>