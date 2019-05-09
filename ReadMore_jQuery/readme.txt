Plugin: readmorejg_init.php

This is a simple jQuery script that html longer tags (div, p, article, span, and more).
Use as plugin in "inc / tags / readmorejq_init.php" folder.
If it is embedded on a page, it shortens the html tag by a parameter if the parameter is specified.
The default is 200 characters.

Initialization example:
Paste page link :{{Readmorejq_init: 150}}
The specified parameter is 150 characters.
Truncates the entire text (including blocks) to 150 characters.
The text ends with the link "read more".
This allows you to shorten the content and "back".
Links are based on a set language.

Example how to use:

	<p class="more">
	Sample text ...
	</p>
	
	<span class="more">
	Sample text ...
	</span>
	
	<article class="more">
	Sample text ...
	</article>
	
	<div class="more">
	Sample text ...
	</div>
	
	<cite class="more">
	Sample text ...
	</cite>
	
compatibility:
Plugins, readmorejq_init, and readmoreallp_init are not compatible with the <p> html tag.
The html tag <p> is controlled by readmoreallp_init.

.-.-.-.-.-

For Pulse CMS edited by IvaRo Soft Slovakia - 2019.
License: MIT.
