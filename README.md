# UrlShortner
The working of the webapp is explained in the following steps:
1. Firstly, when a user inputs or pastes the actual long url which is to shrinked , the url is first verified and to verify the email an ajax response is used.
2. As soon as the url is validated a random short url is generated which can be further modified by the user.
3. After the short url is accepted by the user it gets stored into database with a concatenation to host name and redirection syntax.
4. Wheneven user clicks or tries to access the website from shorturl , the shorturl is looked up into the database and redirects the user to actual website associated to it , in the meantime the count for the shorturl click is also increased and updated into the database.
