<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

        <link rel="shortcut icon" href="<?=base_url('images/logo.png')?>">

        <title>StudentCompanion</title>

        <link type="text/css" rel="stylesheet" href="<?=base_url('css/font-awesome.min.css')?>">

        <link type="text/css" rel="stylesheet" href="<?=base_url('css/style.css')?>">

        <!-- roboto-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" >

        <!-- opensans -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" >

        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    </head>
     <body>
         <header id="menu">
            <a href="news">
                <img src="images/logo.png" id="logopagesimg" alt="logo">
            </a>

            <nav>
                <ul>
                    <li>
                        <a href="news" <?php if ($this->router->fetch_class () == 'Home') echo ' class="active"' ?>>News</a>
                        <!--<a class="active" href="news">News</a>-->
                    </li>
                    <li>
                        <a href="timetable" <?php if ($this->router->fetch_class () == 'Timetable') echo ' class="active"' ?>>Timetable</a>
                        <!--<a href="timetable">Timetable</a>-->
                    </li>
                    <li>
                        <a href="Newcalendar" <?php if ($this->router->fetch_class () == 'Newcalendar') echo ' class="active"' ?>>Calendar</a>
                        <!--<a href="calendar">Calendar</a>-->
                    </li>
                    <li>
                        <a href="notes" <?php if ($this->router->fetch_class () == 'Notes') echo ' class="active"' ?>>Notes</a>
                        <!--<a href="notes" >Notes</a>-->
                    </li>
                    <li>
                        <a href="contactform" <?php if ($this->router->fetch_class () == 'Contactform') echo ' class="active"' ?>>Contactform</a>
                        <!--<a href="contactform">Contact Form</a>-->
                    </li>
                    <li>
                        <a href="profile" <?php if ($this->router->fetch_class () == 'Profile') echo ' class="active"' ?>>Profile</a>
                        <!--<a href="profile">Profile</a>-->
                    </li>
                </ul>
            </nav>


            <div id="profpic-logout">
                <a href="profile">
                    <img src="images/profpic.png" id="profpicimg" alt="profpic"></a>
                <a href="home"> <i class="fa fa-sign-out" id="signout"></i></a>
            </div>

         </header>
