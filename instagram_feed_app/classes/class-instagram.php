<?php

if ( ! class_exists( 'Class_Instagram' ) ) :

	class Class_Instagram {

		private static $instance;

		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		public function __construct() {

			$this->feed_output();

		}


		public function get_instagram_data() {
            $fields = "id,caption,media_url,permalink,thumbnail_url,username" ;
            $token = "IGQVJWYmVCSFl3M0NDeGVnN0ZAiM1RvTTZAwT1k2Q1hxd2JtaEpYWWJSeUcySHpWN0ZAJcHdSLXNxY2VKRFg2d1JEZADFWVC0xZAVdveGpqRS1mdVI5RGNBenRoS1Y3WkVFZAXVlTkdnX0U1MFVGSFdYenA5NwZDZD";
            $limit = 6;
            $json_feed_url="https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
            $json_feed = file_get_contents($json_feed_url);
            $contents = json_decode($json_feed,true, 512, JSON_BIGINT_AS_STRING);
            return $contents;
        }       
        
		public function feed_output() {

            $contents = $this->get_instagram_data();

            ?>
            <!-- heading of this app -->
            <div class = 'heading_insta_feed'>Instagram Feed</div>
            <!-- this is a parent class -->

            <?php if( is_array( $contents ) ) { ?>
                <div class = 'insta_maindiv_container'>
                    <?php

                        foreach( $contents["data"] as $post ){
                            $media_url = isset( $post[ "media_url" ] ) ? $post["media_url"] :"";
                            $permalink = isset($post["permalink"]) ? $post["permalink"] : "";
                            $username = isset($post["username"]) ? $post["username"] : "";

                            ?>
                            
                            <div class='insta_post_container'>
                                <a href='<?php echo $permalink; ?>' target='_blank' >
                                <img src='<?php echo $media_url; ?>' />  
                                <strong class="insta_username">@ <?php echo $username; ?></strong>
                                </a>                 
                            </div>

                            <?php
                        }
                    ?>
                </div>
            <?php }
           

		}
	}

	Class_Instagram::get_instance();

endif;