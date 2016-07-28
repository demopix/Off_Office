<?php $this->layout('layout', ['title' => '']) ?>

<?php $this->start('main_content') ?>

<style type="text/css">
  /* GLOBAL STYLES
-------------------------------------------------- */

    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */
    
    .carousel {
      height: 500px;
      margin-bottom: 60px;
    }
    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
      z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel .item {
      height: 500px;
      background-color: #777;
    }
    .carousel-inner > .item > img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    /* CONTENU DU MARKETING
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
      margin-bottom: 20px;
      text-align: center;
    }
    ul{
    list-style-type: none;
    font-size: 20px;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .col-lg-4 p {
      margin-right: 10px;
      margin-left: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }
@media only screen and (max-width: 479px) {
   #myCarousel{ display: none !important; }
 body{ 
  background-image: url('../assets/img/respponsive-small.png') ;

  }
}
body {
  color:;
}
</style>

<body>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?= $this->assetUrl('img/assurance.jpg') ?>" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Off Office</h1>
              <p>Plateforme moderne et flexible de distribution et de gestion.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?= $this->assetUrl('img/business4.jpg') ?>" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Le Plus d’OffOffice</h1>
              <p>À chaque situation, sa solution. Une solution modulaire.</p>
            
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?= $this->assetUrl('img/lux1.jpg') ?>" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Basé au Luxembourg</h1>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Plateforme complète <span class="text-muted"> front office et back office</span></h2>
          <p class="lead">Capable de gérer l’ensemble des processus clés du cycle de vie de vos produits d’assurance :</p>
          <ul>  
            <li><i class="fa fa-check" aria-hidden=""> </i> Distribution</li>
            <li><i class="fa fa-check" aria-hidden=""></i> Gestion des contrats</li>
            <li><i class="fa fa-check" aria-hidden=""></i> Gestion des sinistres</li> 
            <li><i class="fa fa-check" aria-hidden=""></i>  Gestion Financière</li>
          </ul>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?= $this->assetUrl('img/firstHead.jpg') ?>">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Le Plus <span class="text-muted">d’Off Office </span></h2>
          <p class="lead">Avec un gain de temps en efficacité, Off-Office permet de soulager la surchage de travail pour employés/assureurs.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="<?= $this->assetUrl('img/secondHead.jpg') ?>" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Notre devise:<span class="text-muted"> placer le client au cour du sytsème informatique.</span></h2>
          <p class="lead">Le plus d’OffOffice:  c’est une application facilement applicable à d’autres secteurs (secteur médical…).</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?= $this->assetUrl('img/business1.jpg')?>" alt="">
        </div>
      </div>
    <hr class="featurette-divider">
      <div class="row featurette">
      <center><h2 class="featurette-heading">Qui sommes <span class="text-muted">nous?</span></h2></center><br><br>
      <center><p class="lead">Nous sommes une jeune équipe de Web Developpers dynamiques, créatifs, et passionnés d’informatique. Nous avons développé une plateforme moderne et flexible de distribution et de gestion destinée aux assurances.</p><br>
      </div><br><br>

    <div class="container marketing">    
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?= $this->assetUrl('img/demetrio.png') ?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Demetrio Vicente</h2>
          <p>Scrum Master</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?= $this->assetUrl('img/Florian.jpg') ?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Florian Bardhi</h2>
          <p>FrontEnd & BackEnd</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?= $this->assetUrl('img/anne.png') ?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Anne-Marie Yim</h2>
          <p>FrontEnd & BackEnd</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?= $this->assetUrl('img/gab.jpg') ?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Gabriela Fonseca</h2>
          <p>FrontEnd & BackEnd</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <!-- /END THE FEATURETTES -->

        <hr class="featurette-divider">


      <!-- FOOTER -->

      <footer>
        <p class="pull-right"><a href="#myCarousel"><i class="fa fa-arrow-up fa-5x"></i></a></p>
        <p>&copy; 2016 Off Office &middot; <a href="#">Données privées</a> &middot; <a href="#">Tèrmes</a></p>
      </footer>

    </div><!-- /.container -->

</body>

<script>
//Fonction Smooth Scroll
$(document).ready(function (){

  $("a[href^='#']").click(function(){
    var monID = $(this).attr('href');
  
    console.log(monID);
    console.log($(monID).offset());

    $('html, body').animate({
    
      scrollTop:$(monID).offset().top
    },2000); 
    return false; 
  });// 
});//JQUERY 
</script>
<?php $this->stop('main_content') ?>
