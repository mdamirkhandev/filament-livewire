<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contcat Email</title>
</head>

<body>
    <h1>You Got a new email</h1>
    <p>Name:{{ $mailData['name'] }}</p>
    <p>Email:{{ $mailData['email'] }}</p>
    <p>Message:</p>
    <p>{{ $mailData['message'] }}</p>
    <p>Thanks</p>
</body>

</html>
