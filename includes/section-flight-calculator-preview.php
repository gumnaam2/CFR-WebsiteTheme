<?php
$post = get_page_by_path("flight-calculator-preview");
$doc = new DOMDocument();
$doc->loadHTML( apply_filters( 'the_content', $post->post_content ) );
$doc = new DOMXPath( $doc );
?>

<section>
  <style type="text/css">   @import url("<?php echo get_template_directory_uri(); ?>/css/homepage-css/flights-calc.css"); </style>
  <div class="home-post container-fluid">
    <div class="heading-container">
    <?php
      echo "<div class='heading-overlay'>" . $post->post_title . "</div>";
      echo "<div class='heading-watermark'>" . $doc->query("//h1")[0]->nodeValue . "</div>";
    ?>
      <img src="<?php echo get_template_directory_uri();?>/images/flight-symbol.svg">
    </div>

    <form action="<?php echo $doc->query('//a')[0]->nodeValue;?>">
      <input type="submit" value="<?php echo $doc->query("//h2")[0]->nodeValue;?>">
    </form>

    <div class="full-row">
      <img src="<?php echo get_template_directory_uri();?>/images/balloon2.svg">
    </div>

    <div class="row">

      <div class="col-md-6">
        <div>
          <a href="<?php echo $doc->query('//a')[1]->nodeValue;?>">
            <div></div>
          </a>
        </div>

        <img src="<?php echo get_template_directory_uri();?>/images/balloon1.svg">
      </div>

      <div class="col-md-6 col-para text-justify">
        <?php
        $firstp = true;
        foreach ($doc->query('//p[not(a)]') as $node) {
          echo ($firstp ? "<p>" : "<br><br><p>") . $node->nodeValue . "</p>";
          $firstp = false;
        }?>
        <a href="<?php echo get_permalink( $post )?>">Read More</a>
      </div>

      <div class="background-image">
        <img src="<?php echo get_template_directory_uri();?>/images/flight-watermark.svg">
      </div>

    </div>

  </div>
</section>
