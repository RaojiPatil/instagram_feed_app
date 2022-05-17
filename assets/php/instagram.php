<?php  

class instagram_data {
    // Properties
    public $fields;
    public $token;
    public $limit;
    public $json_feed_url;
    public $json_feed;
    public $contents;
  
    // Methods
     function fields($fields) { // add order
        $this->$fields = "id,caption,media_url,permalink,thumbnail_url,username";
      }

       function token($token) { // add order
        $this->$token = "IGQVJWYmVCSFl3M0NDeGVnN0ZAiM1RvTTZAwT1k2Q1hxd2JtaEpYWWJSeUcySHpWN0ZAJcHdSLXNxY2VKRFg2d1JEZADFWVC0xZAVdveGpqRS1mdVI5RGNBenRoS1Y3WkVFZAXVlTkdnX0U1MFVGSFdYenA5NwZDZD";
      }

       function limit($limit) { // add order
        $this->$limit = 6;
      }

       function json_feed_url($json_feed_url, $fields, $token, $limit) { // add order
        $this->$json_feed_url = "https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
 
      }

       function json_feed($json_feed, $json_feed_url) { // add order
        $this->$json_feed = file_get_contents($json_feed_url);
      }

       function contents($contents, $json_feed_url) { // add order
       return  $this->$contents = file_get_contents($json_feed_url);

      }

    }
 
 

    foreach($contents["data"] as $post){
        $media_url = isset($post["media_url"]) ? $post["media_url"] :"";
        $permalink = isset($post["permalink"]) ? $post["permalink"] : "";
        $username = isset($post["username"]) ? $post["username"] : "";
        $caption = isset($post["caption"]) ? $post["caption"] : "";
        
        echo "<div class='insta_post_container'>
        
            <a href='{$permalink}' >
            <img  src='{$media_url}' />  </a>
            <strong>@{$username}</strong> {$caption}
          
           </div>";
        }
  
   
   
?>
