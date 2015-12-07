@extends('templates.dashboard')

@section('page_content')
<div >
     @if (Session::has('flash_notice'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
      <p>Homepage Content</p>
   </div>
@stop
