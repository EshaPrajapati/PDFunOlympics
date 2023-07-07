<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="about.css">
    <style>
        /* ---ABOUTUS--- */
#feature{
    width: 100%;
    padding: 70px 0;
}

.title-text h1{
    font-size: 30px;
}
.back_btn{
  display:flex;
  background-color:#A4907C;
  height:50px;
  margin-right:10px;
}
body {
    margin: 3rem 0 0 0;
    font-family: var(--body-font);
    font-weight: initial;
  }
  .MIVIAC {
    text-align: center;
  }
  .listitems {
    /* color: black; */
    /* background-image: url("./images/olympicpic.png"); */
    margin-left: 2%;
    margin-right: 2%;
  }
  
  
  .animated-heading {
  color: #AC4425;
  text-align: center;
  animation: animate 2s ease-in-out infinite;
}

@keyframes animate {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.2);
  }
  100% {
    transform: scale(1);
  }
}

@keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @keyframes slideInFromLeft {
    from {
      transform: translateX(-50%);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  /* General styles */
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
  }

  .abtbody {
    padding: 20px;
    /* background-image:url(images/skybg.jpg);
    background-size:cover; */
  }

  /* Section styles */
  #abtus {
    text-align: center;
    margin-bottom: 30px;
    animation: fadeIn 1s ease;
  }

  .abtus-1 {
    margin-bottom: 30px;
  }

  h1 {
    font-size: 32px;
    color: #333;
    font-weight:bolder;
    margin-bottom: 10px;
  }

  p {
    font-size: 18px;
    color: #A4907C;
    font-weight:bolder;
    line-height: 1.6;
  }

  /* List styles */
  .listitems {
    display: flex;
    justify-content: center;
  }

  .col-md-4 {
    flex-basis: 33.33%;
    margin-bottom: 30px;
    animation: slideInFromLeft 1s ease;
  }

  .abt-list {
    /* background-color: #A4907C; */
    /* background-image:url(images/skybg.jpg); */
    /* background-size:cover; */
    background-color:black;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .abt-list:hover {
    transform: translateY(-5px);
  }

  i {
    font-size: 40px;
    color: white;
    margin-bottom: 10px;
  }

  h3 {
    font-size: 24px;
    color: white;
    margin-bottom: 10px;
  }

  hr {
    border: none;
    border-top: 1px solid #eee;
    margin: 10px 0;
  }

  /* Footer styles */
  .cpr {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
  }

  footer p {
    font-size: 14px;
    margin: 0;
  }
    </style>
    <title>AboutUs</title>
</head>
<body>
    <div class="main_home">
        <div class="nav_bar">
            <div class="sport">
            <p class="back_btn";>
            <a href="./home" style="color: white; font-weight:bolder">
            <i class="fa fa-arrow-left"></i>
            BACK
</a>
</p>
                <img src="images/rutgersathletics.jpg" style= "width:1499px; background-color: #ffffff; height:457px; background-color: rgb(0, 0, 0);" >           
                <h1 class="animated-heading" >Welcome To FunOlympic</h1>
            </div>
            </div>
        </div>
        </div>
        </div>
 
    <div class="abtbody">
      <section id="abtus">
        <div class="abtus-1">
          <h1 style="text-decoration:underline; color:black;">GET TO KNOW US</h1>
          <p>
            We are committed to bringing you the most exciting moments of the
            Olympics, right to your screens. Our dedicated team of professionals
            works tirelessly to capture every victory, every record-breaking
            performance, and every inspiring story from the Games. Whether
            you're a fan of athletics, swimming, gymnastics, or any other
            Olympic sport, we've got you covered. With our state-of-the-art
            broadcasting technology, you won't miss a single moment of the
            action. Stay tuned for the upcoming Olympic Games and be part of the
            global celebration of athleticism and sportsmanship. Join us as we
            witness history in the making and showcase the world's greatest
            athletes as they compete for glory.
          </p>
        </div>
        <div class="abtus-2"></div>
        <div class="MIVIAC">
          <div class="listitems">
            <div class="for-row">
              <div class="col-md-4">
                <div class="abt-list text-center">
                  <i class="fa fa-book"></i>
                  <h3>MISSION</h3>
                  <hr />
                  <p>
                    loremjhgjhgjhbjhb Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Alias libero quia maiores sunt ullam?
                    Vitae reiciendis veritatis architecto! Exercitationem magnam
                    vero aspernatur voluptates doloremque corrupti. Quibusdam
                    commodi et officiis iste!
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="abt-list text-center">
                  <i class="fa fa-globe"></i>
                  <h3>VISION</h3>
                  <hr />
                  <p>
                    loremjhgjhgjhbjhb Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Quisquam, repudiandae sunt tempora impedit
                    possimus quaerat esse, voluptatum excepturi unde nemo quos
                    dolorum. Commodi, nam officiis officia iste doloremque
                    nostrum hic!
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="abt-list text-center">
                  <i class="fa fa-pencil"></i>
                  <h3>ACHIEVEMENT</h3>
                  <hr />
                  <p>
                    loremjhgjhgjhb Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Earum expedita aperiam, consequatur alias,
                    qui dicta necessitatibus nihil dignissimos sed libero ad
                    reprehenderit vero nisi recusandae tenetur totam quo odit
                    quas.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="cpr">
      <footer>
        <p style="padding: 0; margin: 0; color: #A4907C">
          Copyright &copy; 2023 All rights reserved by FunOlympic Yokyo
        </p>
      </footer>
    </div>
  </body>
</html>