# Blargboard Discord reporting plugin
## Based on IRC Report by Dirbaio
===================================================
### Background
The original IRC report plugin was made to report to an irc channel via an irc bot, events that happened within your install of Blargboard or ABXD. Examples include making a new thread, replying to a post, editing a post, a new user registering, and so on. However, the setup for this is very complicated. First you have to setup a nodejs bot and have it connect to the irc network of choice. Then you had to edit its config and setup irc reporting, and hoping everything went well, it would report events.

For me, however, it didnt work for some reason. So today I have rewritten the IRC report backend and made it sent to Discord instead
