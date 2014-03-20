=== Gallery to Slideshow ===
Contributors: sksmatt
Donate link: http://www.mattvarone.com/donate
Tags: Slideshow, Responsive, jQuery, Gallery, Shortcode, FlexSlider, Thumbnails
Requires at least: 3.2
Tested up to: 3.3.1
Stable tag: 1.4.2

Converts WordPress built-in gallery into a Responsive jQuery SlideShow.

== Description ==

This plugin for WordPress converts the built in gallery into a simple and responsive slideshow. It uses the FlexSlider jQuery image slider, and requires zero configuration from the user.

FlexSlider:  
http://flex.madebymufffin.com/

If you need to modify the CSS style of Gallery To Slideshow, you can copy the 'gallery-to-slideshow.css' file from the plugin directory to your theme’s directory and make your modifications there. This way, you won’t lose your changes when you update the plugin. You can also specify an alternative CSS route, or prevent loading the extra CSS hooking to the 'mv_gallery_to_slideshow_enqueue_style' filter.

* jQuery Slideshow.
* Responsive.
* Ready for internationalization.
* Languages: English, Spanish.

== Installation ==

1. Unzip files.
2. Upload "mv-gallery-to-slideshow" folder into your plugins directory.
3. Activate the plugin.
4. Have fun!

== Screenshots ==

1. Slideshow in action
2. On a smaller screen.

== Change log ==

= 1.4.2 =
* Improved shortcode checking.
* Fixed issue with JS path slashes.
* Shortcode attribute to enable/disable captions="1" / captions="0"  ( 1 by default ).

= 1.4.1 =
* Fixed child themes compatibility.

= 1.4 =
* Rewrote the JS with better practices. Supports multiple galleries.
* Fixed shortcodes parameters issue.
* Dropped unnecessary constants.
* Images are now centered on the default theme.
* New filter to modify attributes. ( 'mv_gallery_to_slideshow_attr' ).
* Links on images can be removed via the shortcode or filtering the attributes.
* Using get_stylesheet_directory() and get_bloginfo( 'stylesheet_directory' ) for child themes compatibility.

= 1.3 =
* New Filter to allow themes to hook and modify the gallery's header. ( 'mv_gallery_to_slideshow_header' ).
* New Filter to allow themes to return false to include the featured image in the gallery. ( 'mv_gallery_to_slideshow_featured_id' ).
* Code improvements.

= 1.2.1 =
* Fixes minified JS problem

= 1.2 = 
* Swapped the jQuery slider library for Flex Slider.
* Added Captions Support ( Automatic by entering some text in the "Caption" field on the Image edit screen ).
* New Filter to allow themes to modify the default title string. ( 'mv_gallery_to_slideshow_title' ).
* New Filter to allow themes to return an alternative CSS route, or a false value to prevent loading the extra CSS. ( 'mv_gallery_to_slideshow_enqueue_style' ).
* New Filter to allow themes to modify the complete output string. ( 'mv_gallery_to_slideshow_shortcode' ).
* Code enhancements.

= 1.1 = 
* Fixes bug present when moving the plugin stylesheet to the theme’s directory.

= 1.0 =
* Gallery to slideshow meets the world.