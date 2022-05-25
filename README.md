# my first php project (php-p1)

<samp>
Apache Server  = localhost
Project Folder = document_root/projects/p1

* The git "README.md" file is directly read into in the site page "description" div.
* HTML tags are sanitized before display in site page:

   <h1>test</h1>

* It is displayed between <pre> tags on the site page, so space/line formatting will be maintained:

                    Hello    Coders!


* Page will automaticall pick any php page inside "inc" folder, and display it as an "item" in the menu.
* Menu onclick will show relevant page in the "contents" div.
* Contents div background color (only lighter colors) is randomly generated on refresh.
* "Home" page refreshes every few seconds for the time display.
* "Inc_folder" page displays the directory of "inc", and onclick will display sanitized contents of page as text.


</samp>