<!DOCTYPE html>
<html>
<head>
    <title>List Item</title>
</head>
<body>
    <h1>Daftar Item</h1>
    <ul>
        @foreach($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>
