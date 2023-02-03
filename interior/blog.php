<?php include('head.php')?>
<?php $currentPage = 'blog';?>
<?php include('header.php')?>

<main>
	<div class="page-banner" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)), url(assets/img/blog/banner.webp)">
      <div class="container">
        <h2 class="page-title">BLOG</h2>  
      </div>
    </div>

    <div class="blog">
      <div class="container-fluid">
          <div class="row mb-5">              
              <div class="col-lg-5 col-md-5 p-0">
                  <div class="blog-left p-0">
                      <h2 class="number text-start">20</h2>
                      <h3 class="heading mb-5">JULY</h3>                      
                  </div>
              </div>
              <div class="col-lg-7 col-md-7 p-0">
                <div class="blog-section">
                    <img src="assets/img/blog/blog1.webp" class="w-100" alt="home2">
                    <p>The cons of building your dream home</p>
                    <a href="blog-details.php" class="primary-link">READ MORE >></a>
                  </div>
              </div>
          </div>
          <div class="row mb-5">
              <div class="col-lg-7 col-md-7 p-0">
                <div class="blog-section left-section">
                    <img src="assets/img/blog/blog1.webp" class="w-100" alt="home2">
                    <div class="">
                      <p>The cons of building your dream home</p>
                      <a href="blog-details.php" class="primary-link">READ MORE >></a>
                    </div>
                  </div>
              </div>              
              <div class="col-lg-5 col-md-5 p-0">
                  <div class="blog-right p-0">
                      <h2 class="number text-end">15</h2>
                      <h3 class="heading mb-5 text-end">JULY</h3>                      
                  </div>
              </div>              
          </div>
          <div class="row mb-5">
            <div class="col-lg-12 text-end">
              <a href="#" class="blog-read-more">more posts <img src="assets/img/home/double-arrow.png"></a>
            </div>
          </div>
      </div>
  </div>
</main>

<?php include('footer.php')?>