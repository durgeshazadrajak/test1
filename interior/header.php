<body>

	<header>
		<nav class="navbar navbar-expand-sm w-100 position-absolute" style="z-index:1">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="index.php">
		    	<img src="assets/img/home/logo.webp" alt="logo">
		    </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
		      <div></div>
		      <div></div>
		      <div></div>
		    </button>
		    <div class="collapse navbar-collapse" id="collapsibleNavbar">
		      <ul class="navbar-nav ml-auto">
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='home'){echo 'active';}?>" href="index.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='about'){echo 'active';}?>" href="about.php">Our Story </a>
		        </li>
		        <li class="nav-item has-submenu">
		          <a class="nav-link <?php if($currentPage =='ibathroom'){echo 'active';}?>" href="ibathroom.php">Gallery </a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='reviews'){echo 'active';}?>" href="reviews.php">Reviews</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='promotions'){echo 'active';}?>" href="promotions.php">Promotions</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='faq'){echo 'active';}?>" href="faq.php">Faq + Tips</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='blog'){echo 'active';}?>" href="blog.php">Blog</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='contact'){echo 'active';}?>" href="contact.php">Contact Us</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='careers'){echo 'active';}?>" href="careers.php">Careers</a>
		        </li>		        
		      </ul>
		      <ul class="navbar-nav ms-auto">
		      	<li class="nav-item">
		      		<a class="btn btn-outline-light <?php if($currentPage =='contact'){echo 'active';}?>" href="contact.php">Get a Qoute</a>
		      	</li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</header>