
## You will need:

 PHP - 8.1

 Composer - 2.6

 Laravel - 10.2

 Xampp - 8.2.4

 Visual Studio 2019

 Postman app

## How to Install 

Make sure that you have Apache and MySQL modules running from the Xampp control pannel. 
With the Xampp control pannel open, click on Config next to Apache and select php.ini. Remove the smicolon (;) from the line ;extention=zip.

1. Download the code from <b>laravel-api</b> project, and open it with Visual Studio.
2. In Visual Studio, open a new terminal and run the command <b>composer update</b>
3. Rename <b>.env.example file to .env</b>
4. Run the command <b>php artisan key:generate</b>
5. Open MySQL database and create a new database named <b>games</b>
6. Run the command <b>php artisan migrate</b> 
7. Finally, run <b>php artisan serve</b>


In a browser, type localhost:8000. You should be able to see the data base running.

## How to use the API

In a tool like Postman you can interact with the database using Post, Get and Put requests.

To register a user:

![image](https://github.com/teopal95/laravel-api/assets/80754964/cea1e9eb-331f-4181-bad6-7add140d38e9)

copy the user token.

To login:
![image](https://github.com/teopal95/laravel-api/assets/80754964/ce591e89-d501-41f5-8489-f3cdeec209ef)

You must enter user token:

![image](https://github.com/teopal95/laravel-api/assets/80754964/c8d57690-ea2d-4fc3-b729-bd27fc79bc92)

To logout :

![image](https://github.com/teopal95/laravel-api/assets/80754964/3682a736-5352-452e-8df8-fd4a6abccf4b)

To store a new game:

![image](https://github.com/teopal95/laravel-api/assets/80754964/7196e04e-0796-470f-ac63-3fbf33867cbe)

Every new game, will be sent to the Dashboard:

http://localhost:8000/

![image](https://github.com/teopal95/laravel-api/assets/80754964/7742f923-7aa2-47b6-9b20-2235284480f7)


To update the list:

![image](https://github.com/teopal95/laravel-api/assets/80754964/b7c6f724-efbc-4a46-be2f-238f05e9fb91)

And to delete you enter the number in the Id column of the game in the database:

![image](https://github.com/teopal95/laravel-api/assets/80754964/62168b61-2306-4db8-a3c4-2cd131db63ca)

## Validation:

![image](https://github.com/teopal95/laravel-api/assets/80754964/9b1a720e-e8f5-4871-83a2-14b3ed56a250)
![image](https://github.com/teopal95/laravel-api/assets/80754964/5a9f0eab-6ab0-442a-8710-6975d96e2d89)

## Eqoquent ORM:
The databases were created using Laravel's Eloquent ORM
![image](https://github.com/teopal95/laravel-api/assets/80754964/69fb8444-8c16-419b-b9fd-fd8a48453d2b)















