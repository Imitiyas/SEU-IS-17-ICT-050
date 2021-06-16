<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Telephone No</th>
            <th>NIC</th>
            <th>Gender</th>
        </tr>
        @foreach ($data as $x)
        <tr>
            <td>{{$x[name]}}</td>
            <td>{{$x[dob]}}</td>
            <td>{{$x[phone]}}</td>
            <td>{{$x[nic]}}</td>
            <td>{{$x[gender]}}</td>
        </tr>
        @endforeach
</table>

    
</body>
</html>