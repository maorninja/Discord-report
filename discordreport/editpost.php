<?php

if ($isHidden) return;

$thename = $loguser["name"];
if($loguser["displayname"])
	$thename = $loguser["displayname"];
	
$fpage = DiscordForumPrefix($forum);
$link = getServerDomainNoSlash().actionLink("post", $pid);

DiscordReport("Post edited by "
	.$thename
	.": "
	.$thread["title"]
	."(".$fpage.$forum["title"].")"
	." -- "
	.$link
	);
	
?>
