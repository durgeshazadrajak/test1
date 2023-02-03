<?php include('head.php')?>
<?php $currentPage = 'about';?>
<?php include('header.php')?>


  <main>
    <div class="page-banner" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)), url(assets/img/about/banner.webp)">
      <div class="container">
        <h2 class="page-title">OUR STORY</h2>  
      </div>
    </div>
      <div class="about2">
      <div class="container-fluid">
        <div class="row justify-content-center align-items-center">          
          <div class="col-lg-7 col-md-7">
            <div class="about-box">
              <h4 class="sub-heading">WHO WE ARE</h4>
              <p class="mb-5">We are a group of experienced design consultants who aim to connect homeowners with their desired living spaces; bringing creative solutions to their design problems. Our mission is to put ourselves in owners’ shoes so that we can render help to accomplish the hefty task of renovation. We hope to JOURNEY with them to build their DREAM HOME with ease and confidence.</p>
              <h4 class="sub-heading">WHAT WE DO</h4>
              <p>At Interior Diary, we strive to fulfil client’s requirements and beyond with quality services and sustainable materials. We aim to bridge the knowledge gap and help homeowners/business owners navigate their renovation, incorporating their lifestyles/work into their internal home/commercial setting. Using our professionalism and creativity, we are able to create spaces with organised functionality and design aesthetics. We believe that with a little extra thought, interior design can improve one’s life and enjoyment of spaces. To serve our clients better, we have many regular collaborative tie-ups with reputable supply chain to give even more value and to maintain good industry standards. Coordination and organisation are also big parts of our jobs which requires team work and communication with clients and supplier to take an initial idea into fruition and in a timely fashion. For us, learning and discovering new innovation/technology/material never really stops. We are constantly upgrading ourselves because we know trends evolve and we need to keep up with the latest. Ever since Interior Diary started business, we have seen many satisfied customers who have given us many referrals to their friends and family. We are equally grateful and thankful for their trust and will continue to put in our best efforts.</p>
            </div>            
          </div>
          <div class="col-lg-5 col-md-5 p-0">
            <img src="assets/img/about/who-we-are.webp" alt="about1" class="w-100">
          </div>
        </div>
        <div class="row justify-content-center align-items-center mt-5">
          <div class="col-lg-6 col-md-6 p-0">
            <img src="assets/img/about/mission.webp" alt="mission" class="w-100">
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="about-box">
              <h4 class="sub-heading ">MISSION</h4>
              <p><strong>We exist to provide Personalised interior design services and individualised customer services, ensuring our clients get more than what they envision, bringing dream to reality.</strong></p>
              <h4 class="sub-heading">VISION</h4>
              <p><strong>We aspire to convey the sense of passion we feel about our craft and hope to change the bad reputation of the interior designers in Singapore by creating works that speaks integrity.</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <div class="about3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h3 class="sub-heading text-center mb-4">AWARDS</h3>
            <img src="assets/img/about/awards.webp" alt="awards" class="w-100">
          </div>
        </div>
      </div>
    </div>
    <div class="about4"> 
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h3 class="sub-heading text-center mb-4">PARTNERS</h3>
            <img src="assets/img/about/partners.webp" alt="awards" class="w-100">
          </div>
        </div>
      </div>
    </div>
    <div class="about5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h3 class="sub-heading mb-4">PARTNERS</h3>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">            
            <div class="owl-carousel owl-theme feature-slider">
              <div class="item">
                <img src="assets/img/about/banner.webp" alt="banner2">
              </div>
              <div class="item">
                <img src="assets/img/about/banner.webp" alt="banner2">
              </div>
              <div class="item">
                <img src="assets/img/about/banner.webp" alt="banner2">
              </div>
              <div class="item">
                <img src="assets/img/about/banner.webp" alt="banner2">
              </div>
              <div class="item">
                <img src="assets/img/about/banner.webp" alt="banner2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include('footer.php')?>


<script>
  $(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>