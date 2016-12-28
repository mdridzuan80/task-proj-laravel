<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Task</title>
</head>
<link rel="stylesheet" href="/css/app.css" charset="utf-8">
<script src="js/app.js" charset="utf-8"></script>
<body>
  <div class="container">
    <ul>
      <h1>Task List</h1>
      @foreach($tasks as $task)
        <li>{{ $task-> title }}</li>
      @endforeach
    </ul>
  </div>
</body>
</html>
