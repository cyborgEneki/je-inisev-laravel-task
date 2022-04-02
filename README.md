## About This App

This is a simple subscription API built using Laravel 8.

## Checklist 

MUST:-
 - [X] Use PHP 7.* (i.e. use Laravel 8 as Laravel 9 requires PHP 8.0)
 - [X] Write migrations for the required tables.
 - [X] Endpoint to create a "post" for a "particular website".
 - [X] Endpoint to make a user subscribe to a "particular website" with all the tiny validations included in it.
 - [X] Use of command to send email to the subscribers.
 - [X] Use of queues to schedule sending in background.
 - [X] No duplicate stories should get sent to subscribers. <div>*The unicity of posts is determined by their unique names. Emails are only sent as posts are created. Thus duplicate stories are never sent to subscribers.*</div>
 - [X] Deploy the code on a public github repository.

OPTIONAL:-
- [X] Seeded data of the websites.
- [X] Open API documentation (or) Postman collection demonstrating available APIs & their usage. <div>[Postman Collection](https://go.postman.co/workspace/My-Workspace~f4d09700-4e55-4feb-8e42-645150f240ad/collection/5413672-b2a1cf7a-7bd5-41e1-9705-0ec31ea7e6c6?action=share&creator=5413672)<div>
- [X] Use of contracts & services.
- [ ] Use of caching wherever applicable.
- [X] Use of events/listeners.

## Note
* Be sure to run php artisan db:seed to get the initial website data.
