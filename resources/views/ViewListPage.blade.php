<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
        <h1>List</h1>

        <table class="responstable">
          
          <tr>
            <th><span>Link</span></th>
            <th>Price</th>
            <th>Description</th>
            <th>Created Time</th>
            <th>Action</th>
          </tr>
          
          @foreach ($data as $value)
            <tr>
                <th>{{$value->link}}</th>
                <th>{{$value->price}}</th>
                <th>{{$value->description}}</th>
                <th>{{$value->created_at}}</th>
            <th><a href="/detail/{{$value->id}}"> click me!</a></th>
            </tr>
          @endforeach
          
        </table>
</body>
</html>