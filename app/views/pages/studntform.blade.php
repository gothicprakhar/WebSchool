@extends('templates.first')
@section('page_head')
<title>Dashboard</title>
    <link href="./assets/css/dashboard.css" rel="stylesheet">
@stop

@section('page_content')

    <!-- Always shows a header, even in smaller screens. -->

{{ Form::open(array('url' => 'student','mathod'=>'post','files'=>true)) }}
  <p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        {{ Form::text('name',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3"> Student Name</label>
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
    {{ Form::text('roll_no',null,array('class'=>'mdl-textfield__input','id'=>'sample4')) }}
     <label class="mdl-textfield__label" for="sample4">Roll No</label>
      @if ($errors->has('roll_no'))<span class="mdl-textfield">{{ $errors->first('roll_no') }}</span>@endif
    </div></p>

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
    <input class="mdl-textfield__input" type="text" id="sample3" name="classid">
        <label class="mdl-textfield__label" for="sample3">Class id</label>
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="section">
        <label class="mdl-textfield__label" for="sample3">Section</label>
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
     {{ Form::text('fathername',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3">Father Name</label>
@if ($errors->has('fathername'))<span class="mdl-textfield">{{ $errors->first('fathername') }}</span>@endif
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
     {{ Form::text('mothername',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3">Mother Name</label>
@if ($errors->has('mothername'))<span class="mdl-textfield">{{ $errors->first('mothername') }}</span>@endif
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 {{ Form::text('focupation',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3">Father Occupation</label>
    </div></p>
<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      {{ Form::text('mocupation',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3"> Mother Ocupation</label>
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  {{ Form::text('fphone',null,array('class'=>'mdl-textfield__input','id'=>'sample4')) }}
    <label class="mdl-textfield__label" for="sample4">Father Phone</label>
    @if ($errors->has('fphone'))<span class="mdl-textfield">{{ $errors->first('fphone') }}</span>@endif
  </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 {{ Form::text('femail',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
 <label class="mdl-textfield__label" for="sample3">Father Email</label>
@if ($errors->has('femail'))<span class="mdl-textfield">{{ $errors->first('femail') }}</span>@endif
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
    {{ Form::text('religion',null,array('class'=>'mdl-textfield__input','id'=>'sample3')) }}
        <label class="mdl-textfield__label" for="sample3">Religion</label>
    </div></p>

<p><div class="mdl-textfield mdl-js-textfield">

<textarea  {{ Form::text('address',null,array('class'=>'mdl-textfield__input','id'=>'sample5')) }}
</textarea>
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
