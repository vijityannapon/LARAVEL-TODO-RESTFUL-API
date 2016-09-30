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


## Status Codes
| Code  | Message 				| Description																		|
| ------| --------------------- | ---------------------------------------------------------------------------------	|
| 200	| OK 					| The request was processed and returned successfully. update or delete successful.	|
| 201   | Created				| The new resource was created successfully.										|
| 204   | No task				| Problem with in task id or No row of task.										|
| 400  	| Bad request 			| Problem with the request, such as a missing, invalid or type mismatched parameter.|
| 404  	| Not Found 			| URL is wrong, or the requested resource doesn't exist. 							|
| 405  	| Method Not Allowed 	| Method Not Allowed or Using the wrong verb. 										|
