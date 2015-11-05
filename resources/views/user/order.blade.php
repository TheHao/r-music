@extends('blank')

@section('content')
<div class="container" style="background: #fff;width: 600px;">
<image src='/images/order-form.png'/>
{!!Form::open(['action' => 'UserController@order', 'id' => 'order-form'])!!}
{!!Form::label('song_name', 'Bài hát',['class' => 'label-for-input'])!!}
<label class='require-class'>(*)</label>
{!!Form::text('song_name',"", ['placeholder'=>'bài hát...'])!!}
{!!Form::label('song_url', 'Link',['class' => 'label-for-input'])!!}
<label class='require-class'>(*)</label>
{!!Form::text('song_url',"", ['placeholder'=>'link...'])!!}
{!!Form::label('recipient', 'Gửi đến',['class' => 'label-for-input'])!!}
<label class='require-class'>(*)</label>
{!!Form::text('recipient',"", ['placeholder'=>'gửi đến...'])!!}
{!!Form::label('comment', 'Lời chúc',['class' => 'label-for-input'])!!}
<label class='require-class'>(*)</label>
{!!Form::textarea('comment',"", ['rows' => '2', 'placeholder'=>'lời chúc...'])!!}
<div class="checkbox-input">
{!!Form::checkbox('is_invisible', 1, null, ['id' => 'is-invisible'])!!}
{!!Form::label('is-invisible', 'Ẩn danh')!!}
{!!Form::checkbox('special_flg', 1, null, ['id' => 'special-flg'])!!}
{!!Form::label('special-flg', 'Đặc biệt')!!}
</div>
{!!Form::label('special_reason', 'Lý do',['class' => 'label-for-input'])!!}
{!!Form::textarea('special_reason',"", ['rows' => '2', 'placeholder'=>'lý do...'])!!}
{!!Form::submit('Order',['id' => 'submit'])!!}
{!! Form::close() !!}
    <script>
        jQuery(document).ready(function() {
           $("#order-form").validate({
        // Specify the validation rules
        rules: {
            song_name: "required",
            song_url: "required",
            recipient: "required",
            comment: "required",
//            email: {
//                required: true,
//                email: true
//            },
//            password: {
//                required: true,
//                minlength: 5
//            },
//            agree: "required"
        },
        
        // Specify the validation error messages
        messages: {
            song_name: "Please enter your song name",
            song_url: "Please enter your song url",
            recipient: "Please enter your recipient",
            comment: "Please enter your comment",
//            password: {
//                required: "Please provide a password",
//                minlength: "Your password must be at least 5 characters long"
//            },
//            email: "Please enter a valid email 123 address",
//            agree: "Please accept our policy"
        },
        submitHandler: function(form) {
            var specialFlg = $('#special-flg')[0].checked;
            var specialReason = $('#special_reason').val();
            if(specialFlg == true){
                if(specialReason === ""){
                return alert('Please enter your special reason');
                }
            }
            form.submit();
        }
        });
    });
  </script>
</div>
@endsection