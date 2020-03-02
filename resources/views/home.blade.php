@extends('layouts.app')
@section('content')
<br>
<div class="p-1">
    <div class="row">
        @include('layouts.sidebar')
        <div class="col-md-8 col-sm-12 ">
            <h2 class="text-center text ">Home <i class="fa fa-home" aria-hidden="true"></i>
                <button class="allbtn  color btn rounded-pill float-right" style="width:px !important;position:fixed;">Post <i class="fa fa-pencil" aria-hidden="true"></i></button>
            </h2>
            <hr>

            <div class="container-fliud">
                <div class="form p-5 shadow-lg px-0 mastercard ">



                    LaravelLaravel
                    VERSION

                    Search Docs
                    Installation
                    Installation
                    Server Requirements
                    Installing Laravel
                    Configuration
                    Web Server Configuration
                    Pretty URLs

                    Installation
                    {video} Are you a visual learner? Laracasts provides a free, thorough introduction to Laravel for newcomers to the framework. It's a great place to start your journey.


                    Server Requirements
                    The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

                    However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

                    PHP >= 7.0.0
                    OpenSSL PHP Extension
                    PDO PHP Extension
                    Mbstring PHP Extension
                    Tokenizer PHP Extension
                    XML PHP Extension

                    Installing Laravel
                    Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

                    Via Laravel Installer
                    First, download the Laravel installer using Composer:

                    composer global require "laravel/installer"
                    Make sure to place composer's system-wide vendor bin directory in your $PATH so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:

                    macOS: $HOME/.composer/vendor/bin
                    GNU / Linux Distributions: $HOME/.config/composer/vendor/bin
                    Once installed, the laravel new command will create a fresh Laravel installation in the directory you specify. For instance, laravel new blog will create a directory named blog containing a fresh Laravel installation with all of Laravel's dependencies already installed:

                    laravel new blog
                    Via Composer Create-Project
                    Alternatively, you may also install Laravel by issuing the Composer create-project command in your terminal:

                    composer create-project --prefer-dist laravel/laravel blog "5.5.*"
                    Local Development Server
                    If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:

                    php artisan serve
                    Of course, more robust local development options are available via Homestead and Valet.


                    Configuration
                    Public Directory
                    After installing Laravel, you should configure your web server's document / web root to be the public directory. The index.php in this directory serves as the front controller for all HTTP requests entering your application.

                    Configuration Files
                    All of the configuration files for the Laravel framework are stored in the config directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.

                    Directory Permissions
                    After installing Laravel, you may need to configure some permissions. Directories within the storage and the bootstrap/cache directories should be writable by your web server or Laravel will not run. If you are using the Homestead virtual machine, these permissions should already be set.

                    Application Key
                    The next thing you should do after installing Laravel is set your application key to a random string. If you installed Laravel via Composer or the Laravel installer, this key has already been set for you by the php artisan key:generate command.

                    Typically, this string should be 32 characters long. The key can be set in the .env environment file. If you have not renamed the .env.example file to .env, you should do that now. If the application key is not set, your user sessions and other encrypted data will not be secure!

                    Additional Configuration
                    Laravel needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the config/app.php file and its documentation. It contains several options such as timezone and locale that you may wish to change according to your application.

                    You may also want to configure a few additional components of Laravel, such as:

                    Cache
                    Database
                    Session

                    Web Server Configuration

                    Pretty URLs
                    Apache
                    Laravel includes a public/.htaccess file that is used to provide URLs without the index.php front controller in the path. Before serving Laravel with Apache, be sure to enable the mod_rewrite module so the .htaccess file will be honored by the server.

                    If the .htaccess file that ships with Laravel does not work with your Apache installation, try this alternative:

                    Options +FollowSymLinks
                    RewriteEngine On

                    RewriteCond %{REQUEST_FILENAME} !-d
                    RewriteCond %{REQUEST_FILENAME} !-f
                    RewriteRule ^ index.php [L]
                    Nginx
                    If you are using Nginx, the following directive in your site configuration will direct all requests to the index.php front controller:

                    location / {
                        try_files $uri $uri/ /index.php?$query_string;
                    }
                    Of course, when using Homestead or Valet, pretty URLs will be automatically configured.

                    Become a Laravel Partner
                    Laravel Partners are elite shops providing top-notch Laravel development and consulting. Each of our partners can help you craft a beautiful, well-architected project.

                    Our Partners
                    Laravel
                    Highlights
                    Release Notes
                    Getting Started
                    Routing
                    Blade Templates
                    Authentication
                    Authorization
                    Artisan Console
                    Database
                    Eloquent ORM
                    Testing
                    Resources
                    Laracasts
                    Laravel News
                    Laracon
                    Laracon EU
                    Laracon AU
                    Jobs
                    Certification
                    Forums
                    Partners
                    Vehikl
                    Tighten Co.
                    Kirschbaum
                    Byte 5
                    64Robots
                    Cubet
                    DevSquad
                    Ideil
                    Cyber-Duck
                    ABOUT YOU
                    A2 Design
                    Romega Software
                    Become A Partner
                    Ecosystem
                    Vapor
                    Forge
                    Envoyer
                    Horizon
                    Lumen
                    Nova
                    Echo
                    Valet
                    Mix
                    Spark
                    Cashier
                    Homestead
                    Dusk
                    Passport
                    Scout
                    Socialite
                    Telescope
                    Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.

                    Laravel is a Trademark of Taylor Otwell.
                    Copyright © 2011-2020 Laravel LLC.

                    Twitter
                    GitHub
                    Discord
                    Laravel



                </div>
@endsection

