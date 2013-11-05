=== Author Box Plugin With Different Description ===
Contributors: sanjeevmohindra
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=VT69M3R79VBJ4&lc=US&item_name=Author%20Box%20Plugin&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: author box,contact fields,author description,post,page
Requires at least: 3.0
Tested up to: 3.5.2
Stable tag: 1.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The Plugin will add an author box to your site. It also gives a flexibility to add different description for the same author according to the post.

== Description ==

This Plugin will add an author box to your post contents. The box contains author's avatar, name, post count, site link, description, Email, Facebook, Google, Twitter, Pinterest, Youtube, Linkedin.

Features:

1. Supports custom description to your post and pages, with the custom field author_desc. Default author description is from user profile but if custom field is there it will display the author description from custom field.
2. Add Facebook, Google, Linkedin, Youtube, Pinterest and Twitter custom fields to User Profile page (URLs are nofollow).
3. Gives you an option to select the contact fields for the user profiles from admin panel.
4. Select where you want to show the author box, on the top of the page or at bottom.
5. Support for custom CSS, so you can customize your author box display. You can stop loading the Author Box CSS and create a custom tags for your author box.
6. [who has written 100 post] link to the author page with rel="author", you just need to link back to the author page on your Google Profile Page to make your authorship information to appear in search results for the content you create. Learn more: http://support.google.com/webmasters/bin/answer.py?hl=en&answer=1408986
7. Option to show social media profile as an image or text, you can select it from Admin Panel.

Check the detailed instruction at [this page.](http://forum.makewebworld.com/b2_support-requests/t3_read-this-author-box-plugin-guide/ "Author Box Plugin With Different Description")

For Support Open a ticket at [Support Forum](http://forum.makewebworld.com/b2_support-requests/ "Support Forum for Author Box Plugin With Different Description")

== Installation ==

1. Upload the full directory into your wp-content/plugins directory
2. Activate the plugin at the plugin administration page
3. Setup the plugin in the setting menu.

== Frequently Asked Questions ==

= I am not seeing any custom field after installing the plugin? =

You might not be seeing it for the first time. Go ahead and enter it manually in your custom field box. You should give a name as author_desc and enter the description of the author. Next time onwards you can just select this field from the custom field dropdown menu.

= If I decide to uninstall the plugin, will I lose my custom author description? =

Custom Author Description is saved in post meta and if you decide to uninstall the plugin because of any reason, you will not lose your custom description. If you reinstall it again, it will start fatching the custom Description for you.

== Screenshots ==

1. Author Box Layout

== Changelog ==

= 1.3.1 =
* Added an option to hide author box on specific post with a custom field "author_disp". Set it to "No" if you want to hide the Author box.
* Added a new class to social icons.
* Correct the rss feed. It was creating issues in some cases.

= 1.3 =
* Added an option to remove email icon from the Author Box.

= 1.2.1 =
* User Contact Fields not showing issue fixed.

= 1.2 =
* Fixed an issue with Cache Plugin where it can show a blank page.

= 1.0 =
* First version.

== Upgrade Notice ==

= 1.3.1 =
* Added an option to hide author box on specific post with a custom field "author_disp". Set it to "No" if you want to hide the Author box.