<div class="gallery">
  <div class="gallery-carousel">
    <?php foreach ($images as $image):
    $alt = $image->alttext == ' ' ? '': htmlspecialchars($image->alttext);
    $meta_full = $image->meta_data['full'];
    echo "
    <div class='gallery-cell background-image'
         style='background-image: url({$image->imageURL});'
         data-title='{$alt}'
    ></div>";
    endforeach; ?>
  </div>
</div>
