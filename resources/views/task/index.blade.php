<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Task</title>
</head>
<body>
  <ul>
    @foreach($tasks as $task)
      <li>{{ $task-> title }}</li>
    @endforeach
  </ul>
</body>
</html>
