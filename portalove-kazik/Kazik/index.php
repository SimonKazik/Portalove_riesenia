<?php

include_once "db-connect.php";
$db = $GLOBALS['db'];

$menu = $db->getMenu();
$food_menu = $db->getFoodMenu();
$features = $db->getFeatures();
$chefs = $db->getChefs();
$gallery = $db->getGallery();
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Steak House</title>

  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

  	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="css/nivo-lightbox.css">
  	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

  	<link rel="stylesheet" href="css/hover-min.css">
  	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">

  	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Home section -->
<section id="home" class="parallax-section">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Steak House</h1>
              <p class="wow fadeInUp" data-wow-delay="1.0s">HIGH QUALITY STEAKS AND SPECIALITIES SINCE 1989</p>
              <a href="#feature" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Domov</a>
          </div>

      </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Steak House</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">

          <?php
          foreach ($menu as $item){
              echo '<li><a href="'.$item['odkaz'].'" class="smoothScroll">'.$item['polozka'].'</a></li>';
          }
          ?>
      </ul>
    </div>

  </div>
</div>


<!-- Feature section -->
<section id="feature" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
          <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
            <h2>Vitajte v Steak House</h2>
              <h4>Prečo nás navštíviť?</h4>
          </div>
      </div>

      <div class="clearfix"></div>

        <?php
        foreach ($features as $feature){
            echo '
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-thumb">
                  <div class="feature-icon">
                     <span><i class="fa '.$feature['class'].'"></i></span>
                  </div>
                  <h3>'.$feature['header'].'</h3>
                  <p>'.$feature['text'].'</p>
                </div>
              </div>
            ';
        }
        ?>
    </div>
  </div>
</section>


<!-- About section -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
          <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>O Nás</h2>
            <h4>Od Roku 1989</h4>
          </div>
      </div>

      <div class="clearfix"></div>
      
      <div class="wow fadeInUp col-md-3 col-sm-5" data-wow-delay="0.3s">
        <img src="images/about-img.jpg" class="img-responsive" alt="About">
        <h3>V unikátnom prostredí steakhousu si môžete pochutnať na steakoch a iných špecialitách.</h3>
      </div>

      <div class="wow fadeInUp col-md-5 col-sm-7" data-wow-delay="0.5s">

        <!-- flexslider -->
        <div class="flexslider">
          <ul class="slides">

            <li>
              <img src="images/slide-img1.jpg" alt="Flexslider">
            </li>
            <li>
              <img src="images/slide-img2.jpg" alt="Flexslider">
            </li>
            <li>
              <img src="images/slide-img3.jpg" alt="Flexslider">
            </li>

          </ul>
        </div>

         <p>Snažíme sa zaraďovať medzi najlepšie reštaurácie, preto dbáme na výber kvalitného mäsa a surovín, s ktorými pracujeme, ale aj na ich úprave a servirovaní.</p>
      </div>

       <div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="0.9s">
        	<h2>Náš Príbeh</h2>
         	<p>Steak House sme otvorili v roku 1989, čiže má už 30 ročnú tradíciu.
                Počas tohto obdobia sme sa vždy snažili inovovať, napredovať a dosahovať nové ciele.</p>
         	
            <ul>
                <li>FREE WiFi</li>
                <li>Parkovanie</li>
                <li>Rodinné oslavy</li>
                <li>Firemé akcie...</li>
         	</ul>
      </div>

		</div>
	</div>
</section>


<!-- Video section -->
<section id="video" class="parallax-section">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <a class="popup-youtube" href="https://www.youtube.com/watch?v=kbpIYAnt-7k"><i class="fa fa-play"></i></a>
              <h2 class="wow fadeInUp" data-wow-delay="0.5s">Pozrite si naše video</h2>
          </div>

      </div>
    </div>
</section>

<!-- Menu section -->
<section id="menu" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Ponuka Jedál</h2>
            <h4>naše špeciality</h4>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
          <?php
          $i = 1;
          foreach ($food_menu as $item){
              echo '
                <div class="media wow fadeInUp" data-wow-delay="'.$i.'">
                  <div class="media-object pull-left">
                    <img src="'.$item['image'].'" class="img-responsive" alt="Food Menu">
                    <span class="menu-price">$'.$item['price'].'</span>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading">'.$item['name'].'</h3>
                    <p>'.$item['text'].'</p>
                  </div>
                </div>
          ';
              $i = $i + 1;
          }

          ?>
      </div>
    </div>
  </div>
