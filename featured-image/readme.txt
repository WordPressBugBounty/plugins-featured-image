=== Featured Image ===
Contributors: mervinpraison
Donate Link: https://mer.vin
Tags: featured-image, widget, shortcode, image, seo
Requires at least: 3.0
Tested up to: 6.8
Stable tag: 2.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add featured image to any part of the website, on each individual post/page. Very Easy to Implement. Shortcode and widget available. 

== Description ==

Add featured image to any part of the website, on each individual post/page. Very Easy to Implement. Provides you with a featured image shortcode [ featured-img ] , code and Featured Image widget.

Paste the Code or the Shortcode on any part of the website.


* Very Easy to implement.
* Simple Shortcode Available
* Easy code Implementation inside loop and outside loop.
* Widge Avaliable
* Featured Image Caption

<a href="https://mer.vin/wordpress-featured-image">Wordpress Featured Image</a> Documentation By <a href="https://mer.vin/">Mervin</a> Praison
<a href="https://seomanageruk.com" >SEO Manager</a>

== Installation ==

= Step 1 =

1. Download the zip file
2. Extract the contents
3. Upload the folder `featured-image` to your WP plugin folder `/wp-content/plugins/` directory
4. Go to Plugins > Plugins, and activate the plugin


= Step 2 =

* Use this shortcode '[featured-img]' on your page/post content.
* Use this shortcode '[featured-img-caption]' on your page/post content for caption
* Use this Code on your template inside loop: <?php if ( function_exists('get_featured_img') ) get_featured_img(); ?>


== ChangeLog ==

= version 2.2 =

* Security: Fixed Stored Cross-Site Scripting (XSS) vulnerability in image alt text and URLs (CVE-2025-12019)
* Security: Added proper output escaping using esc_url() and esc_attr()
* Security: Added wp_kses_post() sanitization for caption output
* Fixed: Added missing global $post declaration in caption function
* Fixed: Improved error handling in caption function
* Improved: Code formatting and WordPress coding standards compliance

= version 2.1 =

* global $post fix

= Version 2.0 =

* Added Featured Image Caption
* Added Alt Text for images
* Fixed Bugs

= Version 1.0 =

* First release.

== Frequently Asked Questions ==

= What is its Shortcode? =
[featured-img]


== Screenshots ==
1. Featured Image area

== Upgrade Notice ==

= 2.2 =

CRITICAL SECURITY UPDATE: Fixes XSS vulnerability (CVE-2025-12019). Please update immediately.

= 2.1 = 

Minor global $post fix

= 1.0 =
Created the shortcode, widget and the php code


== Version history ==

= version 2.2 =

* Security: Fixed Stored Cross-Site Scripting (XSS) vulnerability (CVE-2025-12019)
* Fixed: Added missing global $post in caption function
* Improved: Enhanced security with proper output escaping

= version 2.1 =

* global $post fix

= Version 2.0 =

* Added Featured Image Caption
* Added Alt Text for images
* Fixed Bugs

= Version 1.0 =

* Initial release version.

== Changelog ==

= 2.2 =

* Security: Fixed Stored Cross-Site Scripting (XSS) vulnerability in image metadata (CVE-2025-12019)
* Security: Added esc_url() for image URLs
* Security: Added esc_attr() for alt text attributes
* Security: Added wp_kses_post() for caption sanitization
* Fixed: Missing global $post declaration in getting_featured_img_caption()
* Fixed: Improved error handling to prevent PHP warnings
* Improved: Code refactored to use sprintf() for better readability
* Improved: WordPress coding standards compliance

= 2.1 = 

* global $post fix

= 2.0 =

* Added Featured Image Caption
* Fixed Bugs

= 1.0 =

* Shortcode was created
* Code inside loop of the template
* Widget was created