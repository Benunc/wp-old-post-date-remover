=== Plugin Name ===
Contributors: ben.meredith@gmail.com
Donate link: http://benlikes.us/donate
Tags: date remover, post, old post, evergreen, plugin, meta, posts, single, CSS, wp_enqueue_style, translate-me, español,
Requires at least: 3.0.1
Author: Ben Meredith
Author URI: http://benandjacq.com
Plugin URI: http://benandjacq.com/wordpress-plugin-wp-old-post-date-remover/
Tested up to: 4.6
Stable tag: 3.0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Removes the date stamp from older posts (you choose how old), while leaving the date stamp on newer posts. Ideal for blogs with evergreen content.


== Description ==

WP Old Post Date Remover removes the distractingly old date from otherwise perfectly good evergreen content on your WordPress blog. 

This plugin does not deal with the date on SERPs or archive pages. Single posts only.

You spent the time creating great content, and now readers and potential customers are getting sidetracked by the fact that it's 13 months old.

Install the WP Old Post Date Remover plugin, activate it, and pick the number of days you'd like to show the dates on your posts. 

NOTE: if your theme does not place the date within its own span class or div class, (or does that annoying thing where they put the word "on" outside of the date's span or div) this plugin will not work, out of the box. But with a few extra lines of code, we can get you working in no time. Message me in the forums.

This plugin requires special setup for use alongside some caching setups. I'm happy to help get that set up for you. Message me by starting a thread in the forums.
  
Please rate the plugin, and don't be afraid of the donate button! I am active in the support forums if you need assistance. Thanks for checking us out!

== Installation ==

1. Download and unzip wp-old-post-date-remover.zip, producing a `wp-old-post-date-remover` folder.

1. Upload the `wp-old-post-date-remover`folder to the `/wp-content/plugins/` directory of your web server.
1. Activate the plugin through the `Plugins` menu in your WordPress dashboard.
1. Navigate to the WP Old Post Date Remover settings page at `/wp-admin/options-general.php?page=wp_old_post_date_remover` and select the length (in days) of time you'd like to show the date on new posts.
1. Done!

== Frequently Asked Questions ==

= Can I hide the date on the blog home page, or archive pages? =
The short answer is no. For a longer explanation, see [this response](https://wordpress.org/support/topic/i-love-the-simplicity-of-this-plugin?replies=2#post-7489264) to a kind review asking for that functionality.

= What do I do if I install the plugin and it's not working? =

I am active in patching the plugin to work for as many themes as possible. Please check out [the plugin site](http://benandjacq.com/wordpress-plugin-wp-old-post-date-remover/ "WP Old Post Date Remover home") for some troubleshooting, and contact me on the support forums (where I will actively answer).

= Can I customize the length of time the date shows? =

Yes! as of version 2.0 you can now customize the length of time (in days) in the WP Old Post Date Remover settings page.

= Can I do other cool things to older posts using this plugin? =

Yes, you can make any css style changes to older posts that you would like. Modify the OPDRstyle.css file with anything you'd like to show up on those older posts. Keep in mind, though, that any updates to the plugin will overwrite your changes.

= Does this plugin affect Google ranking? =

No, because it simply hides the date from readers using CSS, it has no effect whatsoever on Google or other Search engines. Loading the extra TINY stylesheet on older posts should not affect page load time.

== Screenshots ==

1. Before WP Old Post Date Remover
1. After WP Old Post Date Remover
1. Settings page (version 2.0)

== Changelog ==

= 3.0.6 = 
* added `post-meta-date` for compatibility with the Rowling Theme
* added `dd.create` for compatibility with the RT Responsive theme on Themeforest.
* changed some back-end links to go to my new and awesome donate page at http://benlikes.us/donate

= 3.0.5 =
* added `.entry-meta .published` for compatibility with the evolve theme.


= 3.0.4 =
* added `.date` for compatibility with the Builder theme.

= 3.0.3 =
* added `.post_meta .calendar` for compatibility with the Aqua Theme.

= 3.0.2 =
* added `.meta time` for compatibility with Crevision theme.

= 3.0.1 =
* changed formatting for standards compatibility

= 3.0 =
* Added i18n, making the plugin able to be translated into other languages.
* added Spanish language files
* overhauled the design of the settings page

= 2.2.6 = 
* added `time,` and `p.post-meta.date-extra,` for compatibility with the Blaskan and OptimizePress themes, respectively.

= 2.2.5 = 
* added `.meta time` for compatibility with Sampression theme.

= 2.2.4 = 
* added `i.icon-calendar.mi` and `time.post_date.date.updated` for compatibility with SevenMag theme by ThemeForest.

= 2.2.3 = 
* added `.cb-date.cb-byline-element` for compatibility with Valenti theme.

= 2.2.2 =

* added `span.meta-date` for compatibility with invoda themes

= 2.2.1 =
* added `span.posted-on` for compatibility with the Twenty Fifteen theme.

= 2.2 = 
* bug fixes related to archive pages not performing correctly. Now the plugin only affects single posts (again).

= 2.1 = 
* changed inefficient handling of php date function to decrease server load.
* added additional classes to CSS. 

= 2.0.4 = 
* added `span.post_date` and `span.post_date_intro` for compatibility with some Thesis skins (Pearsonified, Social Triggers, and Classic Responsive have been tested). 

= 2.0.3 = 
* added `.entry-time` for compatibility with some Genesis child themes. 

= 2.0.2 = 
* added `span.date` for compatibility with the Twenty Thirteen theme.
* updated plugin website with troubleshooting for the Twenty Twelve theme

= 2.0.1 =
* added `span.post-date` to the classes to exclude

= 2.0 =
* added customization options, user can now select specific number of days to show date on newer posts on the newly created Settings page.
* made the plugin only affect single pages and posts, as opposed to the front page of the blog or category pages. Previous versions deleted all dates regardless of age of the post on home/front pages and category pages.
* added a direct link to the new plugin settings page from the WP Old Post Date Remover entry on yoursite.com/wp-admin/plugins.php


= 1.0.1 =

* added `post-date` to the classes to exclude in the custom CSS

= 1.0 =
* first release! Fire when ready.
