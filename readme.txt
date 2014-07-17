=== Plugin Name ===
Contributors: tpflanz, Fastmover 
Donate link: http://example.com/
Tags: plugin, tags, recent, popular, shortcode
Requires at least: 3.9
Tested up to: 3.9.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display the recent popular tags used by authors on your website. Valuable for website with current events.

== Description ==

Recent Popular Tags WordPress plugin allow the administrator to display the most popular recently used tags by post authors. 

This plugin is very valuable for current events websites because it gives admins the ability to set the number of tags to display and how many days to go back... No more popular tags displaying from two years ago!

**Default Usage**

Recent Popular Tags will be displayed beneath each blog post.

**Shortcode**

Use shortcode *[recent-popular-tags]* to display Recent Popular Tags anywhere in blog posts, pages, custom post types or in a text widget

**Template Tag**

Use `<?php if ( function_exists('rpt_display_content') ) { echo do_shortcode('[recent-popular-posts]')} ?>` to display Recent Popular Tags in your template files

**Widget**

Use *[recent-popular-tags]* in a "Text" widget to display Recent Popular Tags in a sidebar

== Installation ==

1. Go to Dashboard >> Plugins >> Add New >> Search
2. Search for "Recent Popular Tags," click "Install Now," then "Activate Plugin"
3a. Go to "Recent Popular Tags" settings and enter heading, number of days and number of tags. The plugin will display below each blog post
3b. Use shortcode `[recent-popular-posts]` to display "Recent Popular Posts" in a blog post, page or a text widget
3c. Use `<?php if ( function_exists('rpt_display_content') ) { echo do_shortcode('[recent-popular-posts]')} ?>` to display "Recent Popular Tags" in your template files

== Frequently Asked Questions ==

= How can I disable Recent Popular Tags from displaying below every blog post =

This feature is coming soon. Until then, you can add `.type-post .recent-popular-tags:last-of-type{display:none}` to your theme's style.css to crudely remove it.

== Screenshots ==

== Changelog ==