</section>

<!-- Team section -->
<section id="team" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Náš Tím</h2>
            <h4>we are food specialists</h4>
        </div>
      </div>

      <div class="clearfix"></div>

        <?php
        foreach ($chefs as $chef){
            echo'
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-thumb">
            <img src="'.$chef['image'].'" class="img-responsive" alt="Team">  
                <div class="team-des">
                  <h3>'.$chef['name'].'</h3>
                  <h4>'.$chef['position'].'</h4>
                    <ul class="social-icon">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                      <li><a href="#" class="fa fa-dribbble"></a></li>
                    </ul>
                </div>
          </div>
      </div>
            ';
        }
        ?>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.1s">
          <div class="join-team">
            <i class="fa fa-plus"></i>
            <p>Hľadáme nových členov do nášho tímu, neváhajte a napíšte nám!</p>
            <a href="#contact" class="btn btn-default hvr-bounce-to-bottom">PRIDAJTE SA</a>
          </div>
      </div>

      <div class="clearfix"></div>

    </div>
  </div>
</section>

<!-- Gallery section -->
<section id="gallery" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">

       <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Galéria Jedál</h2>
            <h4>30 ROČNÁ TRADÍCIA</h4>
        </div>
      </div>
        
          <!-- iso section -->
          <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

            		<ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">Všetko</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".breakfast">Steak</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".pizza">Pizza</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".lunch">Burger</a></li>
                    </ul>

                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                      <div class="iso-box-wrapper col4-iso-box">

                          <?php
                          foreach ($gallery as $item){
                              echo '
                              <div class="iso-box '.$item['filter'].' col-md-4 col-sm-6">
                                  <div class="gallery-thumb">
                                    <a href="images/gallery-img1.jpg" data-lightbox-gallery="food-gallery">
                                      <img src="'.$item['image'].'" class="fluid-img" alt="Gallery">
                                        <div class="gallery-overlay">
                                          <div class="gallery-item">
                                            <i class="fa fa-search"></i>
                                          </div>
                                        </div>
                                    </a>
                                  </div>
                                  <h3>'.$item['name'].'</h3>
                                </div>
                              ';
                          }
                          ?>
                       </div>
                    </div>
          </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact section -->
<section id="contact" class="parallax-section">
  <div class="overlay"></div>
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
            <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                <h2>Kontakt</h2>
                <h4>Napíšte Nám!</h4>
            </div>
				<div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
					<form id="contact-form" method="post" action="#">
						<input name="name" type="text" class="form-control" placeholder="Meno a Priezvisko *" required>
						<input name="email" type="email" class="form-control" placeholder="Email *" required>
						<textarea name="message" class="form-control" placeholder="Správa" rows="5" required></textarea>
						<input type="submit" class="form-control submit" value="ODOSLAŤ SPRÁVU">
					</form>
				</div>
			</div>
			
		</div>
	</div>
</section>

<!-- Footer section -->
<footer>
	<div class="container">
		<div class="row">

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                <h3>Rezervácie</h3>
                  <p>Tel: +421 948 624 420</p>
                  <p>reservation@steakhouse.com</p>
              </div>
        
              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.6s">
                <h3>Adresa</h3>
                <p>Liptovská 45, 82109 Bratislava, Slovesko</p>
                <p>Tel: +421 945 426 042</p>
                <p>info@steakhouse.com</p>
              </div> 
        
              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
                <h3>Otváracie hodiny</h3>
                <strong>Pondelok - Piatok</strong>
                <p>10:00 - 22:00</p>
                <strong>Sobota - Nedeľa</strong>
                <p>11:00 - 20:00</p>
              </div> 

		</div>
	</div>
</footer>

<!-- Copyright section -->
<section id="copyright">
  <div class="container">
    <div class="row">

      <div class="col-md-8 col-sm-8 col-xs-8">
        <p>Copyright © 2019 Steak House Company 
        
        - Design: <a rel="nofollow" class="designed-by" href="https://www.tooplate.com">Tooplate</a></p>
      </div>  

      <div class="col-md-4 col-sm-4 text-right">
        <a href="#top" class="fa fa-angle-up smoothScroll gototop"></a>
      </div>

    </div>
  </div>
</section>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>