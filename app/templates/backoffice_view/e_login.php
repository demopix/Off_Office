<?php $this->layout('layout', ['title' => 'Back Office Login | Oo !']) ?>

<?php $this->start('main_content') ?>
	<div class="row">
                <div class="col-sm-4 col-sm-offset-4 l-form-1-box wow fadeInUp animated">
                  
                      <div class="l-form-1-top">
                        <div class="l-form-1-top-left">
                          <h3>Poursuivre vos achats</h3>
                <p>Veuillez saisir votre identifiant et votre mot de passe:</p>
                        </div>
                        <div class="l-form-1-top-right">
                          <i class="fa fa-lock"></i>
                        </div>
                        </div>
                        <div class="l-form-1-bottom">
                        <form role="form" method="POST" action="verify.php">                            
                            <div class="form-group">
                            <label class="sr-only" for="l-form-1-username">Username</label>
                              <input type="email" name="username" placeholder="mon_email@gmail.com" class="l-form-1-username form-control" id="l-form-1-username">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="l-form-1-password">Password</label>
                              <input type="password" name="pwd" placeholder="Password..." class="l-form-1-password form-control" id="l-form-1-password">
                            </div>
                            <button type="submit" class="btn btn-green">Login!</button>
                            <button type="reset" class="btn btn-danger" id="right-label" value="Reset">Reinstaler</button>

                        </form>
                         <a href="login.php?recovery=pass">mot de passe oublié</a>
                                               </div>
                      
                  </div>
              </div>
	
<?php $this->stop('main_content') ?>