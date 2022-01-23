<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>register</h1>
    <form action="{{route('register')}}" method="post">
        @csrf
        <input type="text" name="email" placeholder="email">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="password" placeholder="password">
        <input type="submit">
    </form>
</body>
</html>
