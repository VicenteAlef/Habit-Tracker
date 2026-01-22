<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{config('app.name')}} - Home</title>
  
  @vite('resources/css/app.css')
</head>
<body>
  <h1>Wellcome to home page, {{ $name }}</h1>
  <p>Your habits are:</p>
  <ul>
    @foreach ($habits as $item)
      <li>
        {{ $item }}
      </li>
    @endforeach
  </ul>
</body>
</html>