## Laravel api with Passport authentication

### Endpoints:

 - Register user: `api/register`, method is "POST". Has these fields: name, email, password, password_confirmation
 - Login user: `api/login`, method is "POST". Has these fields: email and password.
 - List posts: `api/post`, method is "GET". No fields.
 - Show specific post: `api/post/{id}` where last argument is id of a post(no curly braces). Method is "GET". No fields, although depending how it's structured, can have field whom contains a post id.
 - Create post: `api/post`, method "POST". Goth title and body fields.
 - Update a post: `api/post/{id}`, method is "PATCH". Got these fields: title and body.
 - Delete a post: `api/post/{id}`, method is "DELETE". Just pass an id.

 All of endpoints have this header:

 ```
    'Content-Type': 'application/json',
    "Accept": 'application/json',
    "Authorization": "Bearer " + auth.access_token

```


