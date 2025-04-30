<!DOCTYPE html>
<html>
<head>
    <title>Item List</title>
</head>
<body>
    <h1>Daftar Item</h1>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item['id'] }} - {{ $item['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>
