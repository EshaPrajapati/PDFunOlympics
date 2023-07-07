<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="newspage.css">
        <style>
            /*
font-family: 'Montserrat', sans-serif;
font-family: 'Raleway', sans-serif;
*/

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

:root{
    --heading: 'Montserrat', sans-serif;
}

.back_btn{
  display:flex;
  justify-content:flex-end;
  margin-right:24px;
}

body{
    font-family: 'Raleway', sans-serif;
    background: #fff;
}

/* global styling */

img{
    width: 100%;
}
ul{
    list-style: none;
}

a{
    text-decoration: none;
    color: #000;
}

hr{
    width: 95vw;
    margin: 0 auto;
}

/* header */

.top-head{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0 auto;
    background: #A4907C;
    color: #fff;
    padding: 20px 30px;
}

.top-head .fas{
    font-size: 2rem;
    cursor: pointer;
}

/******* js related styling *****/

.times-btn{
    display: none;
}

.nav-bar{
    background:  #A4907C;
    height: 0;
    overflow: hidden;
}

.show-nav{
    height: auto;
}

/********************/

.nav-bar ul li{
    text-align: center;
    display: block;
    font-weight: bolder;
    padding: 15px 0;
    transition: all 1s ease-in-out;
}

.nav-bar ul li:hover{
    background: #0e0e0e;
}

.nav-bar ul li a{
    color: white;
    text-transform: uppercase;
}

.nav-bar ul li a:hover{
    text-decoration: underline;
}

/* social -icons */

.social-icons{
    display: none;
}

/* banner */

.banner{
    min-height: auto;
    display: grid;
    grid-template-columns: 1fr;
    align-items: center;
    padding: 30px 0;
    margin-top: 8px;
}

.banner-main-content{
    padding: 0 2rem;
}

.banner-main-content h2{
    font-size: 2rem;
    font-family: var(--heading);
}

.banner-main-content h3{
    padding: 1rem 0;
}

.banner-main-content button{
    border: none;
    background: #252525;
    padding: 14px 18px;
    font-size: 1.2rem;
    font-family: 'Montserrat', sans-serif;
    transition: background 1s ease;
}

.banner-main-content button a{
    color: #A4907C;
    transition: color 1s ease;
}

.banner-main-content button:hover{
    background: #A4907C;
}

.banner-main-content button:hover a{
    color: #0d0a0b;
}


.current-news-head{
    background: #A4907C;
    padding: 20px;
    font-size: 12px;
    margin: 20px 0;
}

.current-news-head h3{
    padding: 6px;
    cursor: pointer;
    position: relative;
}

.current-news-head h3:hover::before{
    content: ">> ";
    position: absolute;
    left: -12px;
}

.current-news-head span{
    display: block;
    font-family: var(--heading);
    font-weight: 300;
    text-transform: uppercase;
}

.hot-topic{
    overflow: hidden;
    position: relative;
    width: 600px;
    padding: 12px;
    height: 600px;
}

.hot-topic img{
    display: block;
    width: 600px;
    padding: 12px;
    height: 600px;
}

.hot-topic-content{
    position: absolute;
    bottom: 0;
    left: 20px;
    right: 20px;
    padding: 10px 20px;
    line-height: 1.3;
    color: white;
}

.hot-topic h2{
    padding: 10px 0;
    font-size: 18px;
    background-color: white;
    color:black;
    font-weight: bolder;
    /* text-shadow: 0 0 2px #000; */
}

.hot-topic h3{
    padding: 10px 0;
    font-size: 16px;
    text-shadow: 0 0 2px #000;
}

.hot-topic p{
    padding: 10px 0;
    font-size: 15px;
    text-shadow: 0 0 2px #000;
    padding: 12px 10px;
}

.hot-topic-content a{
    display: block;
    background: #A4907C;
    color:black;
    border: none;
    font-weight: bolder;
    width: 95px;
    border-radius: 2px;
    text-align: center;
    padding: 7px 10px;
    font-size: 14px;
    margin: 10px 0 10px 10px;
}

.hot-topic-content a:hover{
    text-decoration: underline;
}

/** main ***/

main a{
    padding: 15px 0;
    display: block;
    transition: all 0.5s;
}

main span{
    transition: padding-left 0.5s;
}

main a:hover span{
    padding-left: 5px;
}

main a:hover{
    color: #7ac64d;
}

/* main container left */

.main-container-left{
    padding: 30px 10px;
}

.main-container-left > h2{
    padding: 15px 0 15px 30px;
}

