@extends('blank')

@section('content')
<div class="container" style="background: #fff;width: 600px;">
<image src='/images/order-form.png'/>
{!!Form::open(['action' => ['UserController@update', $user->id], 'id' => 'order-form'])!!}
{!!Form::hidden('id', $user->id)!!}
{!!Form::label('name', 'UserName',['class' => 'label-for-input'])!!}
<label class='require-class'>(*)</label>
{!!Form::text('name', $user->name, ['placeholder'=>'user name...'])!!}
{!!Form::label('email', 'Email',['class' => 'label-for-input'])!!}
<label class='require-class'>(*)</label>
{!!Form::text('email',$user->email, ['placeholder'=>'email...'])!!}
<div class="checkbox-input">
{!!Form::checkbox('banned_flg', 1, $user->banned_flg, ['id' => 'banned-flg'])!!}
{!!Form::label('banned-flg', 'Banned')!!}
</div>
{!!Form::submit('Update',['id' => 'submit'])!!}
{!! Form::close() !!}
</div>
@endsection