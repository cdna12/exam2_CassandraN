<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam2</title>
</head>
<body>
    <h1>{{ $page_title}}</h1>
    <tr>
    <table>
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Height</th>
                <th>Weight</th>
                <th>HP</th>
                <th>Image</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($char as $character)
            <tr>
                <td>{{ $character->Name}}</td>
                <td>{{ $character->Height}}</td>
                <td>{{ $character->Weight}}</td>
                <td>{{ $character->HP}}</td>
                <td>{{ $character->Image}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>
</body>
</html>