<script>
    function myFunction()
    {
        document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
    }
</script>

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



                                    <?=form_close (); ?>

                            <p id="demo" onclick="myFunction()">    <img src="<?=base_url('images/Files-Edit-File-icon.png')?>" width = "20px" height = "20px"></p>

                            </div>
                            </div>
    </main>
