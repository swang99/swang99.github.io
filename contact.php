<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=""> <! web search description[WIP]>
        <link rel="stylesheet" href="../css/resources/normalize.css" type="text/css">
        <link rel="stylesheet" href="../css/resources/grid.css" type="text/css"> 
        <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" type="text/css"> 
        <link rel="stylesheet" href="../css/resources/animate.css" type="text/css"> 
        <link rel="stylesheet" href="../css/resources/style.css" type="text/css"> 
        <link rel="stylesheet" href="../css/resources/queries.css" type="text/css"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" type="text/css"> <!font>
        <title>Stephen Wang</title>
        
        
    </head>
    <body>
        <header class="contact-bg">
            <div class="row">
                <a class="SW-name js--main-SW-name">
                    <h1>Stephen Wang</h1>
                </a>
            </div>  
            <nav>
                <div class="row">
                    <ul class="main-nav js--main-nav">
                        <li><a href="about.html">About</a></li>
                        <li><a href="piano.html">Piano</a></li>
                        <li><a href="photo-out.html">
                        <div class="photo-dropdown">
                        <a href="photo.html">Photography</a>
                        <div class="dropdown-content">
                            <a href="photo-out.html">Outdoors</a>
                            <a href="photo-ind.html">Indoors</a>
                        </div> </div> </a></li>
                        <li><a href="mic.html">DIY Mic</a></li>
                        <li><a href="commserv.html">Music Outreach</a></li>
                         <li><a href="stocks.html">Stock Analysis</a></li>
                        <li><a class="current" href="contact.html">Contact</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="icon ion-ios-menu"></i></a>
                </div>
            </nav>
            <img>
            <div class="form-box" id="form">
                <div class="row">
                    <p>Questions, concerns, thoughts? </p>
                </div>
            </div>
            <div class="row">
                <form method="post" action="mailer-new.php" class="contact-form">
                    <div class="row">
                        
                        <?php
                        <div class="form-messages success">
                            Thank you! Your message has been sent. 
                        </div>
                        <!--div class="form-messages error">
                            Oops! Something went wrong. Please try again!
                        </div> -->
                        ?>
                        
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder=" Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder=" Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop a Line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea class="message" placeholder=" Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label> </label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
        </header> 
        
    
    <footer>
        <div class="row">
        </div>
            <p> 
                Copyright &copy; 2019 by Stephen Wang. All rights reserved.
            </p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/respond.min.js@1.4.2/respond.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/script.js"></script>
    
    </body>
</html>


