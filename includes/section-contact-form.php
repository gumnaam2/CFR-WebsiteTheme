<?php
$post = get_page_by_path("contact-form");
?>

<section id="contact-form">
  <style type="text/css">   @import url("<?php echo get_template_directory_uri(); ?>/css/contactus-css/contactusform.css"); </style>
  <div class="container-fluid">

    <div class="heading-container">
      <?php echo "<div class='heading-overlay'>" . $post->post_title . "</div>";?>
    </div>

    <?php echo apply_filters( 'the_content', $post->post_content );?>
  </div>
</section>

<section></section>

<section>
  <div id="postbox-container">
    <div>
    </div>

    <div>
      <img id="postbox" src="<?php echo get_template_directory_uri();?>/images/postbox.svg">
    </div>
  </div>

  <div class="instawall-section-container container-fluid">
    <div class="bedrock-container">
        <div>
            <img class="bedrock-img" src="<?php echo get_template_directory_uri();?>/images/instarock.svg">
        </div>
   </div>
</div>
</section>
