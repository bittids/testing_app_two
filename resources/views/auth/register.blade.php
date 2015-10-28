@extends('layouts.master_welcome')

@section('title', 'Page Title')
@section('page_specific_jquery')
@endsection

@section('content')
<!-- resources/views/auth/register.blade.php -->
	{!! Form::open() !!}

<!-- <form method="POST" action="/auth/register">
-->    {!! csrf_field() !!}

    <div>
            {!! Form::label('First name', 'first_name'); !!}
            {!! Form::text('first_name', Input::old('first_name')); !!}
 <!--             <input type="text" name="name" value="{{ old('name') }}">
-->    </div>
    <div>
            {!! Form::label('Last name', 'last_name'); !!}
            {!! Form::text('last_name', Input::old('last_name')); !!}
 <!--             <input type="text" name="name" value="{{ old('name') }}">
-->    </div>
    
    <div>
            {!! Form::label('email', 'Email'); !!}
            {!! Form::email('email', Input::old('email')); !!}
<!--              <input type="email" name="email" value="{{ old('email') }}">
-->    </div>

    <div>
       {!! Form::label('password', 'Password'); !!}
        {!! Form::password('password'); !!}
    <!--         <input type="password" name="password">
  -->  </div>

    <div>
       {!! Form::label('password_confirmation', 'Confirm password'); !!}
        {!! Form::password('password_confirmation'); !!}
<!--            <input type="password" name="password_confirmation">
-->    </div>

    <div>
     {!! Form::submit('Register'); !!}
<!--     <button type="submit">Register</button>
-->    </div>
{!! Form::close() !!}
<!-- </form> -->
@endsection