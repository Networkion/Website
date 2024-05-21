## How to build 

- First you need to clone the last branch up to date for the website (``site-no-docker-reparer``) 
- then you'll execute the following command to migrate all tables and create the database : ``php artisan migrate``
- !!!MAKE SURE YOU HAVE A PROPER .ENV IN YOUR PROJECT AND THAT HE IS CORRECTLY INSTALLED!!!


## How to start

- To start the project go in the ``cmb_bzh_nodocker`` file and run ``php artisan serve``to lunch the developpement server

- if you encounter issues with this step, verify your .env , delete your database and go back to the ``How to build `` section

## Few Parameters 

- To help you navigate the application, you have multiple folders, the main ones that we used are located in :            -``app\Http\database\migrations`` for the tables
             -``app\Http\Controllers`` for the controllers
             -``app\Http\public\ressources\views`` for the front-end
             -``app\Http\public\ressources\css`` for the front-end styling
             -``app\Http\public\ressources\routes`` for the routing between back/front

             

## Fonctionnalities 

-  home page
-  login page
-  contact page 
-  account page
-  account creation
