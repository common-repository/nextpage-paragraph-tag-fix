=== Next-Page-Tag Bug Fix ===
Contributors: dhoppe
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=1220480
Tags: post, posts, page, pages, mutlipage, next-page, nextpage, p-tag, paragraph-tag, bug 
Requires at least: 2.7.0
Tested up to: 2.9
Stable tag: trunk

Fixes the invalid opening and closing paragraph tags in multipiple-page posts.

== Description ==

The Next-Page-Bug was fixed in WordPress 2.9.0!
(So you do not need this plugin in WP 2.9 and higher.)

If you try to split a post in more than one page you will usually use the &lt;!--nextpage--&gt; tag.
But there is a little bug in TinyMCE. So all these tags were converted to '&lt;p&gt;&lt;!--nextpage--&gt;&lt;/p&gt;'.
So there is a small side effect: Your page ends with '&lt;p&gt;' and the next page (behind &lt;!--nextpage--&gt;) will start with '&lt;/p&gt;'.
This has the effect that your html will become invalid. And no one likes invalid code. Chicks dig blokes with valid pages.

This plugin strips the wrong ending and starting tags. 

== Installation ==

Installation as usual.

1. Unzip and Upload this Plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. That's it. The plugin doesn't need any settings.

== Beschreibung (DE) ==

Als deutscher Muttersprachler entwickle ich alle meine Plugins und Themes in Englisch und liefere eine Sprachdatei in sauberem Deutsch mit. So kann ich die Übersetzungsqualität garantieren und behaupten dass meine Plugins und Themes vollständig übersetzbar ("fully translation ready") sind.

Wenn Sie Ihre Artikel in mehrere Seiten aufteilen wollen benutzen Sie in der Regel den &lt;!--nextpage--&gt; tag.
Der TinyMCE Editor in WordPress hat allerdings einen kleinen Bug: Alle diese Tags werden in &lt;p&gt;&lt;!--nextpage--&gt;&lt;/p&gt; konvertiert.
Das führt dazu dass die entsprechenden Artikel mit einem öffnenden &lt;p&gt;-Tag enden und mit einem schließenden &lt;/p&gt;-Tag beginnen, was den Code der Seite invalid macht und niemand mag invaliden HTML-Code.

Dieses Plugin behebt diesen Umstand.
