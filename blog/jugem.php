<?php
//inctioのライブラリ呼び出し
include_once('IXR_Library.php');
$client = new IXR_Client("http://xxmmll.jugem.jp/admin/xmlrpc.php");
$title = $title;
$description = $content; //これが本文です。
$status = $client->query(
                      'metaWeblog.newPost',
                      'MyBlog', //無視されるので、何でもよい。'' でもよい
                      'xxmmll', //ブログID
                      'inkashaft', //パスワード
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
</body>
</html>