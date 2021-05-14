<?php
echo 'hello php!';

// $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("apple", "orange", "lemon","banana","durian");

foreach($fruits as $fruit){
  echo "要素は" . $fruit;
  echo "\n";
}
//=> 要素はapple
//=> 要素はorange
//=> 要素はlemon
//=> 要素はbanana
//=> 要素はdurian
//=> と表示される
