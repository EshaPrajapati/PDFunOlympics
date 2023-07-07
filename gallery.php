<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SportsGallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="gallery.css" />
    <style>
        /* ///////////gallery////////////// */
.galcontainer {
    width: 100%;
    text-align: center;
    size-adjust: inherit;
    overflow: scroll;
  }
  .galcontainer .top-container .buttons.active{
    color: rgb(102, 12, 124);
    font-weight: bolder;
  }
  body {
    margin: 3rem 0 0 0;
    font-family: var(--body-font);
    font-weight: initial;
  }
  header {
      background-color: #A4907C;
      color: white;
      padding: 10px;
    }

  .back_btn{
  display:flex;
  margin-right:10px;
  height:50px;
  background-color: #A4907C;
}

.galcontainer h1 {
    font-weight: normal;
    font-size: 35px;
    font-weight:bolder;
    position: relative;
    color: #884A39;
    margin: 40px 0;
  }
  .animated-heading {
    animation: fadeIn 2s ease-in-out forwards;
  opacity: 0;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
  /* .galcontainer h1::before {
    content: "";
    position: absolute;
    width: 100px;
    height: 3px;
    bottom: -5px;
    left: 50%;
    background-color: #A4907C;
    transform: translateX(-50%);
    animation: animate 8s linear infinite;
  } 
  @keyframes animate {
    0% {
      width: 100px;
    }
    50% {
      width: 200px;
    }
    100% {
      width: 100px;
    }
  } */
  .top-container {
    background-color: rgb(243, 243, 243);
    width: 95%;
    margin: 0 auto 20px auto;
    height: 40px;
    display: flex;
    align-items: center;
    border-radius: 8px;
    box-shadow: 3px 3px 5px lightblue;
  }
  .top-container h3 {
    height: 20px;
    line-height: 20px;
    padding: 0 10px;
    color: brown;
  }
  .top-container label {
    display: inline-block;
    height: 60%;
    padding: 0 5px;
    margin: 0 9px;
    font-size: 19px;
    color: black;
    margin-right: 40px; /* Adjust the value to control the gap between the labels */
    cursor: pointer;
    transition: color 0.4s;
    font-weight: 500;
  }
  .top-container label:hover {
    color: #A4907C;
  }
 
  .photo-gallery {
    width: 90%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 12px;
    overflow: scroll;
  }
  .pic {
    position: relative;
    height: 230px;
    cursor: pointer;
    border-radius: 8px;
    box-shadow: 2px 3px 4px lightblue;
  }
  .pic img {
    width: 100%;
    height: 100%;
    border-radius: 8px;
    transition: 0.5s;
  }
  .pic::before {
    content: "Sport Gallery";
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: whitesmoke;
    font-size: 22px;
    font-weight: bold;
    width: 100%;
    margin-top: -100px;
    opacity: 0;
    transition: 0.3s;
    transition-delay: 0.2s;
    z-index: 1;
  }
  .pic::after {
    content: "";
    position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
    border-radius: 10px;
    height: 0;
    background-color: rgba(0, 0, 0, 0.4);
    transition: 0.3s;
  }
  .pic:hover::after {
    height: 100%;
  }
  .pic:hover::before {
    margin-top: 0;
    opacity: 1;
  }
  /* #check1:checked ~ .galcontainer.photo-gallery.pic {
    opacity: 1;
    transform: scale(1);
    position: relative;
  }
  #check2:checked ~ .galcontainer.photo-gallery.basketball {
    transform: scale(1);
    opacity: 1;
    position: relative;
  } */
  #filter-all:checked ~ .photo-gallery .pic {
    display: block;
    opacity: 0;
    transform: scale(0);
    position: relative;
  }
  
  #filter-Basketball:checked ~ .photo-gallery .basketball {
    opacity: 0;
    transform: scale(0);
    position: relative;
  }
  #filter-Cricket:checked ~ .photo-gallery .cricket,
  #filter-Hocky:checked ~ .photo-gallery .hocker,
  #filter-Swimming:checked ~ .photo-gallery .swimming,
  #filter-Football:checked ~ .photo-gallery .football,
  #filter-Volleyball:checked ~ .photo-gallery .volleyball,
  #filter-Gymnastics:checked ~ .photo-gallery .gymnastics,
  #filter-Fencing:checked ~ .photo-gallery .fencing {
    display: block;
    opacity: 0;
    transform: scale(0);
    position: absolute;
  }
    </style>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
    />
  </head>
  <body>
  <div class = "navigation-container">
            <p class="back_btn";>
            <a href="./home" style=" color: white; font-weight: bolder">
            <i class="fa fa-arrow-left"></i>
            BACK
