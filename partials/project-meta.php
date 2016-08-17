<?php
  $key = 'client-name';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <div class="meta-table">
      <span class="title">Client:</span>
      <span class="desc"><?php echo(get_post_meta( get_the_ID(), 'client-name', true ));?></span>
    </div>
  <?php
  }
?>

<?php
  $key = 'location';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <div class="meta-table">
      <span class="title">Location:</span>
      <span class="desc"><?php echo(get_post_meta( get_the_ID(), 'location', true ));?></span>
    </div>
  <?php
  }
?>

<?php
  $key = 'size';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <div class="meta-table">
      <span class="title">Size:</span>
      <span class="desc"><?php echo(get_post_meta( get_the_ID(), 'size', true ));?></span>
    </div>
  <?php
  }
?>

<?php
  $key = 'consultant1';
  $themeta = get_post_meta($post->ID, $key, TRUE);
  if($themeta != '') { ?>
    <div class="meta-table">
      <span class="title">Consultant:</span>
      <span class="desc">
        <?php echo(get_post_meta( get_the_ID(), 'consultant1', true ));?>

        <?php
          $key = 'consultant2';
          $themeta = get_post_meta($post->ID, $key, TRUE);
          if($themeta != '') { ?>
                <hr><?php echo(get_post_meta( get_the_ID(), 'consultant2', true ));?>
        <?php
          }
        ?>
        <?php
          $key = 'consultant3';
          $themeta = get_post_meta($post->ID, $key, TRUE);
          if($themeta != '') { ?>
                <hr><?php echo(get_post_meta( get_the_ID(), 'consultant3', true ));?>
        <?php
          }
        ?>
        <?php
          $key = 'consultant4';
          $themeta = get_post_meta($post->ID, $key, TRUE);
          if($themeta != '') { ?>
                <hr><?php echo(get_post_meta( get_the_ID(), 'consultant4', true ));?>
        <?php
          }
        ?>
        <?php
          $key = 'consultant5';
          $themeta = get_post_meta($post->ID, $key, TRUE);
          if($themeta != '') { ?>
                <hr><?php echo(get_post_meta( get_the_ID(), 'consultant5', true ));?>
        <?php
          }
        ?>
      </span>
    </div>
  <?php
  }
?>
