<?php
session_start();

function getStatus($startsAt, $endsAt)
{
    $currentTime = time();

    $convertedStartsAt = strtotime($startsAt);
    $convertedEndsAt = strtotime($endsAt);

    if ($currentTime < $convertedStartsAt) {
        return "NOT YET AIRED";
    } elseif ($currentTime > $convertedEndsAt) {
        return "COMPLETED";
    } else {
        return "ONGOING";
    }
}

$sql;
require "../config.php";

$viewingBroadcasts = true;
$userId = isset($_SESSION['SESSION_ID']) ? (int) $_SESSION['SESSION_ID'] : FALSE;

if (isset($_GET['broadcast'])) {
    $viewingBroadcasts = false;
    $broadcastId = (int) mysqli_real_escape_string($conn, $_GET['broadcast']);
    $_SESSION["SESSION_CURRENT_BROADCAST"] = $broadcastId;
    $sql = "SELECT b.id, b.title, b.description, b.image_url, c.name as category, b.url, b.location, b.gender_representation, b.starts_at, b.ends_at FROM broadcast b INNER JOIN category c on b.category_id = c.id WHERE b.id={$broadcastId};";

    if ($resultSelect = $conn->query("SELECT * from broadcast_notification bn left join broadcast b on bn.broadcast_id=b.id where bn.user_id=$userId AND bn.broadcast_id=$broadcastId AND b.starts_at < NOW()")){
        if ($resultSelect->num_rows == 1){
            $sqlNotifyUpdate = "UPDATE broadcast_notification SET notify='0', mark_as_read='0' where user_id=$userId AND broadcast_id=$broadcastId"; 
            $result =mysqli_query($conn, $sqlNotifyUpdate);
        }else{
      }
    }
} else {
    if (isset($_GET['category'])) {
        $categoryId = (int) mysqli_real_escape_string($conn, $_GET['category']);
        $sql = 'SELECT b.id, b.title, b.description, b.image_url, b.category_id, c.name as category, b.location, b.gender_representation, b.starts_at, b.ends_at FROM broadcast b INNER JOIN category c on b.category_id = c.id where b.category_id=' . $categoryId . ';';
    } else {
        $sql = 'SELECT b.id, b.title, b.description, b.image_url, b.category_id, c.name as category, b.location, b.gender_representation, b.starts_at, b.ends_at FROM broadcast b INNER JOIN category c on b.category_id = c.id;';
    }
    $viewingBroadcasts = true;
}
?>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/pd_esha/config.php";

$query = "SELECT * FROM category";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>title-placeholder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="/pd_esha/css/style.css">
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
        />

    <style>
       .card {
  --blur: 16px;
  --size: clamp(300px, 50vmin, 600px);
  width: var(--size);
  aspect-ratio: 4 / 3;
  position: relative;
  border-radius: 2rem;
  overflow: hidden;
  color: #000;
  transform: translateZ(0);
}

.card__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: scale(calc(1 + (var(--hover, 0) * 0.25))) rotate(calc(var(--hover, 0) * -5deg));
  transition: transform 0.2s;
}

.card__footer {
  padding: 0 1.5rem;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background: red;
  display: grid;
  grid-template-row: auto auto;
  gap: 0.5ch;
  background: hsl(0 0% 100% / 0.5);
  backdrop-filter: blur(var(--blur));
  height: 30%;
  align-content: center;
}

.card__action {
  position: absolute;
  aspect-ratio: 1;
  width: calc(var(--size) * 0.15);
  bottom: 30%;
  right: 1.5rem;
  transform: translateY(50%)
    translateY(
      calc(
        (var(--size) * 0.4)
      )
    )
    translateY(calc(var(--hover, 0) * (var(--size) * -0.4)));
  background: purple;
  display: grid;
  place-items: center;
  border-radius: 0.5rem;
  background: hsl(0 0% 100% / 0.5);
/*   backdrop-filter: blur(calc(var(--blur) * 0.5)); */
  transition: transform 0.2s;
}

.card__action svg {
  aspect-ratio: 1;
  width: 50%;
}

.card__footer span:nth-of-type(1) {
  font-size: calc(var(--size) * 0.065);
}

.card__footer span:nth-of-type(2) {
  font-size: calc(var(--size) * 0.035);
}

.card:is(:hover, :focus-visible) {
  --hover: 1;
}

.overflow-class{
   word-break: break-word;
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   line-height: 16px;
   max-height: 32px;
   -webkit-line-clamp: 1;
   -webkit-box-orient: vertical;
}
 
    </style>
</head>

