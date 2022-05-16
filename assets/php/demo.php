
<?php 

$fields = "id,caption,media_url,permalink,thumbnail_url,username" ;
$token = "IGQVJWYmVCSFl3M0NDeGVnN0ZAiM1RvTTZAwT1k2Q1hxd2JtaEpYWWJSeUcySHpWN0ZAJcHdSLXNxY2VKRFg2d1JEZADFWVC0xZAVdveGpqRS1mdVI5RGNBenRoS1Y3WkVFZAXVlTkdnX0U1MFVGSFdYenA5NwZDZD";
$limit = 6;
$json_feed_url="https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
$json_feed = file_get_contents($json_feed_url);
$contents = json_decode($json_feed,true, 512, JSON_BIGINT_AS_STRING);


foreach ($contents["data"] as $post): 
   $media_url = isset($post["media_url"]) ? $post["media_url"] :"";
   $permalink = isset($post["permalink"]) ? $post["permalink"] : "";
   $username = isset($post["username"]) ? $post["username"] : "";
   $caption = isset($post["caption"]) ? $post["caption"] : "";
?>


<div class='insta_maindiv_container'>
<div>
   <div class='insta_post_container'>
     
           <img src="<?php echo $media_url ?>"/> 
           <p><?php echo $username ?></p>
           <p><?php echo $caption ?></p>
           <a href="<?php echo $permalink ?>">insta</a>
   </div>
</div>
<?php endforeach; ?>

