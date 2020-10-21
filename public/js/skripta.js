let token = null;

function register(event){
    event.preventDefault();

    let url = "http://laravelpassportapi.test/api/register";

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

    let url = "http://laravelpassportapi.test/api/login";

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

    let url = "http://laravelpassportapi.test/api/post";

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
    let url = "http://laravelpassportapi.test/api/post/"+postId;

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

    let url = "http://laravelpassportapi.test/api/post";

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
    let url = "http://laravelpassportapi.test/api/post/"+postId;

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
    let url = "http://laravelpassportapi.test/api/post/"+postId;
    
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