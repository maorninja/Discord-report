<?php

if ($isHidden) return;

$thename = $loguser["name"];
if($loguser["displayname"])
	$thename = $loguser["displayname"];
	
$fpage = ircForumPrefix($forum);
$link = getServerDomainNoSlash().actionLink("post", $pid);

ircReport("Post edited by "
	.ircUserColor($thename, $loguser['sex'], 0)
	."\003$c2: \003$c1"
	.$thread["title"]
	."\003$c2 (".$fpage.$forum["title"].")"
	." -- "
	.$link
	);
	
?>
