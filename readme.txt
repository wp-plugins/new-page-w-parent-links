=== New Page In Section Links ===
Contributors: Theo Ephraim
Donate link: http://www.theoephraim.com/
Tags: page, pages, parent, id, section, cms, new, post-new.php
Requires at least: 2.7.0
Tested up to: 2.7.1
Stable tag: 1.1

Provides the ability to set the parent_id of a new page from within the link to the new page form

== Description ==

With this plugin you can create a link to post-new.php (the place to create a new page) that includes the desired parent_id of the new page. This allows you to create links in the front end of the website like "Add a new page to this section" or "Create a new sub-page". This is extremely useful when developing custom themes to add useful backend links on the front end of the site for users who have editing access. For using wordpress as a CMS, you really want to let the user avoid going through the clunky manage pages interface...

= Features =

* This should be a feature of wordpress
* I can't believe this isn't built into wordpress
* This has to rely on javascript because there's no suitable hook to do it another way
* Did I mention this should be built into wordpress?

= Feedback =

Doubt you'll have any, but if you do, you can go to my website (http://theoephraim.com)
I was thinking about making some functions to actually spit out the links, but since were talking about developing custom themes, you may as well just hardcode it.

== Installation ==

Very straightforward. Download, copy into plugins folder, activate.
In your theme, create a link like this: <a href="/wp-admin/post-new.php?psot_type=page&parent_id=15">Add a page to this section</a>

== Changelog ==

= 1.0 =
* Initial release.

== License ==

Copyright (C) 2010 by Theo Ephraim

You may use, redistribute and/or modify this programm under the terms of the [GNU General Public License by the Free Software Foundation](http://www.gnu.org/licenses/gpl.html).

The programm is distributed as free software without any warranty.