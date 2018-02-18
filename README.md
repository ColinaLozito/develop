# develop
Login project using PHP 5.6 | 7 with Composer | MySQL

## Feature:
1. Create and register an User.
2. Login with that user.
3. Get acces to all registered users.
4. Edit any user.
5. Delete any user.

## Rules:
1. Anyone can sing up.
2. You can use the search bar to search by User name or Email.
3. If the user are not logged in, he can acces to users list.
4. Only logged users can search and see the results.
5. If you are logged in, you can't access to the login form or register form.

## Data:
The data used to register the user is the following:
1. Name - required - 3 chars min.
2. Email - required - unique - with email regex.
3. Country - required - list provided.
4. Password - required - any char valid - min lengh 6 chars - at least 1 digit.

## Instructions:
To make this´project work there is 2 options.

**Required:**
- Have composer installed
- Have any platform server (XAMPP or WAMP).
- Put the project folder under the Localhost route.

**Pre-required**
- Before to install the aplication you need to open the *config.php* and set up your DATABASE values. 


### Option 1 (Manual).
- In the folder root run the next commdan to install all dependencies:
	> composer install
- Then run the nex command to create the autoload dependencies:
	> composer dump-autoload
- Then get in to the _/migrations_ folder and run the next command to create the database and create the table:
	> php migration.php
- Open your localhost/project-folder-name url.

And now the project is redy to go.

### Option 2 (Automatic).
- In the folder root execute the _install.bat_ file.
And It's DONE!!.
**NOTE:** to make this method work, its necesary to leave the original name folder. 


## NOTE:
In this project I challenged myself to make a OOPS code using PHP 5.6 | 7 without a framework. Only using composer and packages provided by https://packagist.org/ and some coding standards like SOLID and PSR-4...

