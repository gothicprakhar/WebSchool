<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>

    {{ Form::open(array('url' => 'register','mathod'=>'post')) }}

        <p>Name :</p>

        <p>{{ Form::text('name') }}</p>

        <p>Email :</p>

        <p>{{ Form::text('email') }}</p>

        <p>Collage:</p>

        <p>{{ Form::text('collegename') }}</p>

        <p>Collageid :</p>

        <p>{{ Form::text('collegeid') }}</p>
        <p>Collagelogo :</p>

        <p>{{ Form::text('collegelogo') }}</p>

        <p>Password :</p>

        <p>{{ Form::password('password') }}</p>

        <p>Confirm Password :</p>

        <p>{{ Form::password('cpassword') }}</p>

        <p>{{ Form::submit('Submit') }}</p>

    {{ Form::close() }}

</body>
</html>
