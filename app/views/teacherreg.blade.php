<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <h1>Teacher Register</h1>

    {{ Form::open(array('url' => 'teacher','mathod'=>'post','files'=>true)) }}

        <p>Name :</p>

        <p>{{ Form::text('name') }}</p>

        <p>Email :</p>

        <p>{{ Form::text('email') }}</p>

        <p>Password :</p>

        <p>{{ Form::password('password') }}</p>

        <p>Confirm Password :</p>

        <p>{{ Form::password('cpassword') }}</p>
         <p>PHONE :</p>

        <p>{{ Form::password('phone') }}</p>

        <p>ProfilePic :</p>

        <p>{{ Form::file('profilepic') }}</p>

        <p>{{ Form::submit('Submit') }}</p>

    {{ Form::close() }}

</body>
</html>
