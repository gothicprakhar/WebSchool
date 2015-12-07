<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <h1>Student Register</h1>

    {{ Form::open(array('url' => 'student','mathod'=>'post','files'=>true)) }}

        <p>Name :</p>

        <p>{{ Form::text('name') }}</p>

        <p>Email :</p>

        <p>{{ Form::text('email') }}</p>

         <p>DOB :</p>

        <p>{{ Form::text('dob') }}</p>

          <p>gender :</p>

        <p>{{ Form::text('gender') }}</p>


       <p>religion :</p>

        <p>{{ Form::text('religion') }}</p>

           <p>phone :</p>

        <p>{{ Form::text('phone') }}</p>

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

           <p>Confirm Password :</p>

        <p>{{ Form::password('cpassword') }}</p>


        <p>ProfilePic :</p>

        <p>{{ Form::file('profilepic') }}</p>

        <p>{{ Form::submit('Submit') }}</p>

    {{ Form::close() }}

</body>
</html>
