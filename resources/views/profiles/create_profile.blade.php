<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
</head>
<body>
<form method="POST" action="{{ route('add-profile')}}" enctype="multipart/form-data">
        @csrf 
        <input type="text" name="name" placeholder="name">
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="email" placeholder="email">
        <input type="file" name="photo" accept="image/png,image/jpeg">
        <button type="submit">Create</button>
    </form>
</body>
</html>