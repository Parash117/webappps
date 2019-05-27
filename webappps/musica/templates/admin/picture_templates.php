<style>
.pictures{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}
.ass{
    display: flex;
    flex-direction: column;
}
.but{
    display:flex;
    align-items: flex-start;
}
</style>
<div class="pictures">
<?php
foreach ($images as $img) {
  if (file_exists('../uploads/images/' . htmlspecialchars($img['image_name']))) {
    echo '<div class="ass">';
    echo '<div class="images">';
    echo '<a href="../uploads/images/' . htmlspecialchars($img['image_name']) . '"><img style="height:200px;width:200px;" src="../uploads/images/' . htmlspecialchars($img['image_name']) . '" /></a>';
    echo '</div>';
    echo '<div class="but">';
    echo '<form method="post" action="">
  <input type="hidden" name="id" value=' . $img['image_id'] . ' />
  <input type="submit" name="delete" value="Delete" />
  </form>';
  echo '</div>';
  echo '</div>';
  }
}

?>
</div>