<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Feed</title>
    <link rel="stylesheet" href="./style/insta_feed.css">
</head>
<body>

<?php 

 $fields = "id,caption,media_url,permalink,thumbnail_url,username" ;
 $token = "IGQVJWYmVCSFl3M0NDeGVnN0ZAiM1RvTTZAwT1k2Q1hxd2JtaEpYWWJSeUcySHpWN0ZAJcHdSLXNxY2VKRFg2d1JEZADFWVC0xZAVdveGpqRS1mdVI5RGNBenRoS1Y3WkVFZAXVlTkdnX0U1MFVGSFdYenA5NwZDZD";
 $limit = 6;
 $json_feed_url="https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
 $json_feed = file_get_contents($json_feed_url);
 $contents = json_decode($json_feed,true, 512, JSON_BIGINT_AS_STRING);


echo "<div class='heading_insta_feed'>Instagram Feed</div>";
echo "<div class='insta_maindiv_container'>
    <div>";
    foreach($contents["data"] as $post){
        $media_url = isset($post["media_url"]) ? $post["media_url"] :"";
        $permalink = isset($post["permalink"]) ? $post["permalink"] : "";
        $username = isset($post["username"]) ? $post["username"] : "";
        $caption = isset($post["caption"]) ? $post["caption"] : "";
        echo "<div class='post_container'>
        <img  src='{$media_url}' />
        <strong>@{$username}</strong> {$caption}
        <button class='btn_permalink_inst_feed'>
        <a href='{$permalink}' class='permalink_inst_feed' target='_blank'>View on Instagram</a>
        </button>
        </div>";
    }

    "</div>;
</div>";
?>
</body>
</html>