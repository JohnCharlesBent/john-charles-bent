<?php
/** modal template -- displays on all pages as content loads, then fades out **/
$loadMessage = array(
  'Loading, please be patient...',
  'Engaging site content. Please wait.',
  'Welcome to the Olive Garden. Can I start you off with some breadsticks?',
  'Currently making it happen. I\'ll be with you soon.',
  'Setting phasers to stun...',
  'Are you the keymaster? I\'m the gatekeeper...',
  'Putting on my frip and finery. One sec...',
  'Fables of the Reconstruction is the best R.E.M album. Change my mind.',
  'Rock Lobster. Wahooooo...',
  'Waxing my mustache. Be there soon.'
);

$message = array_rand($loadMessage);

?>

 <div id="modal-window" class="hidden">
   <div class="modal-logo" class="hidden">
     <?php get_template_part('templates/svg/jb_logo'); ?>
   </div>
   <div class="loading-message"><?php echo $loadMessage[$message]; ?></div>
</div>
