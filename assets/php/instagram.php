
<?php 
 $fields = "id,caption,media_url,permalink,thumbnail_url,username" ;
 $token = "IGQVJWYmVCSFl3M0NDeGVnN0ZAiM1RvTTZAwT1k2Q1hxd2JtaEpYWWJSeUcySHpWN0ZAJcHdSLXNxY2VKRFg2d1JEZADFWVC0xZAVdveGpqRS1mdVI5RGNBenRoS1Y3WkVFZAXVlTkdnX0U1MFVGSFdYenA5NwZDZD";
 $limit = 6;
 $json_feed_url="https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
 $json_feed = file_get_contents($json_feed_url);
 $contents = json_decode($json_feed,true, 512, JSON_BIGINT_AS_STRING);
?>

