  <h2> Add Cover</h2>

  <form method="post" action="" enctype="multipart/form-data">
  <input type="hidden" name="pid" value="<?php if(isset($row['pid'])){echo $row['pid'];}?>">
  <label> Title</label><br>
  <input type="text" name="title" value="<?php if(isset($row['title'])){echo $row['title'];}?>"><br>
  <label>Image</label><br>
  <input type="file" name="images[]" class="upload" /><br>
  <input type="submit" name="addCover" value="Submit" id="submit">
  </form>
