<div id="titleregister">
           <div id="wrap">
               <div id="logo4app"></div>
           </div>
           <p id="titlepage-register">Sign Up</p>
           <hr id="register-line">
       </div>

       <main id="web-content">


           <div id="register">
               <?=form_open ('users/do_register'); ?>
               <div id="top">
                   <p>Sign Up for Student Guide</p>
               </div>


               <div class="input-pair">
                   <label for="input-username">First Name:</label>
                   <div id="input-username">
                       <?=form_input ($form['full_name']); ?>
                   </div>
               </div>


               <div class="input-pair">
                   <label for="input-email">Email Address:</label>
                   <div id="input-email">
                       <?=form_input ($form['email']); ?>
                   </div>
               </div>

               <div class="input-pair">
                   <label for="input-password">Password:</label>
                   <div id="input-password">
                       <?=form_input ($form['password']); ?>
                   </div>
               </div>

                   <div class="input-pair">
                       <div id="buttonform">
                           <?=form_submit (null, 'Register');?>
                       </div>

                   </div>

               <?=form_close (); ?>
           </div>

       </main>
