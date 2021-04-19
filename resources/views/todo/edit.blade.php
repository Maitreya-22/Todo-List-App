<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>TODO | Edit</title>
    <style>
    body{
    background-color: blueviolet;
}

.wrapper-grid{
    display: grid;
    grid-template-columns: repeat(auto-fit,30rem);
    justify-content: center;
}

.container-grid{
    overflow: hidden;
    box-shadow:var(--clr-gray-light);
    background: -webkit-linear-gradient(45deg, #434343, #000000);
    background: linear-gradient(45deg, #434343, #000000);
    text-align: center;
    border-radius: 1rem;
    position: relative;
    margin: 0.5rem;
}


.text-edit{
    width:200px;
    height:20px;
    border-radius: 0.5rem;
    position: relative;
    margin: 0.5rem;
    border:none;
    outline:none;
}
.edit{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color:white;
    letter-spacing:1px;
    font-weight:500;
    font-size:24px;
}


.back-btn ,.edit-btn{
    width: 150px;
    border: none;
    border-radius:10px;
    font-size: 0.5rem;
    font-size:14px;
    font-weight: bold;
    color: white;
    padding: 1rem;
    background-color:#05386b;
    outline: none;
    cursor: pointer;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }

  .back-btn:hover,.edit-btn:hover{
      background-color:crimson;
  }
  



    </style>
</head>
<body style="text-align:center">

<div class="wrapper-grid">
            <div class="container-grid">
    <h1 class="edit">EDIT YOUR TODO</h1>
    <h3>
        <x-alert />
    </h3>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <input type="text" class="text-edit" name="title" value="{{$todo->title}}"/>
        <input style="display:none" type="number" name="id" value="{{$todo->id}}"><br><br>
        <input type="submit" class="edit-btn" value="Edit" />
    </form>
    <br><br>
    <a href="/index" class="back-btn" style="text-decoration:none ">Back</a><br><br><br>
    </div>
    </div>
</body>
</html>
