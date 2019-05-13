<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<ul>
    {{--@foreach($task as $task)--}}
        <li>{{ $task->body }}</li>
    {{--@endforeach--}}
</ul>
</body>
</html>
