<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>
<<<<<<< HEAD
	


<h3>Admin and Employed functionalities</h3>
<br>
   <a class="btn btn-success" href="<?=$this->url("admin_login");?>"> Login Back Office</a>
   <br> 
   <p>show this button only when employed is logged else redirect to backoffice/login</p>

	<a class="btn btn-info" href="<?=$this->url("backoffice_main",['e'=> 'Main']);?>">Back Office</a> -> url = Off_Office/backoffice


	
=======

<style type="text/css">
@media (min-width: 768px) {
	.container {
    width: 100%;
}
.container-m {
    width: 100%;
    margin-left: -15px;
    margin-right: -19px;
    z-index: -1;
    overflow: hidden;
    position: fixed;
    margin-top: -74px;
}
.site-wrapper-inner {
    display: table-cell;
    vertical-align: top;
    position: absolute;
}
.inner.centered {
    width: 50%;
    margin: 15% 26%;
    text-align: center;
    z-index: 1000;
    position: fixed;
    color: white;
    align-items: center;
}
a.btn.btn-lg.btn-secondary {
    background-color: rgba(255, 255, 255, 0.7);
}
p.lead {
    text-shadow: 1px 1px rgba(47, 45, 45, 0.79);
}

}
@media only screen and (max-width: 479px) {
   #background{ display: none !important; }
 body{ background-image: url('./asset/img/ass.jpg') ; }
}
body {
	color:white;
}
</style>


   
      


<!-- Latest compiled and minified CSS -->

<div class="container-m">
<div class="inner centered">
    <h1 class="cover-heading">WM Assurance</h1>
    <p class="lead"><strong> Powered by Off Office</strong>
    <p>scheduled managing dispatching.</p>
    <p class="">
      <a href="#" class="btn btn-lg btn-secondary">En savoir plus</a>
    </p>
</div>
<div class="embed-responsive embed-responsive-16by9">
    <div id="background">
       <iframe id='player' width="2500" height="1406" src="https://www.youtube.com/embed/eQq3BN5F5Wo?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;playlist=Rk6_hdRtJOE&amp;enablejsapi=1&version=3" frameborder="0"></iframe>
    </div>
</div>          
</div>


     
>>>>>>> check-in-Demetrio



	<?php $this->stop('main_content') ?>

