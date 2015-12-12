@extends('templates.first')
@section('page_head')
<title>Dashboard</title>
    <link href="./assets/css/dashboard.css" rel="stylesheet">
@stop

@section('page_content')

    <!-- Always shows a header, even in smaller screens. -->

   {{ Form::open(array('url' => 'register','mathod'=>'post')) }}
  <p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {{ Form::text('name',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3">Admin Name</label>
     @if ($errors->has('name'))<span class="mdl-textfield">{{ $errors->first('name') }}</span>@endif
    </div></p>

    <p> <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
     {{ Form::text('email',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3">Email</label>
      @if ($errors->has('email'))<span class="mdl-textfield">{{ $errors->first('email') }}</span>@endif
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <p> Gender<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
  <input type="radio" id="option-1" class="mdl-radio__button" name="gender" value="m" checked>
  <span class="mdl-radio__label">Male</span>
</label>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
  <input type="radio" id="option-2" class="mdl-radio__button" name="gender" value="f">
  <span class="mdl-radio__label">Female</span>
      </label></div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {{ Form::text('dob',null,array('class'=>'mdl-textfield__input','id'=>'sample3','placeholder'=>'mm/dd/yy')) }}
        <label class="mdl-textfield__label" for="sample3">DOB</label>
     @if ($errors->has('dob'))<span class="mdl-textfield">{{ $errors->first('dob') }}</span>@endif
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {{ Form::text('phone',null,array('class'=>'mdl-textfield__input','id'=>'sample4')) }}
    <label class="mdl-textfield__label" for="sample4">Mobile No</label>
     @if ($errors->has('phone'))<span class="mdl-textfield">{{ $errors->first('phone') }}</span>@endif
  </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
     {{ Form::text('collegename',null,array('class'=>'mdl-textfield__input','id'=>'sample4')) }}
        <label class="mdl-textfield__label" for="sample3">Collage Name</label>
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
   {{ Form::text('collegeid',null,array('class'=>'mdl-textfield__input','id'=>'sample4')) }}
        <label class="mdl-textfield__label" for="sample3">Collage id</label>
 @if ($errors->has('collegeid'))<span class="mdl-textfield">{{ $errors->first('collegeid') }}</span>@endif
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {{ Form::file('collegelogo',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3">Collage Logo</label>
 @if ($errors->has('profilepic'))<span class="mdl-textfield">{{ $errors->first('profilepic') }}</span>@endif
    </div></p>



<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
    {{ Form::text('religion',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3">Religion</label>
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield">
    <textarea {{ Form::text('address',null,array('class'=>'mdl-textfield__input','id'=>'sample5')) }}</textarea>
    <label class="mdl-textfield__label" for="sample5">Adress</label>
  </div></p>


<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
   {{ Form::password('password',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3">Password</label>
     @if ($errors->has('password'))<span class="mdl-textfield">{{ $errors->first('password') }}</span>@endif
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {{ Form::password('password_confirmation',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3">Confirm Password</label>
    </div></p>
      <p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {{ Form::file('profilepic',null,array('class'=>'mdl-textfield__input','id'=>'sample5')) }}
        <label class="mdl-textfield__label" for="sample3">Profile pic</label>
 @if ($errors->has('profilepic'))<span class="mdl-textfield">{{ $errors->first('profilepic') }}</span>@endif
</div></p>
<p><input type="submit" value="Submit"></p>
 {{ Form::close() }}



@stop

@section('page_footer')
    <script type="text/javascript">
    </script>
@stop
