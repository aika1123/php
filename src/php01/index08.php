<?php
$people = array(
    'person1' => 'Taro(25歳men)',
    'person2' =>'Jiro(20歳men)',
    'person3' => 'Hanako(16歳womaen)'
);

foreach($people as $person => $name){
    echo  $name . '<br />';
}