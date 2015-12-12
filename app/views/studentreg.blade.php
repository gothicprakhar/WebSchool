<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <h1>Student Register</h1>


    {{ Form::open(array('url' => 'studenttest','mathod'=>'post','files'=>true)) }}

        <p>Name :</p>

        <p>{{ Form::text('name') }}</p>
         @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif

        <p>Email :</p>

        <p>{{ Form::text('email') }}</p>
         @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif

        <p>DOB :</p>

        <p>{{ Form::text('dob') }}</p>
         @if ($errors->has('dob')) <p class="help-block">{{ $errors->first('dob') }}</p> @endif
        <p>gender :</p>

        <p>{{ Form::text('gender') }}</p>

        <p>religion :</p>

        <p>{{ Form::text('religion') }}</p>
        <p>phone :</p>
        <p>{{ Form::text('phone') }}</p>
         @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
        <p>address :</p>
        <p>{{ Form::text('address') }}</p>
        <p>classid :</p>
        <p>{{ Form::text('classid') }}</p>
        <p>Section :</p>
        <p>{{ Form::text('section') }}</p>
        <p>roll_no :</p>
        <p>{{ Form::text('roll_no') }}</p>
        <p>Password :</p>
        <p>{{ Form::password('password') }}</p>
         @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
        <p>Confirm Password :</p>
        <p>{{ Form::password('password_confirmation') }}</p>
         @if ($errors->has('password_confirmation')) <p class="help-block">{{ $errors->first('password_confirmation') }}</p> @endif
        <p>ProfilePic :</p>
        <p>{{ Form::file('profilepic') }}</p>
        <p>{{ Form::submit('Submit') }}</p>

    {{ Form::close() }}

</body>
</html>
