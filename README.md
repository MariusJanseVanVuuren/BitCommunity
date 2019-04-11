# Project Setup
- Install Laravel on yur machine 
https://laravel.com/docs/4.2
- Installl valet  or place the folder into your Xammp htt docs
https://laravel.com/docs/5.8/valet
- Install mysql
- Run composer install or php composer.phar install
- Run php artisan key:generate
- Run php artisan migrate
- Run php artisan serve
- You can see the basic layout for the app here:

https://bitcubecommunity.herokuapp.com

 #Todo list

- [x] 1. There should be a page that allows users to register. When a user register, the following criteria should be met: 
- [x] • Email address must be unique. 
- [x] • User must supply at least their first name and last name. 
- [x] • Password must have at least 1 uppercase character, 1 lowercase character, 1 special character,1 number and must be at least 6 characters long. 
- [x] • Password must be encrypted before being saved 

- [x] 2. There should be a login page, where a user can log in using their email address and password. 
- [x] • There should be an option for the user to tell the site to remember their email address, so they don’t have to complete it every time they want to log in. 
- [x] • Once a user successfully logs in, they should be directed to the profile page. 

- [x] 3. Each page that a user sees once they have been validated should have navigation buttons with the following buttons: 
- [x] • Profile – redirects to the profile page 
- [x] • Friends – redirects to the friends page 
- [x] • Logout – Should abandon the user’s current session and redirect them to the login page 

- [x] 4. Profile page: 
- [x] • Displays the information that a user completed when they registered, except for their password. 
- [x] • Should provide an edit function, that allows the user to update the information they provided when they registered, except for password. 
- [x] • Should provide a change password function, that allows a user to change their password, after providing their current password again. 

- [x] 5. Friends page: 
- [x] • Displays all of the users that the currently logged in user has listed as friends. 
- [x] • The logged in user should be able to send friends requests to other users that have been registered. 
- [ ] • The logged in user should be able to accept/decline friends requests from other users. 
