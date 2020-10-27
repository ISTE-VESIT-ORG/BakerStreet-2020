<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/othneildrew/Best-README-Template">
  </a>

  <h2 align="center">221B BakerStreet</h2>

  <p align="center">
    Website using PHP with MongoDB Database and deployment on Heroku</a>
  </p>
</p>



<!-- TABLE OF CONTENTS -->
<p align="center">
  <img width="640" height="331" src="https://i.ibb.co/h7cgkdF/riddlezz-1.png">
</p>


## Table of Contents

* [About the Project](#about-the-project)
  * [Built With](#built-with)
* [Getting Started](#getting-started)
  * [Prerequisites](#prerequisites)
  * [Installation](#installation)
* [Contributors](#contributors)
* [Contact](#contact)


<!-- ABOUT THE PROJECT -->
## About The Project


There are many great PHP websites available on GitHub, however, there are very few which explore new, fast and latest cloud databases like MongoDB Atlas. This is a quiz based website which is a result of event organised by ISTE-VESIT's quarantine event - 221B BakerStreet, where we tried our best to try something different and use all basic functionalities of PHP.

What's Different?
* Use of NoSQL database instead of traditional MySQL database.
* Use of PHPMailer which can be used from anywhere and system independent.
* Use of MongoDB Atlas which handle large unstructured data in the form of JSON.
* Use of Heroku platform for hosting PHP Website instead of traditional cpanel hosting platforms.

A list of commonly used resources that I find helpful are listed in the acknowledgements.

### Built With

I am listing the main things which are needed for this project:

* [PHP](https://www.php.net/)
* [MongoDB with PHP](https://docs.mongodb.com/drivers/php)
* [MongoDB Atlas](https://www.mongodb.com/cloud/atlas)
* [PHPMailer](https://github.com/PHPMailer/PHPMailer)
* [Heroku](https://dashboard.heroku.com/)


<!-- GETTING STARTED -->
## Getting Started

First of all you will need a database of your own which should be created in MongoDB Atlas , I created out cloud-database so that handling of data can be done in JSON format and high secuirity of database.

Create a free cluster in MongoDB Atlas with your account, configure all stuff like network access, database access, and create a database with collection by following structure:

Database : ISTE_Quiz
Collection : user_info 
```
 [
    {
        '_id' : '',
        'email' : '',
        'contact_no' : '',
        'division' : '',
        'progress_count' : '',
        'points' : '',
        'incorrect_attempts_count' : '',
        'incorrect_attempts' : '',
        'hint_status' : '',
        'hints_used' : '',
        'time_start' : '',
        'time_end' : '',
        'otp' : '',
        'verification' : ''
    }
 ]

```

A JSON file which contains all the Questions along with its question_number, question and answer.

```

[
    {
        'id' : '',
        'question' : '',
        'answer' : ''
    }
]

```

### Prerequisites


* PHP
* MongoDB 

### Installation

Considering you have PHP environment set (XAMPP in my case) and composer installed.

1. Generate your MongoDB encoded URL for connecting your site to Atlas. 
2. Clone the repo
```sh
git clone https://github.com/your_username_/Project-Name.git
```
3. Run follwing command for initializing, this will create composer.json, composer.lock files.
```
composer init
```
4. Install MongoDB PHP driver
```
composer require mongodb/mongodb
```
5. Setup MongoDB PHP Driver by referring - https://docs.mongodb.com/drivers/php 
6. Add this to your php.ini file and start your Apache server:
```
extension=php_mongodb.dll
```
7. Create a file named 'secret_key.php' in Database folder and write this code:
```
<?php 

    //Database Connection
    function connectDB(){
        $client = new MongoDB\Client(
            //your encoded url of atlas in quotes
        );

        $db = $client->ISTE_Quiz;
        $collection = $db->user_info;
        
        //echo "Connected Succesfully";
        return $collection;
    }

?>
```
8. In PHPMailer/index.php do the following changes mentioned in comments. 
9. Till here your website is ready for localhost, now lets move on hosting:
    * I have used Heroku platform for hosting, just create an account and an app with PHP environment.
    * We are basically hosting our github repo on Heroku with automated deployment ie. whenever I commit changes    in my repo, it will automatically affect changes on my website. 
    * Refer: https://youtu.be/zavb4WG8x-8
10. You are ready to go!!!

## Contributors
[Aditya Kotkar](https://github.com/ADI-KOTKAR)

<!-- CONTACT -->
## Contact

* Contact Developer - [Mail](developer.adi.kotkar@gmail.com) - developer.adi.kotkar@gmail.com
* Reference Project Link: [https://github.com/ADI-KOTKAR/Riddlezz.git](https://github.com/ADI-KOTKAR/Riddlezz.git)
* Reference of Hosted site : [Riddlez](https://bit.ly/ADI-KOTKAR_Riddlez)


