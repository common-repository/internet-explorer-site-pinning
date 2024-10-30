<?php
/*
Plugin Name: Internet Explorer Site Pinning
Plugin URI: http://www.pedrolamas.com/projectos/wordpress-internet-explorer-site-pinning-plugin/
Description: Used to add Internet Explorer 9 Site Pinning options to your WordPress blog
Version: 0.2
Author: Pedro Lamas
Author URI: http://www.pedrolamas.com/
*/

if (!class_exists("ieSitePinning")) {
  class ieSitePinning {
    static function configure_plugin()
    {
      add_action('plugins_loaded', array('ieSitePinning', 'plugins_loaded'));
    }
    
    static function plugins_loaded()
    {
      add_action('wp_head', array('ieSitePinning', 'wp_head'), 1);
    }
    
    static function wp_head()
    {
?>
<meta name="application-name" content="<?php bloginfo('name') ?>" />
<meta name="msapplication-tooltip" content="<?php bloginfo('description') ?>" />
<meta name="msapplication-starturl" content="./" />
<meta name="msapplication-window" content="width=device-width;height=device-height" />
<meta name="msapplication-task" content="name=<?php _e('Syndicate this site using RSS 2.0') ?>;action-uri=<?php bloginfo('rss2_url') ?>;icon-uri=favicon.ico" />
<?php
    }
  }
}

if (class_exists("ieSitePinning")) {
  ieSitePinning::configure_plugin();
}
?>