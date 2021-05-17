<?php
//strip_tags
$変数 = strip_tags(文字列, 許可するタグ);

$string = `<a href="http://google.com">Google</a>`;

$result = strip_tags($string);

echo $result;
//結果Google

//array_push
//配列の末尾に追加する
$変数=array_push(配列, 追加したい要素);
//追加したい要素は何個でも可能

$input = [30, 40, 50];
array_push($input, 60, 70);
print_r($input);
//結果 : Array ( [0] => 30 
//　　　　　　　　[1] => 40 
//　　　　　　　　[2] => 50 
//　　　　　　　　[3] => 60 
//　　　　　　　　[4] => 70) 


//array_merge
$配列 = array_merge($元の配列,$追加配列);

$data = array("TV1" => "500", "TV2" => "1000", "RADIO1" => "800");
$add_data = array("TV1" => "2000", "RADIO2" => "600");
$result = array_merge($data, $add_data);
print_r($result);

//結果
Array
(
    [TV1] => 2000
    [TV2] => 1000
    [RADIO1] => 800
    [RADIO2] => 600
)


//time
$変数 = time();

$now = time();
print $now;
//結果
1447958527

//mktime
//日付をUNIXのタイムスタンプとして取得する
$変数 = mktime(時間, 分, 秒, 月, 年,);

$timestamp = mktime(0, 0, 0, 20, 11, 2015);

print $timestamp;


//date
$変数 = date(フォーマット, UNIXタイムスタンプ);

$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;
//結果
2015年11月20日 4時09分17秒

?>
