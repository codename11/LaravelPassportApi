<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        <title>{{ config('app.name', 'apiTest1') }}</title>
        <script src="{{ asset('js/skripta.js') }}"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

    </body>
</html>
