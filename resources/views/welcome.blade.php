<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .grid-container{
                display: grid;
                grid-template-columns: auto auto auto auto;
                grid-gap: 10px;
                padding: 10px;
                justify-content: space-evenly;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel api with Passport
                </div>

                <div class="grid-container">
                    <button class="btn btn-outline-primary" onclick="login(event)">login</button>
                    <button class="btn btn-outline-secondary" onclick="register(event)">register</button>
                    <button class="btn btn-outline-success" onclick="createPost(event)">createPost</button>
                    <button class="btn btn-outline-info" onclick="getPost(event)">getPost</button>
                    <button class="btn btn-outline-warning" onclick="updatePost(event)">updatePost</button>
                    <button class="btn btn-outline-danger" onclick="deletePost(event)">deletePost</button>
                    <button class="btn btn-outline-dark" onclick="getAllPosts(event)">getAllPosts</button>
                </div>

            </div>
        </div>

        <script>

            let token = null;
    
            function register(event){
                event.preventDefault();
    
                let url = "http://apitest1.test/api/register";
    
                let data = {
                    name: "šaban",
                    email: "saban@gmail.com",
                    password: "tttttttt",
                    password_confirmation: "tttttttt",
                };
    
                $.ajax({
                    url: url,
                    type: "POST",
                    data: data,
                    dataType: "JSON",
            
                    success: (response) => { 
    
                        console.log("success");
                        console.log(response);  
                        
                    },
                    error: (response) => {
    
                        console.log("error");
                        console.log(response);
                        
                    }
    
                });
            
            }
    
            function login(event){
                event.preventDefault();
    
                let url = "http://apitest1.test/api/login";
    
                let data = {
                    email: "veljkos82@gmail.com",
                    password: "tttttttt"
                };
    
                $.ajax({
                    url: url,
                    type: "POST",
                    data: data,
                    dataType: "JSON",
            
                    success: (response) => { 
    
                        console.log("success");
                        console.log(response);  
                        token = response.access_token;
                    },
                    error: (response) => {
    
                        console.log("error");
                        console.log(response);
                        
                    }
    
                });
            
            }
        
            function createPost(event){
                
                event.preventDefault();
    
                let url = "http://apitest1.test/api/post";
    
                let data = {
                    title: "ajaxPost1",
                    body: "ajaxPost1"
                };
    
                $.ajax({
                    url: url,
                    type: "POST",
                    data: data,
                    dataType: "JSON",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer "+token,
                    },
                    success: (response) => { 
    
                        console.log("success");
                        console.log(response);  
                        
                    },
                    error: (response) => {
    
                        console.log("error");
                        console.log(response);
                        
                    }
    
                });
            
            }
        
            function getPost(event){
                
                event.preventDefault();
    
                let postId=1;
                let url = "http://apitest1.test/api/post/"+postId;
    
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "JSON",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer "+token,
                    },
                    success: (response) => { 
    
                        console.log("success");
                        console.log(response);  
                        
                    },
                    error: (response) => {
    
                        console.log("error");
                        console.log(response);
                        
                    }
    
                });
            
            }
        
            function getAllPosts(event){
                
                event.preventDefault();
    
                let url = "http://apitest1.test/api/post";
    
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "JSON",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer "+token,
                    },
                    success: (response) => { 
    
                        console.log("success");
                        console.log(response);  
                        
                    },
                    error: (response) => {
    
                        console.log("error");
                        console.log(response);
                        
                    }
    
                });
            
            }
    
            function updatePost(event){
                
                event.preventDefault();
    
                let postId=2;
                let url = "http://apitest1.test/api/post/"+postId;
    
                let data = {
                    title: "ajaxPostX1",
                    body: "ajaxPostX1"
                };
    
                $.ajax({
                    url: url,
                    type: "PATCH",
                    data: data,
                    dataType: "JSON",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer "+token,
                    },
                    success: (response) => { 
    
                        console.log("success");
                        console.log(response);  
                        
                    },
                    error: (response) => {
    
                        console.log("error");
                        console.log(response);
                        
                    }
    
                });
            
            }
        
            function deletePost(event){
                
                event.preventDefault();
    
                let postId=2;
                let url = "http://apitest1.test/api/post/"+postId;
                
                $.ajax({
                    url: url,
                    type: "DELETE",
                    dataType: "JSON",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer "+token,
                    },
                    success: (response) => { 
    
                        console.log("success");
                        console.log(response);  
                        
                    },
                    error: (response) => {
    
                        console.log("error");
                        console.log(response);
                        
                    }
    
                });
            
            }
        
        </script>
    </body>
</html>
