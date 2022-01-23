<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, th {
  border: 1px solid black;
  padding: 4px
}
</style>
<body>
    <table>
        <tr>
          <th>name</th>
          <th>نام سازدنده</th>
          <th>update</th>
          <th>delete</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->name}}</td>
            <td>{{$post->user->name}}</td>
            <td>
                <td><a href="{{route('post.edit',$post->id)}}">edit</a></td>
            </td>
            <td>
                <form action="{{route('post.update',$post->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </td>
          </tr>
        @endforeach
      </table>

</body>
</html>
