<?php
// Locale for displaying the date in Russian
setlocale(LC_TIME, 'ru_RU.UTF-8');
$date = strftime("%e %B %G");

// Arrays with data for each block with a response
$block1 = array(
    array(
        "name" => "Сергей",
        "city" => "Москва",
        "photo" => "m1.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Евгений",
        "city" => "Москва",
        "photo" => "m2.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Григорий",
        "city" => "Москва",
        "photo" => "m3.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Владимир",
        "city" => "Москва",
        "photo" => "m4.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Константин",
        "city" => "Москва",
        "photo" => "m5.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Дмитрий",
        "city" => "Москва",
        "photo" => "m6.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Виталий",
        "city" => "Москва",
        "photo" => "m7.png",
        "review" => "отзыв"
    )
);
$block2 = array(
    array(
        "name" => "Елена",
        "city" => "Мытищи",
        "photo" => "w1.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Галина",
        "city" => "Мытищи",
        "photo" => "w2.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Татьяна",
        "city" => "Мытищи",
        "photo" => "w3.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Тамара",
        "city" => "Мытищи",
        "photo" => "w4.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Ольга",
        "city" => "Мытищи",
        "photo" => "w5.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Валентина",
        "city" => "Мытищи",
        "photo" => "w6.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Алиса",
        "city" => "Мытищи",
        "photo" => "w7.png",
        "review" => "отзыв"
    )
);
$block3 = array(
    array(
        "name" => "Азам",
        "city" => "Балашиха",
        "photo" => "m8.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Булат",
        "city" => "Балашиха",
        "photo" => "m9.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Тамерлан",
        "city" => "Балашиха",
        "photo" => "m10.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Хасим",
        "city" => "Балашиха",
        "photo" => "m11.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Дамир",
        "city" => "Балашиха",
        "photo" => "m12.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Хасан",
        "city" => "Балашиха",
        "photo" => "m13.png",
        "review" => "отзыв"
    ),
    array(
        "name" => "Халим",
        "city" => "Балашиха",
        "photo" => "m14.png",
        "review" => "отзыв"
    )
);

// assigning values to variables for output in blocks
$id = rand(0,6);
$name1 = $block1[$id]['name'];
$name2 = $block2[$id]['name'];
$name3 = $block3[$id]['name'];
$city1 = $block1[$id]['city'];
$city2 = $block2[$id]['city'];
$city3 = $block3[$id]['city'];
$image1 = $block1[$id]['photo'];
$image2 = $block2[$id]['photo'];
$image3 = $block3[$id]['photo'];
$review1 = $block1[$id]['review'];
$review2 = $block2[$id]['review'];
$review3 = $block3[$id]['review'];

?>
