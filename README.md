## Requirements

- **PHP Version** : ^7.1

## Installation

Follow the below steps to setup the project to your local machine.

- **clone the project using below command :**
	
    ``git clone https://github.com/development0261/software-house.git``

**Note :** If you have installed xampp then clone the project into xampp/htdocs folder. If you have installed wamp then clone the project into wamp/www folder.

- **Open the project folder into command line and install the composer using below command :**
	
    ``composer install``

- **Create the database with the name software_house and change the configurations for the database username and password according to your server in the .env file.**

- **Run the below command in the command line to import the database :**
	
    ``php artisan migrate``

- **Hit the below URL to run the project :**
	
    ``http://localhost/software-house/``

**Note :** In case if you see the error when you run the very first time, then run the below command that will remove the cache :
	
    ``php artisan optimize``
