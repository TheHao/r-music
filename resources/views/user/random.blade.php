@extends('blank')

@section('content')
<div class="container" style="background: #fff;width: 600px;">
<image src='/images/order-form.png'/>
{!!Form::open(['action' => ['UserController@random', $time], 'id' => 'order-form'])!!}
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
<script>
        jQuery(document).ready(function() {
           $("#order-form").validate({
        // Specify the validation rules
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
//            password: {
//                required: true,
//                minlength: 5
//            },
        },
        
        // Specify the validation error messages
        messages: {
            name: "Please enter your name",
//            password: {
//                required: "Please provide a password",
//                minlength: "Your password must be at least 5 characters long"
//            },
            email: "Please enter a valid email address",
        },
        submitHandler: function(form) {
            form.submit();
        }
        });
    });
  </script>
</div>
@endsection