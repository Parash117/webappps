<script>
$(document).ready(function(){
  $("form").on("click",".upload",function(){
    $("#submit").remove();
    $("form").append("<label></label><input type='file' name='images[]' class='upload'><br> <input type='submit' name='addProduct' value='Submit' id='submit'  />");
  });
});
</script>

<h2> Add Products</h2>

<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="pid" value="<?php if(isset($row['pid'])){echo $row['pid'];}?>">
<label> Name</label><br>
<input type="text" name="pname" value="<?php if(isset($row['pname'])){echo $row['pname'];}?>"><br>
<label> Description</label><br>
<textarea rows="4" cols="50" name="discription"><?php if(isset($row['discription'])){echo $row['discription'];}?></textarea><br>
<label>Category</label><br>
<select name="p_type">
<?php foreach ($categories as $category) {?>
<option value="<?=$category['category_id']?>"  <?php if(isset($row['p_type'])){if($category['category_id']==$row['p_type']){echo "selected";}}?>><?=$category['category_name']?></option>
<?php }?>
</select><br><br>
<label>Image</label><br>
<input type="file" name="images[]" class="upload" /><br>
<input type="submit" name="addProduct" value="Submit" id="submit">
</form>
