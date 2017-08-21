<?php

if ($isHidden) return;

$thename = $loguser["name"];
if($loguser["displayname"])
	$thename = $loguser["displayname"];
	
$fpage = DiscordForumPrefix($forum);
$link = getServerDomainNoSlash().actionLink("thread", $tid, "", $thread['title']);

ircReport("New thread by"
	.ircUserColor($thename, $loguser['sex'], 0)
	.": "
	.$thread["title"]
	." (".$fpage.$forum["title"].")"
	." -- "
	.$link
	);
