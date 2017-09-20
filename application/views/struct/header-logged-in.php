<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

    <title>Student Companion</title>
    <link rel="icon" href="<?=base_url('images/logo.png')?>">
    <link type="text/css" rel="stylesheet" href="<?=base_url('css/style.css')?>">
    <link type="text/css" rel="stylesheet" href="css/style.css"><script src="https://use.fontawesome.com/ea811db0f0.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

</head>
    <body>

        <header id="menu">
           <a href="<?=site_url('newsfeed')?>">
               <img src="<?=base_url('images/logo.png')?>" id="logopagesimg" alt="logo">
           </a>
          <nav>
              <ul>

                  <li>
                     <a href="<?=site_url('Newsfeed')?>" <?php if ($this->router->fetch_class () == 'Newsfeed') echo ' class="active"'?>>Newsfeed</a>
                  </li>
                  <li>
                      <a href="<?=site_url('Home')?>" <?php if ($this->router->fetch_class () == 'Home') echo ' class="active"'?>>Timetable</a>
                  </li>
                  <li>
                        <a href="<?=site_url('Newcalendar')?>" <?php if ($this->router->fetch_class () == 'Newcalendar') echo ' class="active"' ?>>Calendar</a>
                  </li>
                  <li>
                       <a href="<?=site_url('Notes')?>" <?php if ($this->router->fetch_class () == 'Notes') echo ' class="active"' ?>>Notes</a>
                  </li>

                  <li>
                      <a href="<?=site_url('Contact')?>" <?php if ($this->router->fetch_class () == 'Contact') echo ' class="active"' ?>>Contact</a>
                  </li>

              </ul>
          </nav>


        <!-- PROFILE IMAGE AND NAME -->



        <div id="profpic-logout">
            <h3><?=$userdata['user_name']; ?></h3>
                    <a href="profile">
                        <img src="<?=base_url('images/profpic.png')?>" id="profpicimg" alt="profpic">
                    </a>


                    <a href="<?=site_url('logout')?>">
                        <i class="fa fa-sign-out" id="signout"></i>
                    </a>
                </div>

             </header>
