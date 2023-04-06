<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prak1</title>

  <style>

    .table ,tr , td{
      border: 1px solid black ; 
    }
  </style>
</head>
<body>
<div class="card-body">

<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>NPM</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Alamat</th>
    </tr> 
</thead>
<tbody>
@foreach ($data['students'] as $index => $result )
<tr>
  <td>{{$index+1}}</td>
  
  <td>{{$result['npm']}}</td>
  <td>{{$result['name']}}</td>
  <td>{{$result['Gender']}}</td>
  <td>{{$result['Alamat']}}</td>
</tr>
@endforeach
</tbody>



</table>



</div>

  
</body>
</html>