<body>
    <?php require "../component/header.php" ?>
    <div class="contain-main">
        <div class="box">
            <div>
                <?php
                if ($viewingBroadcasts) {
                    echo '<div class="contain-title" style="padding-bottom: 24px;">';
                    echo '<h1>Broadcasts</h1>';
                    echo "<div style='display: flex; justify-content: flex-start; align-items:center; gap: 18px; margin-top: 18px;'>";
                    echo "<a style='background-color: transparent; border: none; padding: 0; margin: 0;color: #333; font-weight: 400;";
                    if(!activeLinkContains("category")) echo "color: #2c746b; font-weight:bold;text-decoration: underline;";
                    echo "' href='/pd_esha/home'>All</a>";

                    foreach ($options as $option) {
                        echo "<a style='background-color: transparent; border: none; padding: 0; margin: 0;color: #333; font-weight: 400;";
                        if(activeLinkContains("category=" . (int)$option['id'])) echo "color: #2c746b; font-weight:bold;text-decoration: underline;";
                        echo "' href='/pd_esha/home?category={$option['id']}'>{$option['name']}</a>";
                    }
                    echo "</div>";
                    echo '</div>';
                    echo '<div class="grid-container" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 60px;">';
                    if ($result = $conn->query($sql)) {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $status = getStatus($row['starts_at'], $row['ends_at']);
                                $broadcastId = (int) $row['id'];
                                
                                if ($status == 'ONGOING') {
                                    echo '<a href="/pd_esha/home?broadcast=' . $row['id'] . '" class="card">';
                                    echo '<img src="'.$row['image_url'].'" alt="balloon with an emoji face" class="card__img">';
                                    echo '<span class="card__footer">';
                                    echo '<span class="overflow-class">'.$row['title'].'</span>';
                                    echo '<span style="text-transform:uppercase; font-weight: bold;">'.$row['category'].'</span>';
                                    echo '</span>';
                                    echo '<span class="card__action">';
                                    echo '<svg viewBox="0 0 448 512" title="play">';
                                    echo '<path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" />';
                                    echo '</svg>';
                                    echo '</span>';
                                    echo '</a>';
                                }
                            }
                        } else {
                            echo "<p style='font-size: 18px;'>Broadcast with such category not found</p>";
                        }
                    }
                    echo "</div>";
                } else {
                    // Single Broadcast
                    if ($result = $conn->query($sql)) {
                        if ($result->num_rows == 1) {
                            $row = $result->fetch_assoc();
                            echo "<div>";
                            echo '<h1 style="padding-bottom: 24px;">' . $row['title'] . '</h1>';
                            echo '<h3 style="padding-bottom: 8px;">Live Broadcast</h3>';
                            echo "<div style='display:flex;'>";
                            echo '<div style="flex: 9; position:relative;height:500px;overflow:hidden;"> <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden" frameborder="0" type="text/html" src="'.$row['url'].'" width="100%" height="100%" allowfullscreen title="Dailymotion Video Player" allow="autoplay"> </iframe> </div>';
                              require './chat.php';
                              echo "</div>";
                              echo '<h3 style="padding-top: 16px;">Description</h3>';
                              echo '<p>' . $row['description'] . '</p>';
                              echo '<h3 style="padding-top: 16px">Status</h3>';
                              echo '<p>' . $row['starts_at'] . ' - ' . $row['ends_at'] . '</p>';
                              echo '<div style="margin-top: 12px; font-weight: bold; border: 1px solid rgba(0, 0, 0, 0.2); display: inline-block; padding: 6px 12px; border-radius: 8px;">LIVE</div>';
                              echo '</div>';
                          }
                      }
                  }
                  ?>
              </div>
          </div>
      </div>
      <?php require "../component/footer.php" ?>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script>
          function check(cb) {
              const broadcastId = cb.getAttribute("data-broadcast-id");
              if ($(cb).is(":checked")) {
                  $.getScript('./actions/checkCheckbox.php?broadcast=' + broadcastId);
              } else {
                  $.getScript('./actions/uncheckCheckbox.php?broadcast=' + broadcastId);
              }
          }
      </script>
      <script src="js/jquery.cookie.js"></script>
      <script type="text/javascript" src="js/jquery.validate.min.js"></script>
      <script src="js/chat.js"></script>
      <script src="js/signup.js"></script>
      <script src="js/contentmenu.js"></script>
      <script>
          window.onload = function () {
              console.log('loaded');
              var usernameInput = document.getElementById('username');
              var submitButton = document.getElementById('btn-submit');
  
              // Retrieve value from cookie with key "userName"
              var userNameCookie = $.cookie('userName');
  
              if (userNameCookie) {
                  // Add value to the input field
                  usernameInput.value = userNameCookie;
  
                  // Simulate a click event on the button
                  submitButton.click();
              }
          };
      </script>
  </body>
  
  </html>