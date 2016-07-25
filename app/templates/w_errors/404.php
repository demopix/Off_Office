<?php $this->layout('layout', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>
<div class="container">
  <div class="row">
    <div class="span12">
      <div class="hero-unit center">
          <h1>Page introuvable <small><font face="Tahoma" color="red">Error 404</font></small></h1>
          <br>
          <p>La page demandée n'a pas pu être trouvé, soit contacter votre webmaster ou essayer à nouveau. Utilisez votre navigateur <b> Retour </ b> pour accéder à la page que vous avez consultée précédemment </ p>
           <P> <b> Ou vous pouvez simplement appuyer sur ce petit bouton soignée:</b></p>
          <a href="<?=$this->url("home");?>" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Take Me Home</a>
        </div>
        <br>
      </div>
  </div>
</div>
<?php $this->stop('main_content'); ?>
