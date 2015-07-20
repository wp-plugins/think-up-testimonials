=== Plugin Name ===
Contributors: cipes
Donate link: n/a
Tags: testimonials, rotator, responsive, easy, text widget,
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: 1.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple to use responsive testimonials rotator that uses WP's native text widgets and a sidebar.

== Description ==
Think Up Testimonials rotator uses WP's native text widgets and a plugin created sidebar. Put your testimonials into individual
text widgets with the following markup.

<code><h3>Your nice quote from someone saying how great your or business are.</h3><h2>~ Andy Johnson</h2></code>

Place the text widget into the sidebar called 'Think Up Testimonials'. To output the testimonial rotator on the front end, insert
the function `thinkup_testimonials()`` into your theme template files where you want the rotator to appear.


== Installation ==

1. Upload the `thinkup-testimonials` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to the widgets page and place a normal text widget in the 'Think Up Testimonials' sidebar and add a testimonial using this mark up <code><h3>Testimonial text here</h3><h2>~ Author</h2></code>
4. Repeat step 3 as needed.
3. Place `thinkup_testimonials();` in your templates to output the rotator

== Frequently Asked Questions ==

= How can you change the size of the testimonial or author text? =

Simply use your style.css of your theme to overwrite the plugin styles. Use the CSS selector #thinkup-testimonials h3 {...}
for the testimonial text and #thinkup-testimonials h2 {...} for the author text.

= How can you change the delay between testimonials? =

You are able to set the delay time between testimonials using the callback function.  Place the delay time (in milliseconds) with the brackets of the
the callback function. ie: thinkup_testimonials(9000); would set the time delay to 9 seconds between testimonials.

== Screenshots ==

1. A standard implementation of the Think Up Testimonials plugin with 3 testimonials.  Font styles are created by the theme.
2. The back end look at the text widgets, markup used and the Testimonials sidebar.

== Changelog ==

= 1.1 =
* Added rotator time delay setting thinkup-testimonials() callback function

= 1.0 =
* First version released to the wild
