

   <main id="web-content">
       <div id="top">
           <p id="titlepage-profile">About Me</p>
           <hr id="register-profile">


       </div>

<div id="bottom">


                            <div id="user-pic">
                                <img src="<?=base_url('images/profpic.png')?>" id="profpic-img" alt="profilepicture">
                            </div>

                            <div id="user-info">

                                <!-- Request the data of the current user -->

                                 <?=form_open ('profile/update_users'); ?>
                                 <div id="titlepage-profile">Name</div>
                                 <br/>
                                       <hr id="profile-line">
                                <div id="titlepage-profile2"><h4><?=$userdata['user_name']; ?></h4></div>

                                <div id="titlepage-profile">Surname</div>
                                <br/>
                                      <hr id="profile-line">
                               <div id="titlepage-profile2"><h4><?=$userdata['user_surname']; ?></h4></div>


                               <div id="titlepage-profile">Email</div>
                               <br/>
                                     <hr id="profile-line">
                              <div id="titlepage-profile2"><h4><?=$userdata['user_email']; ?></h4></div>

<br /><br />

<h4><img src="<?=base_url('images/edit_prof_info.png')?>" width = "20px" height = "20px"> You can change your details below!</h4>
<?=form_input ($form['full_name']);?>
<?=form_input ($form['surname']);?>
<?=form_input ($form['email']);?>

<?=form_submit (null, "Change");?>
                                    <?=form_close (); ?>

                    <!--        <p id="demo" onclick="myFunction()">    <img src="<?=base_url('images/edit_prof_info.png')?>" width = "20px" height = "20px"></p>-->

                            </div>
                            </div>
    </main>