.main-container-left h3{
    padding: 10px 0;
    font-size: 18px;
    font-family: var(--heading);
}

.main-container-left p{
    font-size: 15px;
    font-weight: 300;
}

.main-container-left article{
    padding: 10px;
}

.container-top-left{
    padding: 15px 30px;
}

.container-bottom-left{
    background: #f3f3f3;
    margin: 15px 30px;
}

/*** main container right */

.main-container-right{
    padding: 30px 10px;
}

.main-container-right > h2{
    padding: 15px 0 15px 30px;
}

.main-container-right article{
    display: grid;
    grid-template-columns: 1fr 3fr 1fr;
    padding: 15px 0;
    border-bottom: 1px solid #7ac64d;
}

.main-container-right article:last-child{
    border-bottom: none;
}

.main-container-right img{
    width: 100px;
    height: 100px;
    align-self: center;
}

.main-container-right h4{
    text-align: center;
    text-transform: uppercase;
    font-weight: 300;
    font-size: 12px;
    align-self: center;
}

.main-container-right article h2{
    font-size: 18px;
    padding: 10px 0;
    font-family: var(--heading);
}

.main-container-right article p{
    font-size: 15px;
    font-weight: 300;
}

.main-container-right article div{
    margin-right: 10px;
}


/****** footer *****/

footer{
    background: #A4907C;
    color: #f3f3f3;
    padding: 30px;
}

footer h2{
    padding: 10px 0;
}

footer p{
    padding: 10px 0;
    line-height: 1.3;
    font-weight:bolder;
}

@media(max-width: 460px){
    .hot-topic-content h2{
        font-size: 16px;
    }

    .main-container-right article{
        display: block;
    }

    .main-container-right article img{
        display: none;
    }


}

@media(max-width: 500px){
    .main-container-right article{
        grid-template-columns: 1fr 3fr;
        grid-template-rows: 1fr 1fr;
    }

    .main-container-right article h4{
        grid-row: 1/2;
        grid-column: 1/2;
        align-self: flex-start;
    }

    .main-container-right article img{
        grid-row: 2/3;
        grid-column: 1/2;
    }

    .main-container-right article div{
        grid-row: 1/3;
        grid-column: 2/3;
    }
}


