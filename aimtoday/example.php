<?php

//Recreation of INI-ish format for Headlines in News Ticker within AIM.
require_once("../autoloader.php");
require_once("../library/SimplePie.php");
$feed = new SimplePie();
$feedurl = "https://news.ycombinator.com/rss";
$feed->set_feed_url($feedurl);
$feed->init();
$feed->handle_content_type();
echo("Title=MyNews\nSubSection=Top News\n");
foreach($feed->get_items() as $item)
    {
        echo("Headline=".$item->get_title()."\nURL=".$item->get_permalink()."\n");
    }
?>
