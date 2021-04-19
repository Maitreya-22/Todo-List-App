<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>TODO | Home</title>
</head>
<style>
    li{
        list-style-type:none;
    }
</style>

<body>
   
    

    <div class="wrapper-grid">
            <div class="container-grid">
                <h1>
                    TODO APP
                </h1><hr>
            <h1>ALL YOUR TODOS</h1>
    <h3>
        <a href="/create" class="create">CREATE</a>
    </h3>
    <hr>
    <h3>
        <x-alert />
    </h3>
    @foreach($todos as $todo)
        <li class="litag">
            @if($todo->completed)
                <span style="text-decoration:line-through red; color:white !important;">{{$todo->title}}</span>
            @else 
                {{$todo->title}}
            @endif
            <br><br>  <a href="{{asset('/' . $todo->id . '/edit')}}" class="ecd">EDIT</a>&nbsp&nbsp&nbsp
            <a href="{{asset('/' . $todo->id . '/completed')}}" class="ecd">COMPLETED</a>&nbsp&nbsp&nbsp
            <a href="{{asset('/' . $todo->id . '/delete')}}" class="ecd">DELETE</a>
        </li><br><br><hr>
    @endforeach
               
        </div>
</body>
</html>
