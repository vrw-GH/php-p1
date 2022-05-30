# my first php project (p1-basic stuff)

Apache Server = localhost
<br>Project Folder = document_root/projects/p1

- The git "README.md" file is directly read into in the site page's "description" <div..>
- HTML tags are sanitized before display in site page:
   <h1>test</h1>

- It is displayed between <pre..> tags on the site page, so space/line formatting will be maintained:

                    Hello    Coders!

- Page will automaticall pick any php page inside "inc" folder, and display it as an "item" in the menu.
- Any php file prepended with "\_" becomes first item in menu.
- Menu onclick will show relevant page in the "contents" div.
- Contents div background color (only lighter colors) is randomly generated on refresh.
- "Home" page refreshes every few seconds for the time display.
- "Inc_folder" page displays the directory of "inc", and onclick will display sanitized contents of page as text.

Deployed to: https://p1-basic-stuff.herokuapp.com/
GitHub: https://vrw-gh.github.io/php-p1/
