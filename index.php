<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Olympics Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./css/homepage.css" />
  </head>
  <body>
    <?php include './component/header.php' ?>

    <div id="home" class="parallax-section">
      <h1 style="text-align:center;">Welcome to FunOlympics Broadcasting</h1>
      <p style="text-align:center;">Watch live games and highlights from the Olympic Games</p>
      <br /><br />
      <a href="/pd_esha/home" class="cta-button">Get Started</a>
    </div>
    <section id="newsletter" class="newsletter-section">
      <div class="container">
        <h2>Sign up for Newsletter</h2>
        <p>
          Stay updated with the latest news, events, and highlights from the
          Olympic Games. Subscribe to our newsletter to receive regular updates
          delivered straight to your inbox.
        </p>
        <form action="#" method="POST" class="newsletter-form">
          <input
            type="email"
            name="email"
            placeholder="Enter your email address"
            required
          />
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </section>

    <div id="gallery" class="parallax-section">
      <h2 style="text-align:center;">Featured Athletes</h2>
      <div class="image-container">
        <div class="athlete">
          <img
            src="https://compote.slate.com/images/e5bb0738-1a30-410f-a2f6-762020a09075.jpeg?crop=4675%2C3117%2Cx0%2Cy0"
            alt="Athlete 1"
          />
          <h3>Keshai Jung</h3>
        </div>
        <div class="athlete">
          <img
            src="https://img.etimg.com/thumb/msid-84845827,width-1200,height-900,resizemode-4,imgsize-724394/tokyo-olympics-2021-day-7-latest-news-olympic-games-medal-tally-live-updates-jul-26.jpg"
            alt="Athlete 2"
          />
          <h3>Sindhu Maiti</h3>
        </div>
        <div class="athlete">
          <img
            src="https://drop.ndtv.com/albums/SPORTS/topindianperformerstokyo2020/5.jpg"
            alt="Athlete 3"
          />
          <h3>David Johnson</h3>
        </div>
        <div class="athlete">
          <img
            src="https://www.chinadailyasia.com/attachments/image/202/192/75/705628_379710/705628_379710_800_auto_jpg.jpg"
            alt="Athlete 1"
          />
          <h3>John Doe</h3>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="footer-logo">
          <img
            src="images/olympiclogooo.png";
            alt="Olympics Logo"
          />
          <h3 class="footer-logo-text"; style="text-decoration:underline; font-weight:bolder;">Olympics</h3>
        </div>
        <div class="footer-content">
          <div class="footer-column">
            <h4>About Us</h4>
            <p>
              Welcome to the official website of the Olympics! We are dedicated
              to celebrating the spirit of sportsmanship, unity, and athletic
              excellence. Our mission is to inspire and bring people together
              through the power of the Olympic Games.
            </p>
          </div>
          
          <div class="footer-column">
            <h4>Follow Us</h4>
            <div class = "social-icons">
                    <ul>
                        <li>
                            <a href= "https://www.facebook.com"><i class = "fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href= "https://www.twitter.com"><i class = "fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href= "https://www.instagram.com"><i class = "fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href= "https://www.youtube.com"><i class = "fa fa-youtube"></i></a>
                        </li>
                </div>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>