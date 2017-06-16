<main id="web-content-contact">
         <p id="titlepage-register">Contact</p>
         <hr id="register-line">

         <div id="contact-page">
     <div>
         <div>
         </div>
         <div id="sendto">
             <p>Send to</p>
                 <?=form_dropdown('input-recipient', $userlist); ?>
         </div>
         <div id="contact-text-box">

             <?=form_open('contact/do_add_messages'); ?>
             <?=form_input ($form['content']); ?>
                     <!-- <textarea  rows="10" cols="50" name="content"> </textarea> -->
                     <br>
             <?=form_submit (null, 'Send');?>
             <?=form_close (); ?>

         </div>
     </div>
     <div id="right-side">
         <div id="top-bar">
         </div>
     <h1>Messages</h1>
     <div id="message">

         <?php foreach($messages->result_array() as $post) : ?>
           <h3><?php echo $post['msg_content'];?></h3>

         <br/>
           <br><br><br>
         <?php endforeach; ?>



                 <div id="contact-right">


                         <div id="extra">
                            <input type="file" name="files[]" multiple="">


                            <div id="sendmsg">
                                <?=form_submit (null, 'Send');?>
                            </div>
                            <div id="discardmsg">
                                <?=form_submit (null, 'Discard');?>
                            </div>

                            <?=form_close (); ?>
                        </div>


                </div>
     </div>

     </div>
     </div>



</main>