</a>
</p>
    <input type="radio" name="sports" id="sport1" checked />
    <input type="radio" name="sports" id="sport2" />
    <input type="radio" name="sports" id="sport3" />
    <input type="radio" name="sports" id="sport4" />
    <input type="radio" name="sports" id="sport5" />
    <input type="radio" name="sports" id="sport6" />
    <input type="radio" name="sports" id="sport7" />
    <input type="radio" name="sports" id="sport8" />
    <input type="radio" name="sports" id="sport9" />
    <div class="galcontainer">
      <h1 class="animated-heading">Olympic Gallery: A Spectacular Showcase of Sporting </h1>
      <div class="top-container">
        <h3>Sports category</h3>
        <label for="sport1" class="buttons active" data-filter="all">All Photos</label>
        <label for="sport2" class="buttons" data-filter="basketball"
          >Basketball</label
        >
        <label for="sport3" class="buttons" data-filter="cricket"
          >Cricket</label
        >
        <label for="sport4" class="buttons" data-filter="hocker">Hockey</label>
        <label for="sport5" class="buttons" data-filter="swimming"
          >Swimming</label
        >
        <label for="sport6" class="buttons" data-filter="football"
          >Football</label
        >
        <label for="sport7" class="buttons" data-filter="volleyball"
          >Volleyball</label
        >
        <label for="sport8" class="buttons" data-filter="gymnastic"
          >Gymnastics</label
        >
        <label for="sport9" class="buttons" data-filter="fencing"
          >Fencing</label
        >
      </div>
      <div class="photo-gallery">
        <div class="basketball pic">
          <img src="images/basket1.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cricket1.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hockey1.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/swimming1.jpg" />
        </div>
        <div class="football pic">
          <img src="images/football1.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/volley1.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gymnas1.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fencing1.jpg" />
        </div>
        <div class="basketball pic">
          <img src="images/basket2.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cricket2.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hockey2.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/swimming2.jpg" />
        </div>
        <div class="football pic">
          <img src="images/football2.jpg" />
        </div>
        <div class="volleyball pic.jpg">
          <img src="images/volley2.jpg"/>
        </div>
        <div class="gymnastic pic">
          <img src="images/gymnas2.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fencing2.jpg" />
        </div>
        <div class="basketball pic">
          <img src="images/basket3.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cricket3.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hockey3.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/swimming3.jpg" />
        </div>
        <div class="football pic">
          <img src="images/football3.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/volley3.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gymnas3.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fencing3.jpg" />
        </div>
        <div class="basketball pic">
          <img src="images/basket4.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cricket4.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hockey4.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/swimming4.jpg" />
        </div>
        <div class="football pic">
          <img src="images/football4.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/volley4.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gymnas4.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fencing4.jpg" />
        </div>
        <div class="basketball pic">
          <img src="images/basket5.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cricket5.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hockey5.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/swimming5.jpg" />
        </div>
        <div class="football pic">
          <img src="images/football5.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/volley5.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gymnas5.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fencing5.jpg" />
        </div>
        <div class="basketball pic">
          <img src="images/basket6.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cricket6.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hockey6.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/swimming6.jpg" />
        </div>
        <div class="football pic">
          <img src="images/football6.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/volley6.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gymnas6.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fencing6.jpg" />
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
      $(document).ready(function () {
        $(".buttons").click(function () {
          $(this).addClass("active").siblings().removeClass("active");

          var filter = $(this).attr("data-filter");

          if (filter == "all") {
            $(".pic").show(400);
          } else {
            $(".pic")
              .not("." + filter)
              .hide(200);
            $(".pic")
              .filter("." + filter)
              .show(400);
          }
        });

        $(".galcontainer").magnificPopup({
          delegate: "a",
          type: "pic",
          gallery: {
            enabled: true,
          },
        });
      });
    </script>
  </body>
</html>