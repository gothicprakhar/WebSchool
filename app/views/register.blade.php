<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <h1>Admin Register</h1>

    {{ Form::open(array('url' => 'register','mathod'=>'post','files'=>true)) }}

        <p>Name :</p>

        <p>{{ Form::text('name') }}</p>

        <p>Email :</p>

        <p>{{ Form::text('email') }}</p>

        <p>Collage:</p>

        <p>{{ Form::text('collegename') }}</p>

        <p>ProfilePic :</p>

        <p>{{ Form::file('profilepic') }}</p>

        <p>Collageid :</p>

        <p>{{ Form::text('collegeid') }}</p>


        <p>Collagelogo :</p>

        <p>{{ Form::file('collegelogo') }}</p>

        <p>Password :</p>

        <p>{{ Form::password('password') }}</p>

        <p>Confirm Password :</p>

        <p>{{ Form::password('cpassword') }}</p>

        <p>{{ Form::submit('Submit') }}</p>

    {{ Form::close() }}

</body>
</html>
