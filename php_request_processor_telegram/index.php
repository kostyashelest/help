<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$siteurl = $_SERVER['SERVER_NAME'];
$chatId = '';
$token = '';

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['utm_source']) && !empty($_POST['utm_source']))
{
    $email = strip_tags($_POST['email']);
    $text = strip_tags($_POST['text']);
    $phone = strip_tags($_POST['phone']);

    $utm_source  = strip_tags($_POST['utm_source']);
    $utm_medium  = strip_tags($_POST['utm_medium']);
    $utm_campaign  = strip_tags($_POST['utm_campaign']);
    $utm_content  = strip_tags($_POST['utm_content']);
    $utm_term  = strip_tags($_POST['utm_term']);

    $urlFirstPart = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chatId.'&parse_mode=html&text';
    $arr = array(
        'Контактная информация' => '',
        'Заявка с сайта' => $siteurl,
        'Почта' => $email,
        'Телефон' => $phone,
        'Комментарий' => $text,
        'Расшифровка UTM меток' => '',
        'Источник перехода' => $utm_source,
        'Тип трафика' => $utm_medium,
        'Название рекламной кампании' => $utm_campaign,
        'Дополнительная информация' => $utm_content,
        'Ключевая фраза' => $utm_term
    );
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key.":</b> " .$value."\n";
    };
    $urlSecondPart = rawurlencode($txt);
    $url = $urlFirstPart.'='.$urlSecondPart;
    echo $url;
// отправка сообщения
    $sendToTelegram = fopen($url, "r");
    fclose($sendToTelegram);
    if ($sendToTelegram) {
        echo 'Спасибо за отправку вашего сообщения!';
        echo '<br>';
        echo '<a href="index.html">вернуться на главную</a>';
        return true;
    } else {
        echo "Что-то пошло не так :(";
    }
} elseif (isset($_POST['email']) && !empty($_POST['email']) && empty($_POST['utm_source']))
{
    $email = strip_tags($_POST['email']);
    $text = strip_tags($_POST['text']);
    $phone = strip_tags($_POST['phone']);
    $urlFirstPart = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chatId.'&parse_mode=html&text';
    $arr = array(
        'Заявка с сайта' => $siteurl,
        'Почта' => $email,
        'Телефон' => $phone,
        'Комментарий' => $text
    );
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key.":</b> " .$value."\n";
    };
    $urlSecondPart = rawurlencode($txt);
    $url = $urlFirstPart.'='.$urlSecondPart;
    echo $url;
// отправка сообщения
    $sendToTelegram = fopen($url, "r");
    fclose($sendToTelegram);
    if ($sendToTelegram) {
        echo 'Спасибо за отправку вашего сообщения!';
        echo '<br>';
        echo '<a href="index.php">вернуться на главную</a>';
        return true;
    } else {
        echo "Что-то пошло не так :(";
    }
}
else
{
    echo 'Die robots! Die!!';
}
