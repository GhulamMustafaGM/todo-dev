<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todoss-dev</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
           
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <table border="1">
                <tr>
                    <td>Id</td>
                     <td>Name</td>
                     <td>Created At</td>
                     <td>Action</td>
                </tr>    
                @foreach($todossArr as $todoss)
                <tr>
                    <td>{{$todoss->id}}</td>
                    <td>{{$todoss->name}}</td>
                    <td>{{$todoss->created_at}}</td>
                    <td><a href="todoss_delete/{{$todoss->id}}">Delete</a></td>
                </tr>
                @endforeach
            </table>          
        </div>
    </body>
</html>
