
<!doctype html>
<html>
<head>
<title>Look at me Login</title>
</head>
<body><
   @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
{{ Form::open(array('url' => 'login','mothod'=>'post')) }}


<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}
