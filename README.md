# Wypożyczalnia filmowa

> Aplication for rental firms using points 

## Table of contents
* [General info](#general-info)
* [Screenshots](#screenshots)
* [Technologies](#technologies)
* [Setup](#setup)
* [Features](#features)
* [Status](#status)
* [Inspiration](#inspiration)

## General Information
- In this aplication working if you need rent film for a limited time and cheap price
- this is competition for popular sites for exaple netflix
- you can share a rental film with family

<!--
- Provide general information about your project here.
- What problem does it (intend to) solve?
- What is the purpose of your project?
- Why did you undertake it?
 You don't have to answer all the questions - just the ones relevant to your project. -->

## Technologies Used
- Docker
- NGINX - version 1.21.6-alpine
- PHP - version 8.1.3-fpm-alpine3.15

## Features
List the ready features here:
- Application can display a login and register pages
- Routing is working
- Available view for Mobile, Tablet and PC screens
- Login work
- Database attach
- Session work
- Recharging points
- Display films
- Display points

## Basic Routing

1. /login -> Main page (user don't acces if not log in)
2. /projects -> page with films
3. /profile -> basic information about user
4. /points -> page to add points to account
5. /movie/{id} -> page about movie information 
6. /admin -> page inform about user priviligies



## Setup
1. You have to install Docker for running this app -> [link](https://www.docker.com/get-started);
2. In the next step please open terminal in main directory of project and provide:
```
docker-compose up
```
- **If you run this at the first time program need more time and Internet connection!**


3. Please wait a moment (program need a time for initialize) and insert in your web browser **http://localhost:8080/**

* To Push on Heroku use this comment on branch *deploy-on-Heroku*:
```
git push heroku dev-ops/deploy-on-Heroku:master
```
**If you have authority for that**


4. You have to set environments in file .env in main catalog with credentials for a database with this schema:
```
SHOPTHERAPY_USERNAME=yourUserNameInDatabaseSystem
SHOPTHERAPY_PASSWORD=passwordForYourDatabase
SHOPTHERAPY_HOST=hostWhereIsYourDataBase
SHOPTHERAPY_DATABASE=databaseName
```
all name without qutoes (" or ')!!!
<!-- What are the project requirements/dependencies? Where are they listed? A requirements.txt or a Pipfile.lock file perhaps? Where is it located?

Proceed to describe how to install / setup one's local environment / get started with the project.
-->

<!-- ## Usage
How does one go about using it?
Provide various use cases and code examples here.

`write-your-code-here` -->

## Project Status
Project is: _in progress_. <!-- If you are no longer working on it, provide reasons why. -->


<!-- ## Room for Improvement
Include areas you believe need improvement / could be improved. Also add TODOs for future development.

Room for improvement:
- Improvement to be done 1
- Improvement to be done 2

To do:
- Feature to be added 1
- Feature to be added 2 -->


<!-- ## Acknowledgements
Give credit here.
- This project was inspired by...
- This project was based on [this tutorial](https://www.example.com).
- Many thanks to... -->



## Contact
Damian Kuciel <damian.kuciel@student.pk.edu.pl>
## Source
Readme file was created by [@flynerdpl](https://www.flynerd.pl/)


<!-- Optional -->
<!-- ## License -->
<!-- This project is open source and available under the [... License](). -->

<!-- You don't have to include all sections - just the one's relevant to your project -->



