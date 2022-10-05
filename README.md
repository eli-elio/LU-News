# LU News Project

This project is made using [Laravel](https://laravel.com/) framework.

First I made new laravel project by writing this command in terminal `composer create-project laravel/laravel LU-News`

Then I opened it on [PhpStorm](https://www.jetbrains.com/phpstorm/) Code Editor.

As I am using [Laravel/Breeze](https://github.com/laravel/breeze) package for authorization, I installed that too, using terminal
`composer require laravel/breeze:1.9.2`
`php artisan breeze:install`
`npm install`
`npm run dev`

As I need captcha for comment section, I installed Captcha Package with command `composer require mews/captcha`
And then made configuration as told in this [tutorial](https://www.tutsmake.com/laravel-8-captcha-tutorial-add-captcha-in-forms/)

As I am using [MySQL](https://www.mysql.com/) database, I also need to activate it by writing command in terminal `mysql -u user -p`
Then create new schema for this project `create schema schema_name;`
Change database configurations in .env file to your variables:

`DB_DATABASE=schema_name`

`DB_USERNAME=user`

`DB_PASSWORD=password`

Then in terminal write `php artisan migrate` to create [users table](https://github.com/laumags/LU-News/blob/master/MySQL%20Tables/users.csv) for Admin users with columns – id, username, password.

Then create [articles table](https://github.com/laumags/LU-News/blob/master/MySQL%20Tables/articles.csv) for Admin users to add articles with columns – id, user_id, title, description, date

And create [comments table](https://github.com/laumags/LU-News/blob/master/MySQL%20Tables/comments.csv) with columns – id, article_id, text, CAPTCHA

By using migrations in Laravel the [migrations table](https://github.com/laumags/LU-News/blob/master/MySQL%20Tables/migrations.csv) is generated automatically.

With this preparation and written code your page should look like this.

### Registration
![](https://github.com/laumags/LU-News/blob/master/Gifs/register.gif)

### Adding Article
![](https://github.com/laumags/LU-News/blob/master/Gifs/addarticle.gif)

### Redirecting to actual article site when clicked on title
![](https://github.com/laumags/LU-News/blob/master/Gifs/aizietuzm%C4%81jaslapu.gif)

### Comment section
![](https://github.com/laumags/LU-News/blob/master/Gifs/koment%C4%81ri.gif)