@media(min-width: 768px){
    .banner-sub-content{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .container-bottom-left{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    
}


@media(min-width: 800px){
    /* nav */
    .ham-btn, .times-btn{
        display: none!important;
    }

    .navigation-container{
        display: flex;
        background: #A4907C;
        align-items: center;
        flex-wrap: wrap;
    }

    .top-head{
        flex: 0 0 15%;
    }

    .nav-bar{
        /* flex: 1 0 auto; */
        height: 100%;
        background: transparent;
    }

    .nav-bar nav ul{
        display: flex;
        justify-content: center;
    }
    .nav-bar nav ul li{
        padding-right: 30px;
    }

    .nav-bar nav ul li:hover{
        background: none;
    }

    /* social icons */
    .social-icons{
        /* flex: 10%; */
        display: block;
        margin: 0 auto;
    }

    .social-icons .fab{
        color: #fff;
        font-size: 2rem;
    }
    .social-icons ul{
        display: flex;
        justify-content: space-between;
        padding: 0 20px;
    }
    .social-icons ul li{
        padding: 20px;
    }

    .footer-container{
        display: flex;
        background-color: #A4907C;
    }


    .footer-left{
        flex: 1;
    }
}

@media(min-width: 992px){
    main{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}

@media(min-width: 1080px){
    .banner{
        grid-template-columns: 1fr 2fr;
    }
}
        </style>
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- header -->
        <header>

            <div class = "navigation-container">
            <p class="back_btn";>
            <a href="./home" style=" color: white; font-weight: bolder">
            <i class="fa fa-arrow-left"></i>
            BACK
</a>
</p>
                <div class = "top-head">
                    <div class = "web-name">
                        <!-- <h1>FUN OLYMPIC</h1> -->
                    </div>

                    <div class = "ham-btn">
                        <span>
                            <i class = "fas fa-bars"></i>
                        </span>
                    </div>

                    <div class = "times-btn">
                        <span>
                            <i class = "fas fa-times"></i>
                        </span>
                    </div>
                </div>

                <!-- nav bar -->

                <div class = "nav-bar" id = "nav-bar">
                    <nav>
                        <ul>
                            <li><a href = "/pd_esha/home">Home</a></li>
                            <li><a href = "/pd_esha/aboutus.php">About Us</a></li>
                            <li><a href = "/pd_esha/contact.php">Contact Us</a></li>
                            <li><a href = "/pd_esha/gallery.php">Gallery</a></li>
                            <li><a href = "/pd_esha/newspage.php">News</a></li>
                        </ul>
                    </nav>
                </div>
        </header>

        <section class = "banner">
            <div class = "banner-main-content">
                <h2>YOUR GATEWAY TO SPORTING MOMENTS</h2>
                <h3>Capturing the essense of Sports</h3>

                <button>
                    <a href = "/pd_esha/knowmore.php">Know More</a>
                </button>

                <div class = "current-news-head">
                    <h3>Dominant Display:<span> Swimmer Breaks Multiple Olympic Records</span></h3>

                    <h3>Triathlon Triumph: <span> Athlete Completes Grueling Race for Gold</span></h3>

                    <h3>Basketball Icon Bids Farewell: <span> Legendary Player's Final Olympic Appearance</span></h3>

                    <h3>Sailing to Victory:  <span> Sailors Brave Elements to Capture Gold </span></h3>
                </div>
            </div>
            <div class = "banner-sub-content">
                <div class = "hot-topic">
                    <img src = "images/indiaswin.jpg" alt = "">
                    <div class = "hot-topic-content">
                    <h2>India beat South Korea to lift maiden Women's Junior Hockey Asia Cup</h2>
                        <a href = "/pd_esha/readmore.php">Read More</a>
                    </div>
                </div>

                <div class = "hot-topic">
                    <img src = "images/newssport2.jpg" alt = "">
                    <div class = "hot-topic-content">                   
                        <a href = "/pd_esha/readmoree.php">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        
        <hr>

        <main>
            <section class = "main-container-left">
                <h2>Top Stories</h2>
                <div class = "container-top-left">
                    <article>
                        <img src = "images/news9.jpg">

                        <div>
                            <h3>Diving Duo Soars to Success: Synchronized Divers Win Gold</h3>

                            <p>A synchronized diving duo showcased remarkable precision and synchronization as they soared to Olympic gold. Their flawless dives, executed with impeccable timing and grace, earned them top honors and solidified their position as a dominant force in the world of diving.</p>

                            <a href = "/pd_esha/readmore.php">Read More <span>>></span></a>
                        </div>
                    </article>
                </div>

                <div class = "container-bottom-left">
                    <article>
                        <img src = "images/news8.jpg">
                        <div>
                            <h3>Thrilling Finishes Highlight Cycling Road Races at the Olympics</h3>
                            <p>The cycling road races at the Olympics witnessed thrilling finishes, as athletes pushed their limits in a fierce battle for victory. The peloton showcased strategic prowess, sprinting to the finish line in heart-stopping moments that captivated spectators and showcased the unpredictable nature of the sport.</p>

                            <a href = "/pd_esha/readmore.php">Read More <span>>></span></a>
                        </div>
                    </article>

                    <article>
                        <img src = "images/news7.jpg">
                        <div>
                            <h3>Record-Breaking Weightlifter Lifts Olympic Spirits</h3>
                            <p>A weightlifter from a small nation shattered records and lifted spirits at the Olympics. With astonishing displays of strength and technique, this remarkable athlete became an embodiment of determination and resilience, inspiring athletes and fans alike with their awe-inspiring achievements.</p>

                            <a href = "/pd_esha/readmore.php">Read More <span>>></span></a>
                        </div>
                    </article>
                </div>
            </section>

            <section class = "main-container-right">
                <h2>Latest Stories</h2>

                <?php
            include './config.php';
            $sql = 'SELECT * from news;';
            if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<article>';
                  echo '<h4>just in</h4>';
                  echo '<div>';
                  echo '<h2>'.$row['title'].'</h2>';
                  echo '<p style="display: -webkit-box; -webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;">' . $row['description'].'</p>';
                  echo '<a href="/pd_esha/news-read-more.php?id='.$row['id'].'">Read More <span>>></span></a>';
                  echo '</div>';
                  echo '<img src="'.$row['image_url'].'" />';
                  echo '</article>';
                }
              }
            }
        ?>
                
                
            </section>
        </main>

        <footer>

            <div class = "footer-container">
                <div class = "footer-left">
            <p style="text-align:center; ">Copyright &copy; 2025 All rights reserved |FunOlmpic</p>
            <div class = "social-icons">
                    <ul>
                        <li>
                            <a href= "https://www.facebook.com"><i class = "fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href= "https://www.twitter.com"><i class = "fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href= "https://www.instagram.com"><i class = "fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href= "https://www.youtube.com"><i class = "fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <script src="script.js" async defer></script>
    </body>
</html>