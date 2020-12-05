<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="container">
<h1>MY PROFILE</h1>
<p for="">Username: <span> {{$user->Username}}</span></p>
<p for="">Firstname: <span> {{$user->Firstname}}</span></p>
<p for="">Middlename: <span> {{$user->Middlename}}</span></p>
<p for="">Lastname: <span> {{$user->Lastname}}</span></p>
<p for="">email: <span> {{$user->email}}</span></p>
<p for="">Telephone: <span> {{$user->Telephone}}</span></p>
<p for="">Gender: <span> {{$user->Gender}}</span></p>
<p for="">Birthday: <span> {{$user->Birthday}}</span></p>
<p for="">Staus: <span> {{$user->Status}}</span></p>
<p for="">Age: <span> {{$user->Age}}</span></p>
</div>
    
</body>
</html>
<style>
span{
    font-weight:bold;
}
</style>