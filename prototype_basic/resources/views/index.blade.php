<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <table>
        <thead>
            <tr>
                <th>namePromotion</th>
                <th>edit</th>
            </tr>

        </thead>
    </table>
    <tbody>
        
        <tr>
            @foreach ($data as $item)
            <td>{{$item['namePromotion']}}</td>
            @endforeach
        </tr>
    
    </tbody>

</body>
</html>