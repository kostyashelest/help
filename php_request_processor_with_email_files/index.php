<?php
//Адреса, куда будут приходить письма. две почты указываем через запятую
$to = '';


// заказ продукта по карточке
if (isset($_POST['Phone']) && !empty($_POST['Phone']) && isset($_POST['Name']) && !empty($_POST['Name']) && isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['form_name']) && !empty($_POST['form_name']) && isset($_POST['prod_name']) && !empty($_POST['prod_name']) && !isset($_POST['Code']) && empty($_POST['Code'])) {
    $allowed_filetypes = array('.jpg', '.png', '.jpeg'); // Здесь мы перечисляем допустимые типы файлов
    $max_filesize = 524288; // Максимальный размер загружаемого файла в байтах (в данном случае он равен 0.5 Мб).
    $upload_path = './files/'; // Место, куда будут загружаться файлы (в данном случае это папка 'files').
    $filename = $_FILES['fileforsending']['name']; // В переменную $filename заносим точное имя файла (включая расширение).
    $ext = substr($filename, strpos($filename, '.'), strlen($filename) - 1); // В переменную $ext заносим расширение загруженного файла.
    $sitename = $_SERVER['SERVER_NAME'];
    $path = '/files/';
    // Загружаем фаил в указанную папку.
    if (move_uploaded_file($_FILES['fileforsending']['tmp_name'], $upload_path . $filename)) {
        $Phone = strip_tags($_POST['Phone']);
        $Name = strip_tags($_POST['Name']);
        $Email = strip_tags($_POST['Email']);
        $form_name = strip_tags($_POST['form_name']);
        $prod_name = strip_tags($_POST['prod_name']);
        $sitename = $_SERVER['SERVER_NAME'];
        // Формирование заголовка письма
        $subject = "[Заявка с сайта " . $sitename . "]";
        $headers = "From: mail \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
        // Формирование тела письма
        $msg = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка: «" . $form_name . "»</h2>\r\n";
        $msg .= "<p><strong>Имя:</strong> " . $Name . "</p>\r\n";
        $msg .= "<p><strong>Телефон:</strong> " . $Phone . "</p>\r\n";
        $msg .= "<p><strong>E-mail:</strong> " . $Email . "</p>\r\n";
        $msg .= "<p><strong>Продукт:</strong> " . $prod_name . "</p>\r\n";
        $msg .= "<p><strong>Загруженный файл:</strong> <a href=\"http://" . $sitename . $path . $filename . "\">смотреть</a></p>\r\n";
        $msg .= "</body></html>";
        // отправка сообщения
        mail($to, $subject, $msg, $headers);
    } else {
        $Phone = strip_tags($_POST['Phone']);
        $Name = strip_tags($_POST['Name']);
        $Email = strip_tags($_POST['Email']);
        $form_name = strip_tags($_POST['form_name']);
        $prod_name = strip_tags($_POST['prod_name']);
        $sitename = $_SERVER['SERVER_NAME'];
        // Формирование заголовка письма
        $subject = "[Заявка с сайта " . $sitename . "]";
        $headers = "From: mail \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
        // Формирование тела письма
        $msg = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка: «" . $form_name . "»</h2>\r\n";
        $msg .= "<p><strong>Имя:</strong> " . $Name . "</p>\r\n";
        $msg .= "<p><strong>Телефон:</strong> " . $Phone . "</p>\r\n";
        $msg .= "<p><strong>E-mail:</strong> " . $Email . "</p>\r\n";
        $msg .= "<p><strong>Продукт:</strong> " . $prod_name . "</p>\r\n";
        $msg .= "</body></html>";
        // отправка сообщения
        mail($to, $subject, $msg, $headers);
    }
}

