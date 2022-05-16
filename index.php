<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Feed</title>
    <link rel="stylesheet" href="./assets/css/insta_feed.css">
</head>
<body>

<?php include('./assets/php/instagram.php') ?>

<!-- heading of this app -->
<div class='heading_insta_feed'>Instagram Feed</div>
<!-- this is a parent class -->
<div class='insta_maindiv_container'>
 
<?php 
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
</div>




<!-- this is not working code -->

<!-- <div class='insta_maindiv_container'>
<div>
    <div class='insta_post_container'>
      
            <img src="<? //php echo $media_url ?>"/> 
            <p><?php // echo $username ?></p>
            <p><?php // echo $caption ?></p>
            <a href="<?php // echo $permalink ?>">insta</a>
    </div>
</div> -->


</body>
</html>







