<?php

if ($isHidden) return;

$thename = $loguser["name"];
if($loguser["displayname"])
	$thename = $loguser["displayname"];
	
$fpage = DiscordForumPrefix($forum);
$link = getServerDomainNoSlash().actionLink("thread", $tid, "", $thread['title']);

DiscordReport("New thread by"
	.$thename
	.": "
	.$thread["title"]
	." (".$fpage.$forum["title"].")"
	." -- "
	.$link
	);
