# develop
Login project using PHP 5.6 | 7 with Composer | MySQL

Feature:
1. Create and register an User.
2. Login with that user.
3. Get acces to all registered users.
4. Edit any user.
5. Delete any user.

Rules:
1. Anyone can sing up.
2. You can use the search bar to search by User name or Email.
3. If the user are not logged in, he can acces to users list.
4. Only logged users can search and see the results.
5. If you are logged in, you can't access to the login form or register form.

Data:
The data used to register the user is the following:
1. Name - required - 3 chars min.
2. Email - required - unique - with email regex.
3. Country - required - list provided.
4. Password - required - any char valid - min lengh 6 chars - at least 1 digit.

NOTE
In this project I challenged myself to make a OOPS code using PHP 5.6 | 7 without a framework. Only using composer and packages provided by https://packagist.org/ and some coding standards like SOLID and PSR-4...  
