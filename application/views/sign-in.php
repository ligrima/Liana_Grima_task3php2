        <div id="titlelogin">
          <div id="wrap">
              <div id="logo4app"></div>
          </div>
          <p id="titlepage-login">Student Guide</p>
        </div>

        <div id="loginboxes">
            <div class="left-boxes">

                <div id="login">

                    <?=form_open ('users/do_signin'); ?>
                        <div id="firstbox">
                            <div class="input-pair">

                                  <?=form_input ($form['email']); ?>

                            </div>

                            <div class="input-pair">
                                <?=form_input ($form['password']); ?>

                            </div>

                            <div class="input-pair">
                                <div id="buttonform">
                                <?=form_submit (null, 'Log in');?>
                            </div>
                            </div>

                        </div>
                      <?=form_close (); ?>

                </div>



                    <div id="noaccount">
                    <p>Don't have an account?
                       <a href="<?=site_url('register')?>">Sign up</a>
                    </p>

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
