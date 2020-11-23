# CFLMS-Oxales-CodeReview10

Second Backend Project
# Big Library


Task: 
As a Full Stack Web Developer you got your first full stack project, the Big Library. The Big Library needs a web application to organize and present their collection of Medias (books, CDs, DVDs). They want to create a Big List of all media available in their library and make it available over the web.

You need to track in your database:

Media that have at least title, image (HTTP link to an image), author, ISBN code, short_description, publish_date, publisher and type (book, CD, DVD). Additionally, you can also track the status (“available” or “reserved”; required for Bonus Points)

Authors that have at least name, surname and media should be tracked

Publisher of media (name, address, and size of the publisher (“big”, “medium”, “small”))


For this CodeReview, the following criteria will be graded:

- Database Design (see the “Overall / Hints” section below). Create the relational model that connects the tables in a meaningful way.

- Add test data (at least 10 entries with different types and publishers; feel free to reuse data from previous CodeReviews)

- Big List of Media: Data retrieving over MySQLi and listing of Media data into the front-end.

- User-Friendly GUI (just for Full Stack Students): Just as we previously used JavaScript to create HTML on-the-fly, you can create HTML pages with a nice markup using the Bootstrap framework or just HTML/CSS/JavaScript.

- Insert form for Media: Create an inserting form for Media. A user should be able to insert data into the database over the front-end form.

- Update form for Media: Create a form for updating Media.

- Delete Media: User should be able to delete Media from the database by clicking on the Delete button.

Bonus Points:

- After clicking on the button "show media", displayed once per every Media in the Big List, all details regarding that specific Media (title, author, ISBN, short_description, and status (available or reserved) will be displayed in a new web page. (Hint: since book details are not considered sensitive data, try to use GET to pass the necessary “non-secure” information to “single book” page).

- Create a list of Publishers. When you click on a Publisher name, display the list of Media that “belong” to this Publisher.


Overall / Hints:

Start small, make sure that you first satisfy the basic CodeReview requirements.

You do not need to go too far by implementing too many tables and complex relationships between tables to describe the entities. However, if you feel confident enough, show us also your DB design skills, and make a system that can be easily expanded (for instance) to allow search with SQL regarding specific Author, or Genre (“Novel”, “Fiction”, “Biography”, “SF”, “Horror, “Children” etc. ). If you lack inspiration for the test data, go to Amazon, or your previous CodeReviews.

