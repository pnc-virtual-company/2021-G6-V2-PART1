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

<<<<<<< HEAD

### 2. Update the route backend category

| HTTP REQUEST| ROUTES              | DESCRIPTION |
| :---        | :----               |          :--- |
| GET         | /category           |The route for get all category   |
| GET         | /category/{id}      |The route to get a category by given id |
| POST        | /category           |The route to create a new category |
| PUT         | /category/{id}      |The route to update a category by given id |
| DELETE      | /category/{id}      |The route to delete a category|

### 3. Update the route frontend category

routes: [
    {path: | '/category', | component: CategoryView},
]
=======
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

>>>>>>> e68b823e52dc8bc0121969cf55c4d4df9bf354f6
