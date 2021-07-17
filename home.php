<?php 
    include('server.php')
?>
<?php 
  if (!isset($_SESSION['username'])) {
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#b9ae0c">
        <title>3WMAD-GuenLeynis</title>
        <link rel="stylesheet" href="src/styles.css">
        <link rel="manifest" href="manifest.webmanifest">
        <link rel="apple-touch-icon" href="image/192.png">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="seconddesign.css">
<script type="text/javascript">
    $(document).ready(function () { 

      $(document).on("scroll", onScroll);
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");
            
            $('a').each(function () {
                $(this).removeClass('active');
            })
            $(this).addClass('active');
          
            var target = this.hash,
                menu = target;
            $target = $(target);
           $('html, body').stop().animate({
                'scrollTop': $target.offset().top+1
            }, 300, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });

    function onScroll(event){
        var scrollPos = $(document).scrollTop();
        
        $('#sidebar a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top -120<= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#sidebar ul li a').removeClass("active");
                currLink.addClass("active");
            }
            else{
                currLink.removeClass("active");
            }
        });
    }
</script>

    </head>
    <body>
        <div id="sidebar">
            <div id="checkdiv"></div>
            <nav class="">
                <a href="logout.php"><img src="./image/out.gif" class="out"></a>
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#Hobby">Hobby</a></li>
                    <li><a href="#MM">Movie&Music</a></li>
                    <li><a href="#Programming">Programming</a></li>
                    <li><a href="#Contacts">Contacts</a></li>
                </ul>
            </nav>
        </div>
        <div id="content">
                <section id="home">
                    <img src="./image/guen.png" class="pic">
                </section>
        </div>

        <section id="Hobby">
            <div class="row">
            <div class="column">
                <p class="aboutme">About Me!</p>
                <p class="text">Hi everyone! My name is Guen Leynis. My hobby is to take pictures because I believe that <i><b>"Photography is the beauty of life captured"</i></b> Also I love shopping online. Hi there Shopee Fam and Lazadanatics! ;)</p>
            </div>
            <div class="column">
                <img src="./image/aboutme.png" class="aboutpic">
            </div>
            </div>
        </section>

        <section id="MM">
            <div class="row">
            <div class="column">
                <img src="./image/moviemusic.png" class="mmpic">
            </div>
            <div class="column">
                <p class="aboutme">Movies and Music</p>
                <p class="text">Miracles in Heaven is one of my favorite movie and I recommend it. It will teach you to belive in god no matter what happen. All the sacrifices and problems that we are facing is part of a God's plan.
                <br><br><i>You are never far away<br>
                        Always reaching out to save<br>
                        My weakness covered by Your strength<br>
                        And I am found forever safe</i><br><br>
                        Listen to this song it will help you to feel better when you have a problem</p>
            </div>
            </div>
        </section>

        <section id="Programming">
            <div class="row">
            <div class="column">
                <img src="./image/prog.png" class="progpic">
            </div>
            <div class="column">
                <p class="aboutme">Favorite Programming Language/s</p>
                <p class="text">When I enter the ICT course designing is not my favorite. But when I learn the HTML it become interesting for me eventhough it is hard when coding but it challenge me to do and study more.</p>
            </div>
            </div>
        </section>

        <section id="Contacts">
                <div id="container">
                    <p class="contact">Let me know what's on your mind</p>
                    <form action="mailto:guenleynis0522@gmail.com" method="post" enctype="text/plain">
                        <div class="name">
                          <label for="name"></label>
                          <input type="text" placeholder="Name" name="name" id="name_input" required>
                        </div>
                        <div class="email">
                          <label for="email"></label>
                          <input type="email" placeholder="Email *" name="email" id="email_input" required>
                        </div>
                        <div class="message">
                          <label for="message"></label>
                          <textarea name="message" placeholder="Leave a message..." id="message_input" cols="30" rows="5" required></textarea>
                        </div>
                        <div class="submit">
                          <input type="submit" value="Submit" id="form_button" />
                        </div>
                      </form>
                </div>
            </section>

            <div class="footer">
              <p>&#169 Copyright 2021. </p>
              <p>All rights reserved. Powered by GuenCl.</p>
                <a href="https://www.facebook.com/guenalyn.leynis/" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/guencl/" class="fa fa-instagram"></a>
            </div>

        <script src="src/index.js"></script>
    </body>
</html>
