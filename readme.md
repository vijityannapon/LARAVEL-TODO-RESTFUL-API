# Restful API - To do list

This is RESTFUL API for To do list.
Returns json data.

## Features
1. List All Task of To do list.
2. View a Single task in the list by id.
3. Add a new task to the list.
4. Edit task 
5. Set status of task ( pending or done ).
6. Delete a Task.




## Installation



## Usage

| Path        		| Verb 		| Description  						|
| ----------------- |:---------:| --------------------------------:	|
| /api     			| GET 		| List all task of to do list		|
| /api/{id}     	| GET		| View a single task by id 			|
| /api/create   	| POST		| Create a new task 				|
| /api/{id} 		| PATCH  	| Update task title/content by id	|
| /api/{id}/status 	| PUT  		| Update task status by id			|
| /api/{id} 		| DELETE  	| Delete task by id 				|
