<div id="titlelogin">
          <div id="wrap">
              <div id="logo4app"></div>
          </div>
          <p id="titlepage-login">Student Guide</p>
      </div>
      <div id="loginboxes">
          <div class="left-boxes">

            <?=form_open ('users/do_login'); ?>

                 <?=form_input ($form['email']); ?>
                 <?=form_input ($form['password']); ?>

                 <?=form_submit (null, 'Login');?>

                 <?=form_close (); ?>


          <?php if ($_SERVER['REQUEST_METHOD'] === "POST" and $login === FALSE): ?>
                      <div id="wrong">
                      <span>Wrong username or password!</span>
                      </div>
          <?php endif; ?>


                      <div class="button-login">
                          <button type="submit" id="button-login">
                              Login
                          </button>
                      </div>






                  </div>
              </form>

            </div>
              </div>

              <div id="noaccount">
                  <p>Don't have an account? <a href="<?=site_url('users/register')?>">Register</a> </p>

              </div>
          </div>

          <div id="right-box">
              <div id="other-accounts">
              Want to use other accounts?
              </div>

              <div id="fbcontainer">
                  <div class="button-fblogin">
                      <a href="https://www.facebook.com/">
                          <button type="submit" id="button-fb">
                              <span>Continue with </span>
                              <i class="fa fa-facebook-square fa-lg" aria-hidden="true">
                              </i>
                          </button>
                      </a>
                  </div>
              </div>

              <div id="googlecontainer">
                  <div class="button-googlelogin">
                      <a href="https://plus.google.com/">
                          <button type="submit" id="button-google">
                              <span>Continue with </span>
                              <i class="fa fa-google-plus-square fa-lg" style="color:black" aria-hidden="true">

                              </i>
                          </button>
                      </a>
                  </div>
              </div>
          </div>
      </div>
