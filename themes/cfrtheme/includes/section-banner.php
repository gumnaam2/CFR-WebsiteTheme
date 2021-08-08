<?php $divs = 4;?>

  <div class="header-slideshow-container">

  <?php for ($i = 0; $i < $divs; $i++) {?>
    <div class="header-slide quick-fade">
      <img src="<?php echo get_template_directory_uri();?>/images/header-slideshow-image<?php echo $i?>.png">

      <div>
        <h3>Lorem Ipsum Dolor Sit Amet</h3>
        <button>Read More</button>
      </div>

    </div>
  <?php }?>

    <a class="prev-slide" onclick="changeHeaderSlideshow(-1)">&#10094;</a>
    <a class="next-slide" onclick="changeHeaderSlideshow(1)">&#10095;</a>

    <div class="slideshow-dots-container">
    <?php for ($i = 0; $i < $divs; $i++) {?>
      <span class="header-slideshow-dot<?php echo ($i == 0) ? ' header-slideshow-dot-active' : '';?>"
        onclick="setHeaderSlideshow(<?php echo $i;?>)"></span>
    <?php }?>
    </div>

    <script>
      var headerSlideIndex = 0;

      setHeaderSlideshow(headerSlideIndex);

      function changeHeaderSlideshow(n) {
        setHeaderSlideshow(headerSlideIndex + n);
      }

      function setHeaderSlideshow(n) {
        var i;
        var headerSlides = document.getElementsByClassName("header-slide");
        var headerSlideDots = document.getElementsByClassName("header-slideshow-dot");

        if (n >= headerSlides.length) {
          headerSlideIndex = 0;
        }
        else if (n < 0) {
          headerSlideIndex = headerSlides.length - 1;
        }
        else {
          headerSlideIndex = n;
        }

        for (i = 0; i < headerSlides.length; i++) {
          headerSlides[i].style.display = "none";
          headerSlideDots[i].className = "header-slideshow-dot";
        }

        headerSlides[headerSlideIndex].style.display = "block";
        headerSlideDots[headerSlideIndex].className += " header-slideshow-dot-active";
      }

    </script>

  </div>