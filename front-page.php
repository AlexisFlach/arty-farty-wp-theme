<?php

get_header();

$title = get_field('title');
$description = get_field('description');
$link = get_field('page_link');
$heroImageArray = get_field('featured_image');
$heroImage = $heroImageArray['sizes']['large'];


$about_title = get_field('about_title');
$about_desc = get_field('about_description');
$aboutImageArray = get_field('about_image');
$aboutImage = $aboutImageArray['sizes']['medium'];

?>

  <section class="red-bg" id="hero">
    <div class="container">
      <div class="d-flex flex-row-reverse justify-content-center p-4">
        <div class="row d-flex flex-row-reverse">
          <div class="col-lg-6">
            <img class="img-fluid hero-img" src="<?php echo $heroImage; ?>">
          </div>
          <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-1"><?php echo $title; ?></h1>
           <p class="lead"><?php echo $description; ?></p>
           <button type="button" class="btn btn-outline-light mt-3">
           <a style="text-decoration: none; color: white"href="<?php echo $link['url']; ?>">
            <?php echo $link['title']; ?>
            </a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="generic" id="about">
    <div class="container">
      <div class="row d-flex justify-content-center">
      <div class="row d-flex flex-row-reverse">
        <div class="col-sm-12 col-md-6">
          <div class="d-flex h-50 flex-column justify-content-center mt-5">
          <h2 class=" display-5 mb-2 "><?php echo $about_title; ?></h2>
            <p>
                <?php echo $about_desc; ?>
            </p>
          </div>
        </div>

        <div class="d-flex col-sm-12 col-md-6 justify-content-center">
          <img class="img-fluid hero-img" src="<?php echo $aboutImage; ?>">
        </div>
</div>
  
    </div>
  </section>


<?php
get_footer();