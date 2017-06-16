<div id="titleregister">
           <div id="wrap">
               <div id="logo4app"></div>
           </div>
           <p id="titlepage-register">Sign Up</p>
           <hr id="register-line">
       </div>
<!-- Below the header code -->
<div id="web-content">
  <div id="register">
          <?=form_open ('users/do_register'); ?>
            <div class="input-pair">
                <label>Name </label>
                <?=form_input ($form['full_name']); ?>
            </div>
            <div class="input-pair">
                <label>Surname </label>
                <?=form_input ($form['full_surname']); ?>
            </div>
            <div class="input-pair">
                <label>Username</label>
                <?=form_input ($form['username']); ?>
            </div>

            <div class="input-pair">
                <label>Password</label>
                <?=form_input ($form['password']); ?>
            </div>
            <div class="input-pair">
                <label>Email (Used for sign-in)</label>
                <?=form_input ($form['email']); ?>
            </div>

      
                <div class="input-pair">
                    <div id="buttonform">
                        <?=form_submit (null, 'Register');?>
                    </div>

                </div>

      </div>
</div>
