# film-info-laravel
This is a test assignment which covers RESTful API, DB, auth and form functionality in Laravel using vue.js to create simple web application for films. 

## 1) BACKEND

### 1.1) Implement RESTful API to manage films

```
Eeach Film have these fields:
```

* Name
* Description
* Realease Date
* Rating
* Ticket Price
* Country
* Genre
* Photo

### 1.2) All fields are required, rating is on scale from 1 to 5, 1 film can have several genres.


## 2) FRONTEND

### 2.1) Created frontend page /films/ to show all films through API. 1 film per 1 page. 

### 2.2) Added redirect from / to /films/

### 2.3) Implemented frontend page /films/film-slug-name to show specific film. URL should have film's slug.

### 2.4) Implemented frontend page /films/create with form to create new film. 

### 2.5) Added registration and authentication

### 2.6) Added possibility to post comments for each films. Fields "Name" and "Comment" are required. Only registered users can post comments


*NOTES: Created DB seeder with 3 films and 1 comment for every film*

## 3) Installation



### 3.1) Create virtual host with these general information with your own app path and url

	<VirtualHost *:80>
	    ServerAdmin root@localhost.com
	    DocumentRoot "E:\wamp\www\filminfo-app\public"
	    ServerName filminfo-app.local
	    ServerAlias www.filminfo-app.local
	    SetEnv APPLICATION_ENV "development"
	    <directory "E:\wamp\www\filminfo-app\public">
	        DirectoryIndex index.php
	        AllowOverride all
	        Order Allow,Deny
	        Allow from all
	    </directory>
	</VirtualHost>
	
### 3.2) Clone project via git repository and setup environment and config file

### 3.3) Create database

### 3.3) Rename or copy .env.local to .env and change database connection information
### 3.3) Use these command line in the root of project to setup

* composer update			- get repository dependency
* php artisan key:generate	- generate app key
* php artisan migrate		- create database table
* php artisan db:seed		- db seeding
	
## 3) How to use api

Get all films
=============
	URL : project-url/ahttp:/filminfo-app.local/api/v1/films
	Method: get
	return: all film json data

Get all films
=============
	URL : project-url/api/v1/films/{film id}
	Method: get
	return: all film json data
	-- 	Example:
			project-url/api/v1/films/2

Insert new film
===============
	URL : project-url/api/v1/films
	Method: post
	using: form-data
	Return: inserted json data
	
	--	sending data
		name:'text'
		description:'text'
		realease_at:'date format'
		rating:'integer from 1 to 5 integ'
		ticket_price:'price with 2 decimal'
		country:'string'
		photo:'type must be file'
		genre:'string seperated by comma'
	
	-- 	Example:
			project-url/api/v1/films
		
			name:Inception
			description:A thief, who steals corporate secrets
			realease_at:2017-02-05
			rating:5
			ticket_price:55
			country:USA
			photo: file upload
			genre:Music,Drama,Action

Edit film by id
===============
	URL : project-url/api/v1/films/{film id}
	Method: put
	using: x-www-form-urlencoded
	Return: updated json data
	
	-- 	Example:
			project-url/api/v1/films/1
		
			sendign data just like insert film
			
Delete film by id
===============
	URL : project-url/api/v1/films/{film id}
	Method: delete
	Return: true|false
	
	-- 	Example:
			project-url/api/v1/films/2

