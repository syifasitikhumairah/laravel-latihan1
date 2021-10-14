<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($posts as $data)
    id : {{$data['id']}}<br>
    Name : {{$data['name']}}<br>
    Username : {{$data['username']}}<br>
    Email : {{$data['email']}}<br>
    Alamat  : {{$data['alamat']}}<br>
    Mata Pelajaran : <br>
    @foreach ($data['matapel'] as $mapel)
        <li>{{$mapel}}</li>
    @endforeach
    <hr>
    @endforeach
</body>
</html>
