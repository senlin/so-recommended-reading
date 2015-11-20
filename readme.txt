=== SO Recommended Reading ===
Contributors: senlin
Donate link: http://so-wp.com/donations
Tags: recommended reading
Requires at least: 4.0
Tested up to: 4.4
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Lets you add links to external articles that you want to recommend to your readers and are placed at the bottom of your Post.

== Description ==

The SO Recommended Reading plugin is an Extension for the fantastic [Meta Box plugin](https://github.com/rilwis/meta-box) by [Rilwis](https://github.com/rilwis/). The purpose of the plugin is to let the user add recommendations to external content. 

With the plugin installed you will find a Recommended Reading box underneath the Post Editor. On the frontend the Recommended Articles are shown in their own class with an unordered list, right after `the_content()`. The class will use the styling of your theme and you can style it further to your own liking. 

= Background =

During the [Beijing WordPress Meetup](http://www.meetup.com/wordpressbj/events/154110142/) of January 2014 a member asked me to recommend a plugin that would let him add links to articles he wants to recommend to the readers of his blog. He would like to give his readers such a Recommended Reading list on a daily basis.

Because I couldn't come up with such a plugin from the top of my head and because I am planning on releasing a series of extensions for the Meta Box plugin, I thought it would be best to put something together myself.

The titles of the URLs you input are automatically extracted and shown on the front end. The meta box is only visible in the Edit Post screen

Since v1.2.0 (2014.07.29) the plugin has a small settings page where you can change the title of "Recommended Reading" into something that fits better with your site. I have also included the wpml-config.xml file, so if you run a multilingual website with WPML, you can translate this string via the String Translations page of WPML.

I have decided to only support this plugin through [Github](https://github.com/senlin/so-recommended-reading/issues). Therefore, if you have any questions, need help and/or want to make a feature request, please open an issue over at Github. You can also browse through open and closed issues to find what you are looking for and perhaps even help others.

**PLEASE DO NOT POST YOUR ISSUES VIA THE WORDPRESS FORUMS**

Thanks for your understanding and cooperation.

== Installation ==

Go to **Plugins > Add New** in your WordPress Dashboard, do a search for "SO Recommended Reading" and install it.

 &hellip; OR &hellip;

 1. Download zip file.

 2. Upload the zip file via the Plugins > Add New > Upload page &hellip; OR &hellip; unpack and upload with your favourite FTP client to the /plugins/ folder.

 3. Activate the plugin on the Plugins page.
 
 4. If you have not yet installed the Meta Box plugin (where this plugin depends on to function) you will see an error message with a link to a new install page called "Required Plugin". Go there and follow the instructions.

Done!


== Frequently Asked Questions ==

= Why is the plugin showing an error message after activation? =

This plugin is an Extension for the [Meta Box plugin](http://www.deluxeblogtips.com/meta-box/). If you don't have that installed, this Extension is useless. If you click on the link that shows with the error message you will go to a new page "Required Plugin" to install the Meta Box plugin.

= I don't like the output on my Single Post, can I change anything? =

Yes, you can. The output comes in its own class (`so-recommended-reading`) and in it you will find an `h4` for the title and an unordered list which has a class of `recommended-articles`. In your theme's `style.css` you can add any styling as you please.

= I have an issue with this plugin, where can I get support? =

Please open an issue here on [Github](https://github.com/senlin/so-recommended-reading/issues)

== Screenshots ==
1. SO Recommended Reading meta box: type the URL of the article you want to link to.
2. SO Recommended Reading output: you can style it to your liking.

== Changelog ==

= 1.4 (2015.11.20) =

* tested up to WP 4.4
* removed rollback code (related to the revert to semantic versioning in v1.3.1)
* removed line breaks from output

= 1.3.3 (2015.08.12) =

* TWEAK: header settings page; only showed half logo after 1.3.2 update 

= 1.3.2 (2015.08.05) =

* changed header settings page to h1 (https://make.wordpress.org/plugins/2015/08/03/4-3-change-to-plugin-dashboard-pages/)
* show 4.3 compatibility

= 1.3.1 (2015.06.19) =

* revert to [semantic versioning](http://semver.org/)
* modify metabox registration replace deprecated `pages` with `post_types`

= 1.3.0 (2015.06.18) =

* added new MetaBox feature of sort_clone 

= 1.2.4 (2015.04.23) =

* update TGM Plugin Activation class to 2.4.1 which fixes reported [XSS vulnerability](http://wptavern.com/xss-vulnerability-what-to-do-if-you-buy-or-sell-items-on-themeforest-and-codecanyon) 

= 1.2.3 (2015.04.11) =

* fixed title setting output - thanks to [Justin](https://twitter.com/Tinpotgamer) for reporting it

= 1.2.2 (2015.04.09) =

* changed logos
* new banner image for WP.org Repo by [Nick Diamantidis](https://unsplash.com/nick_diama)

= 1.2.1 (2014.08.15) =

* fix PHP warnings

= 1.2.0 (2014.07.29) =

* add settings page to change the title output on frontend
* add wpml-config.xml file
* bump required version up to WP 3.8

= 1.1.1 (2014.03.27) =

* bug fix (reported by [Rakesh Kumar](http://www.linkedin.com/in/rakeshkumarcn))

= 1.1.0 (2014.02.09) =

* change priority from 1 to 5 to improve so_related_posts_output content filter
* add conditional is_main_query()
* unset foreach call
* security fix: escape text/url/title-strings

= 1.0.1 (2014.01.26) =

* fix function naming issue when more than one SO meta box extension has been installed

= 1.0.0 (2014.01.23) =

* first release
