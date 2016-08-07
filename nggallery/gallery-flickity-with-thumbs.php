<div class="gallery">
  <div class="gallery-carousel">
    <?php foreach ($images as $image):
    $alt = $image->alttext == ' ' ? '': htmlspecialchars($image->alttext);
    $meta_full = $image->meta_data['full'];
    echo "
    <img class='gallery-cell'
         src='{$image->imageURL}'
         alt='{$alt}'
         title='{$alt}'
    />";
    endforeach; ?>
  </div>
  <div class="gallery-navigation">
    <?php foreach ($images as $image):
    $alt = $image->alttext == ' ' ? '': htmlspecialchars($image->alttext);
    echo "
    <img class='gallery-thumb'
         src='{$image->thumbURL}'
         alt='{$alt}'
         title='{$alt}'
    />";
    endforeach; ?>
  </div>
</div>
