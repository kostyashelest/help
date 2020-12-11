<?php
// Загружаем данные из файла в строку (рабочий вариант)
$data = file_get_contents('../data/index.json');
$json = json_decode($data, true);

$id1 = $_POST['id1'];
$id2 = $_POST['id2'];

echo 'Data from form:<br>';
echo 'id1: ';
echo $id1;
echo '<br>id2: ';
echo $id2;
echo '<br>';
echo '-----------------<br>';

$listId1 = $json[$id1];
$listId2 = $json[$id2];

echo 'List with id1:';
echo '<br>';
print_r($listId1);
echo '<br>List with id2:<br>';
print_r($listId2);
echo '<br>';
echo '-----------------<br>';

$viewId1 = $listId1['view'];
$viewId2 = $listId2['view'];

echo 'Old view with id1: ';
echo $viewId1;
echo '<br>';
echo 'Old view with id2: ';
echo $viewId2;
echo '<br>';
echo '-----------------<br>';

$json[$id1]['view'] = $viewId1 + 1;
$json[$id2]['view'] = $viewId2 + 1;

echo 'New view id1: ';
echo $listId1['view'];
echo '<br>';
echo 'New view id2: ';
echo $listId2['view'];
echo '<br>';
echo '-----------------<br>';

echo $json[1]['view'];
echo '<br>';
echo '-----------------<br>';

print_r($json);

file_put_contents('../data/index.json', json_encode($json));