// форма заказ онлайн
elseif (isset($_POST['Phone']) && !empty($_POST['Phone']) && isset($_POST['Name']) && !empty($_POST['Name']) && isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['form_name']) && !empty($_POST['form_name']) && !isset($_POST['prod_name']) && empty($_POST['prod_name']) && !isset($_POST['Code']) && empty($_POST['Code'])) {
    $allowed_filetypes = array('.jpg', '.png', '.jpeg'); // Здесь мы перечисляем допустимые типы файлов
    $max_filesize = 524288; // Максимальный размер загружаемого файла в байтах (в данном случае он равен 0.5 Мб).
    $upload_path = './files/'; // Место, куда будут загружаться файлы (в данном случае это папка 'files').
    $filename = $_FILES['fileforsending']['name']; // В переменную $filename заносим точное имя файла (включая расширение).
    $ext = substr($filename, strpos($filename, '.'), strlen($filename) - 1); // В переменную $ext заносим расширение загруженного файла.
    $sitename = $_SERVER['SERVER_NAME'];
    $path = '/files/';
    // Загружаем фаил в указанную папку.
    if (move_uploaded_file($_FILES['fileforsending']['tmp_name'], $upload_path . $filename)) {
        $Phone = strip_tags($_POST['Phone']);
        $Name = strip_tags($_POST['Name']);
        $Email = strip_tags($_POST['Email']);
        $form_name = strip_tags($_POST['form_name']);
        $sitename = $_SERVER['SERVER_NAME'];
        // Формирование заголовка письма
        $subject = "[Заявка с сайта " . $sitename . "]";
        $headers = "From: mail \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
        // Формирование тела письма
        $msg = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка: «" . $form_name . "»</h2>\r\n";
        $msg .= "<p><strong>Имя:</strong> " . $Name . "</p>\r\n";
        $msg .= "<p><strong>Телефон:</strong> " . $Phone . "</p>\r\n";
        $msg .= "<p><strong>E-mail:</strong> " . $Email . "</p>\r\n";
        $msg .= "<p><strong>Загруженный файл:</strong> <a href=\"http://" . $sitename . $path . $filename . "\">смотреть</a></p>\r\n";
        $msg .= "</body></html>";
        // отправка сообщения
        mail($to, $subject, $msg, $headers);
    } else {
        $Phone = strip_tags($_POST['Phone']);
        $Name = strip_tags($_POST['Name']);
        $Email = strip_tags($_POST['Email']);
        $form_name = strip_tags($_POST['form_name']);
        $sitename = $_SERVER['SERVER_NAME'];
        // Формирование заголовка письма
        $subject = "[Заявка с сайта " . $sitename . "]";
        $headers = "From: mail \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
        // Формирование тела письма
        $msg = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка: «" . $form_name . "»</h2>\r\n";
        $msg .= "<p><strong>Имя:</strong> " . $Name . "</p>\r\n";
        $msg .= "<p><strong>Телефон:</strong> " . $Phone . "</p>\r\n";
        $msg .= "<p><strong>E-mail:</strong> " . $Email . "</p>\r\n";
        $msg .= "</body></html>";
        // отправка сообщения
        mail($to, $subject, $msg, $headers);
    }
}

// форма с выбором образца
elseif (isset($_POST['Phone']) && !empty($_POST['Phone']) && isset($_POST['Name']) && !empty($_POST['Name']) && isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['form_name']) && !empty($_POST['form_name']) && isset($_POST['Code']) && !empty($_POST['Code'])) {
    $Name = strip_tags($_POST['Name']);
    $Phone = strip_tags($_POST['Phone']);
    $Email = strip_tags($_POST['Email']);
    $form_name = strip_tags($_POST['form_name']);
    $Code = strip_tags($_POST['Code']);
    $sitename = $_SERVER['SERVER_NAME'];
    // Формирование заголовка письма
    $subject = "[Заявка с сайта " . $sitename . "]";
    $headers = "From: mail \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    // Формирование тела письма
    $msg = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка: «" . $form_name . "»</h2>\r\n";
    $msg .= "<p><strong>Имя:</strong> " . $Name . "</p>\r\n";
    $msg .= "<p><strong>Телефон:</strong> " . $Phone . "</p>\r\n";
    $msg .= "<p><strong>Email:</strong> " . $Email . "</p>\r\n";
    $msg .= "<p><strong>Номер образца:</strong> " . $Code . "</p>\r\n";
    $msg .= "</body></html>";
    // отправка сообщения
    mail($to, $subject, $msg, $headers);
}

// заказ обратного звонка
elseif (isset($_POST['Phone']) && !empty($_POST['Phone']) && isset($_POST['Name']) && !empty($_POST['Name']) && !isset($_POST['Email']) && empty($_POST['Email']) && isset($_POST['form_name']) && !empty($_POST['form_name']) && !isset($_POST['prod_name']) && empty($_POST['prod_name'])) {
    $Name = strip_tags($_POST['Name']);
    $Phone = strip_tags($_POST['Phone']);
    $form_name = strip_tags($_POST['form_name']);
    $sitename = $_SERVER['SERVER_NAME'];
    // Формирование заголовка письма
    $subject = "[Заявка с сайта " . $sitename . "]";
    $headers = "From: mail \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    // Формирование тела письма
    $msg = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка: «" . $form_name . "»</h2>\r\n";
    $msg .= "<p><strong>Имя:</strong> " . $Name . "</p>\r\n";
    $msg .= "<p><strong>Телефон:</strong> " . $Phone . "</p>\r\n";
    $msg .= "</body></html>";
    // отправка сообщения
    mail($to, $subject, $msg, $headers);
}

// подписка по email
elseif (isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['form_name']) && !empty($_POST['form_name']) && !isset($_POST['Name']) && empty($_POST['Name']) && !isset($_POST['Phone']) && empty($_POST['Phone'])) {
    $Email = strip_tags($_POST['Email']);
    $form_name = strip_tags($_POST['form_name']);
    $sitename = $_SERVER['SERVER_NAME'];
    // Формирование заголовка письма
    $subject = "[Заявка с сайта " . $sitename . "]";
    $headers = "From: mail \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    // Формирование тела письма
    $msg = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка: «" . $form_name . "»</h2>\r\n";
    $msg .= "<p><strong>E-mail:</strong> " . $Email . "</p>\r\n";
    $msg .= "</body></html>";
    // отправка сообщения
    mail($to, $subject, $msg, $headers);
} else {
    echo "Die robots! Die!";
}
