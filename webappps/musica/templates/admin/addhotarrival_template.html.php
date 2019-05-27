<h2> Add hotarrival</h2>

<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="haid" value="<?php if(isset($row['haid'])){echo $row['haid'];}?>">
<label> Title</label><br>
<input type="text" name="title" value="<?php if(isset($row['title'])){echo $row['title'];}?>"><br>
<label>Image</label><br>
<input type="file" name="images[]" class="upload" /><br>
<label>Date: </label>
<input type="date" name="date" >
<input type="submit" name="addhotarrival" value="Submit" id="submit">
</form>
