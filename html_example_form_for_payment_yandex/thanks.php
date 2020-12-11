<!DOCTYPE html>
<html>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <title>Ваша заявка принята</title>
  <style>
    body {
      margin: 0;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      line-height: 1.5;
      background-color: rgb(238, 241, 243);
    }

    .thankyou {
      overflow: hidden;
      box-sizing: border-box;
      min-height: 100vh;
      background: url(img-ty-page/thankyou-bg.jpg) center bottom no-repeat #fdfdff;
      text-align: center;
      position: relative;
      padding: 10px;
      font-size: 16px;
    }

    .thankyou__title {
      color: rgb(10, 161, 80);
      font-size: 36px;
    }

    .thankyou__title--error {
      color: #da0000;
    }

    .thankyou__divider {
      max-width: 100%;
    }

    .thankyou__image {
      position: absolute;
      bottom: 0;
      left: 5%;
    }

    .thankyou__notice {
      font-size: 13px;
    }

    .button {
      background: transparent linear-gradient(to bottom, rgb(13, 181, 57) 0%, rgb(0, 144, 67) 100%) repeat scroll 0 0;
      border: none;
      border-bottom: 2px solid rgb(21, 90, 53);
      outline: 0 none;
      padding: 15px 25px;
      text-transform: uppercase;
      color: #fff;
      font-weight: bold;
      border-radius: 4px;
      cursor: pointer;
    }

    .button:hover {
      -webkit-transform: translateY(-1px);
      -moz-transform: translateY(-1px);
      -ms-transform: translateY(-1px);
      -o-transform: translateY(-1px);
      transform: translateY(-1px);
    }

    @media all and (max-width: 600px) {
      .thankyou__title {
        font-size: 30px;
      }
    }

    @media all and (max-height: 500px) {
      .thankyou__image {
        width: 130px;
        height: auto;
      }
    }
  </style>
</head>

<body>
  <div class='thankyou'>

    <h1 class="thankyou__title">Спасибо, заявка принята!</h1>
    <p>
      Оператор свяжется с Вами в течение 15 минут </p>
    <img class="thankyou__divider" src="img-ty-page/thankyou-divider.png">
    <br><br>
    <a href="/" class="button" style="text-decoration:none;">Вернуться на сайт</a>

    <img class="thankyou__image" src="img-ty-page/thankyou-girl.png">
  </div>
</body>

</html>
