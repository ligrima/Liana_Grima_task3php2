<main id="web-content-contact">
    <p id="titlepage-register">Contact</p>
    <hr id="register-line">
    <div id="contact-page">
        <div id="right-side">
            <div id="top-bar">
                <h1>Messages</h1>
            </div>

            <div id="sendto">
                <p>Send to
                <?=form_dropdown('input-recipient', $userlist); ?></p>
            </div>
            <div id="contact-text-box">
                <?=form_open('contact/do_add_messages'); ?>
                <?=form_input ($form['content']); ?>
                 <!-- <textarea  rows="10" cols="50" name="content"> </textarea> -->
                 <br>
                 <div id="extra">
                    <input type="file" name="files[]" multiple="">
                </div>
                <div id="sendmess">
                    <?=form_submit (null, 'Send');?>
                </div>

                <?=form_close (); ?>
            </div>
            <!-- <div id="inboxmessage">
                <?php foreach($messages->result_array() as $post) : ?>
                <h3><?php echo $post['msg_content'];?></h3>
                <br/><br><br><br>
                <?php endforeach; ?>
                <div id="contact-right">
                </di-->
        </div>
    </div>



</main>
