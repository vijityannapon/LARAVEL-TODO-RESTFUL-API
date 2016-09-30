# RESTful API - To do list

This is RESTful API for To do list.
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

| Path        		| Verb 		| Description  					|
| ----------------- | --------- | -----------------------------	|
| /api     			| GET 		| List all task of to do list	|
| /api/{id}     	| GET		| View a single task 			|
| /api/create   	| POST		| Add a new task 				|
| /api/{id} 		| PUT/PATCH | Update task title/content 	|
| /api/{id}/status 	| PUT/PATCH | Update task status 			|
| /api/{id} 		| DELETE  	| Delete task 					|
