<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

</head>
<body>
    <div class="container" >
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">FilName</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
<tbody>
    @foreach ($records as $record) 
    <tr>
        <th scope="row">{{$record->file->filename}}</th>
        <td>{{$record->Name}}</td>
        <td>{{$record->Email}}</td>
        <td>{{$record->Address}}</td>
    </tr>
    @endforeach 
</tbody>

</table>
    </div>
</body>
</html>