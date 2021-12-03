## ROUTE DOCUMENTATION EXAMPLE


### 1. Book Routes
---

| HTTP REQUEST| ROUTES | DESCRIPTION |
| :---        | :----   |          :--- |
| GET         | /books       |The route for get all books   |
| GET         | /books/{id}        |The route to get a book by given id |
| POST        | /books        |  The route to create a new book |
| PUT         | /books/{id}        | The route to update a book by given id |
| DELETE      | /books/{id}        | The route to delete a book|

### 2. update route my-event beckend
---

| HTTP REQUEST| ROUTES              | DESCRIPTION |
| :---        | :----               |          :--- |
| GET         | /my-events          |The route for get all my-events   |
| GET         | /my-events/{id}     |The route to get a my-event by given id |
| POST        | /my-events          |The route to create a new my-event |
| PUT         | /my-events/{id}     | The route to update a my-event by given id |
| DELETE      | /my-events/{id}     | The route to delete a my-event|

### 3. update route my-event frontend
---
routes: [
    {path: | '/my-event', | component:MyEventView},
]

