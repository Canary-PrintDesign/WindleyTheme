<?php
  $key = 'client-name';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <span class="title">Client:</span><span class="desc"><?php echo(get_post_meta( get_the_ID(), 'client-name', true ));?></span>
  <?php
  }
?>
<?php
  $key = 'location';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <span class="title">Location:</span><span class="desc"><?php echo(get_post_meta( get_the_ID(), 'location', true ));?></span>
  <?php
  }
?>
<?php
  $key = 'size';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <span class="title">Size:</span><span class="desc"><?php echo(get_post_meta( get_the_ID(), 'size', true ));?></span>
  <?php
  }
?>
<?php
  $key = 'website';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <span class="title">Website:</span>
    <a href="http://<?php echo(get_post_meta( get_the_ID(), 'website', true ));?>">
      <span class="desc"><?php echo(get_post_meta( get_the_ID(), 'website', true ));?></span>
    </a>
  <?php
  }
?>
<?php
  $key = 'consultant1';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <span class="title">Consultant:</span><span class="desc"><?php echo(get_post_meta( get_the_ID(), 'consultant1', true ));?></span>
  <?php
  }
?>
<?php
  $key = 'consultant2';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <span class="title">Consultant:</span><span class="desc"><?php echo(get_post_meta( get_the_ID(), 'consultant2', true ));?></span>
  <?php
  }
?>
<?php
  $key = 'consultant3';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <span class="title">Consultant:</span><span class="desc"><?php echo(get_post_meta( get_the_ID(), 'consultant3', true ));?></span>
  <?php
  }
?>
<?php
  $key = 'consultant4';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <span class="title">Consultant:</span><span class="desc"><?php echo(get_post_meta( get_the_ID(), 'consultant4', true ));?></span>
  <?php
  }
?>
<?php
  $key = 'consultant5';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <span class="title">Consultant:</span><span class="desc"><?php echo(get_post_meta( get_the_ID(), 'consultant5', true ));?></span>
  <?php
  }
?>
