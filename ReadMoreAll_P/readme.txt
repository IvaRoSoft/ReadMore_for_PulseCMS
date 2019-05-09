Plugin: readmoreallp_init.php

This is a simple script that hides longer "<p>" tags.
Use as plugin in "inc / tags / readmoreallp_init.php" folder.
If embedded on a page, it shortens the text by a parameter if the parameter is specified.
The default is 200 characters.

Example:
Paste link to page
{{Readmoreallp: 150}}
The specified parameter is 150 characters.
Shortens all text on the page (also blocks) to 150 characters.
The text ends with the "Read more" link.
The link is in the set language from "more" blog translation.

No further adjustments are required.
All longer texts will be automatically shortened.

compatibility:
Plugins, readmorejq_init, and readmoreallp_init are not compatible with the <p> html tag.
The html tag <p> is controlled by readmoreallp_init.

.-.-.-.-.-

For Pulse CMS edited by IvaRo Soft Slovakia-2019.
License: MIT.