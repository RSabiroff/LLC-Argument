<?php

$to = 'rashid.sabirov.2001@mail.ru';
$name = clear_data($_POST['name']);
$city = clear_data($_POST['city']);
$email = clear_data($_POST['email']);
$subject = 'ЗАКАЗ ИНСТРУМЕНТА';

// $headers = "From: no-reply@instrument-laparo.ru\r\n";
// $headers .= "Reply-To: no-reply@instrument-laparo.ru\r\n";
// $headers .= "Content-type: text/html; charset=utf-8\r\n";

$headers = [
  "From" => "no-reply@instrument-laparo.ru",
  "Reply-To" => "no-reply@instrument-laparo.ru",
  "Content-type" => "text/html; charset=utf-8"
];

// $message = 'Имя: ' . $name . "\n" . 'Email: ' . $email . "\n" . 'Сообщение: ' . $text . "\n";
$message = '
  <html>
  <body>
    <center>
      <table border="1" cellpading="6" sellspacing="0" width="90%" border-color="#DBDBDB">
        <tr> <td align="center" bgcolor="#E4E4E4"> <b>ФИО</b> </td> <td align="center" bgcolor="#E4E4E4">'. $name .'</td> </tr>
        <tr> <td align="center" bgcolor="#E4E4E4"> <b>Город</b> </td> <td align="center" bgcolor="#E4E4E4">'. $city .'</td> </tr>
        <tr> <td align="center" bgcolor="#E4E4E4"> <b>Email</b> </td> <td align="center" bgcolor="#E4E4E4">'. $email .'</td> </tr>
      </table>
    </center>
  </body>
  </html>
';

function clear_data($val) {
  $val = trim($val);
  $val = stripslashes($val);
  $val = htmlspecialchars($val);

  return $val;
}

if (isset($_POST['submit'])) {
  mail($to, $subject, $message, $headers);
};

?>
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

    <p>Мы напишем Вам в ближайшее время.</p>
    <p class="thankyou__notice">Вы ввели следующие данные:</p>
    <p class="thankyou__notice">ФИО: <?php echo $name;?></p>
    <p class="thankyou__notice">Город: <?php echo $city;?></p>
    <p class="thankyou__notice">Email: <?php echo $email;?></p>
    <p class="thankyou__notice">Если Вы допустили ошибку, пожалуйста, вернитесь и отправьте заявку ещё раз.</p>

    <button class="button" onclick="history.go(-1);">Вернуться</button>
  </div>
</body>
</html>