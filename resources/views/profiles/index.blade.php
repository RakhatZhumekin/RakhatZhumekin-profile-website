<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
</head>
<body>
    @forelse ($profiles as $profile)
        <table>
            <tr>
                <td>{{$profile->name}}</td>
                <td>{{$profile->surname}}</td>
                <td>{{$profile->email}}</td>
                <td><img src="{{$profile->photo}}" width="100px"></td>
            </tr>
        </table>
    @empty
        <p>Nothing at the moment.</p>
    @endforelse
</body>
</html>