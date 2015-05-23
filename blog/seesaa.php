<?php
//inctioのライブラリ呼び出し
include_once('IXR_Library.php');
$client = new IXR_Client("http://blog.seesaa.jp/rpc");
$title = $title;
$description = $content; //これが本文です。
$status = $client->query(
                      'metaWeblog.newPost',
                      '3891807', //シーサーで使うブログＩＤ
                      'iqui810@yahoo.co.jp', //ブログID
                      'inkashaft6', //パスワード
                      array('title' =>$title,
                            'description' => $description),
                      0 //  0:下書き 1:公開 2:予約投稿
                    );
if(!$status){
  die('Something went wrong - '.$client->getErrorCode().' : '.$client->getErrorMessage());
} else {
  $post_id = $client->getResponse(); //返り値は投稿ID
}
?>