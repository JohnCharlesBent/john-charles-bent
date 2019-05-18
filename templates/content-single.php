<?php 

$type = get_post_type(); 
if($type == 'design'):
  $type = 'design & development';
endif;

while (have_posts()) : the_post(); 

$imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
$imgurl = $imgdata[0]; // the url of the thumbnail picture
$imgwidth = $imgdata[1]; // thumbnail's width
$imgheight = $imgdata[2]; // thumbnail's height

if($imgwidth < 800) {
  $background = 'height:200px;';
} else {
  $background = 'background:url('. get_the_post_thumbnail_url().') no-repeat 20% 20% fixed;';
}

?>

   <div class="single-page-header" style="<?php echo $background; ?>">
     <div class="cover-title">
       <h1><?php the_title(); ?></h1>
       <div class="category"><?php echo $type; ?></div>
     </div>
    </div>
   
    <div class="interior-content">
      <div class="work">
        <div class="work-img">
          <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-title="<?php echo get_the_post_thumbnail_caption(); ?>" rel="<?php echo get_the_title() .' project images'; ?>" data-lightbox="gallery">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title().' image';  ?>" />
        </a>
        </div>
        <div class="work-details">
          <div class="title">
            <h2><?php the_title(); ?></h2>
          </div>
        
          <div class="description">
            <?php
              if(get_field('client') != ''):
            ?>
            <div class="client details">
              Client: <strong><?php echo get_field('client'); ?></strong>
            </div>
            <?php
              endif;

              if(get_field('site_url')):
            ?>
             <div class="site_url details">
              <a href="<?php echo get_field('site_url'); ?>" target="_blank">
               <i class="fa fa-code" aria-hidden="true"></i> View Project
              </a>
            </div>
            <?php
              endif;

              if(get_field('github_repo')):
            ?>
              <div class="github_repo details">
                <a href="<?php echo get_field('github_repo'); ?>" target="_blank">
                  <i class="fa fa-github" aria-hidden="true"></i> View Github Repo
                </a>
              </div>
          <?php endif; ?>
            <?php the_content(); ?>
          </div>
         
        <?php
        if(have_rows('skills')):
        ?>
          <div class="skills-list">
              <strong>Skills Applied:</strong>
                <div class="skills">
                <?php
                  while(have_rows('skills')) : the_row();
                ?>
                  <span class="skill">
                    <?php echo get_sub_field('skill'); ?>
                  </span>
                <?php
                  endwhile;
                ?>
             </div>
          </div>
           <?php
            endif;
           ?>
        </div><!-- End .work-details -->
      </div>

      <?php
      $project_images = get_field('related_images');
      $display = 'thumbnail';
      $size = 'full';

      if($project_images):
      ?>

      <div class="work-gallery__wrapper">
        <h2>Project Images</h2>
        <ul class="related_images">
          <li>
             <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-title="<?php echo get_the_post_thumbnail_caption(); ?>" rel="<?php echo get_the_title() .' project images'; ?>" data-lightbox="gallery">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>" />
            </a>
           </li>
      <?php
      foreach($project_images as $img):
      ?>
        <li>
          <a href="<?php echo $img['url']; ?>" data-title="<?php echo $img['caption']; ?>" rel="<?php echo get_the_title() .' project images'; ?>" data-lightbox="gallery">
            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
          </a>
        </li>
      <?php
      endforeach;
      ?>
        </ul>
      </div>
      <?php
      endif;
      ?>

<?php endwhile; ?>
</div>

