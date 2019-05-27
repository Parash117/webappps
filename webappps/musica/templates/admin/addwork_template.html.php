<h2> Add Work</h2>

<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="pid" value="<?php if(isset($row['pid'])){echo $row['pid'];}?>">
<label> Title</label><br>
<input type="text" name="title" value="<?php if(isset($row['title'])){echo $row['title'];}?>"><br>
<label> Link</label><br>
<input type="text" name="link" value="<?php if(isset($row['link'])){echo $row['link'];}?>"><br>
<label>Image</label><br>
<input type="file" name="images[]" class="upload" /><br>
<input type="submit" name="addwork" value="Submit" id="submit">
</form>
