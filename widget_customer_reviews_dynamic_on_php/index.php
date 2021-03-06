<html>

<head>
  <meta charset="utf-8">
  <title>Виджет: Отзывы клиентов PHP</title>
  <link href="otz/css/main.css" media="all" rel="stylesheet" type="text/css">
  <?php include 'otz/script/main.php'; ?>
  <meta content="width=device-width, initial-scale=1" name="viewport">
</head>

<body>
  <div class="reviews-list k-content-container">
    <h3 class="k-title-section">Отзывы клиентов</h3>

    <div class="k-reviews-item on-the-left">
      <div class="user-photo" id="user-photo-first"><img src="otz/img/<?php echo $image1; ?>" alt="фото клиента" title="фото клиента"></div>
      <div class="user-post">
        <div class="user-post-title" id="k-name-first"><?php echo $name1; ?> (<?php echo $city1; ?>)</div>
        <div class="user-post-text">
          <p id="k-review-first"><?php echo $review1; ?></p>
          <br>
          <p id="k-date-first"><?php echo $date; ?></p>
        </div>
      </div>
    </div>

    <div class="k-reviews-item on-the-right">
      <div class="user-photo" id="user-photo-second"><img src="otz/img/<?php echo $image2; ?>" alt="фото клиента" title="фото клиента"></div>
      <div class="user-post">
        <div class="user-post-title" id="k-name-second"><?php echo $name2; ?> (<?php echo $city2; ?>)</div>
        <div class="user-post-text">
          <p id="k-review-second"><?php echo $review2; ?></p>
          <br>
          <p id="k-date-second"><?php echo $date; ?></p>
        </div>
      </div>
    </div>

    <div class="k-reviews-item on-the-left">
      <div class="user-photo" id="user-photo-third"><img src="otz/img/<?php echo $image3; ?>" alt="фото клиента" title="фото клиента"></div>
      <div class="user-post">
        <div class="user-post-title" id="k-name-third"><?php echo $name3; ?> (<?php echo $city3; ?>)</div>
        <div class="user-post-text">
          <p id="k-review-third"><?php echo $review3; ?></p>
          <br>
          <p id="k-date-third"><?php echo $date; ?></p>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
