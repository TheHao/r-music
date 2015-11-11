@extends('blank')

@section('content')
<div class="container" style="background: #fff;width: 600px;">
<image src='/images/order-form.png'/>
{!!Form::open([['action' => 'UserController@update','id' => $id], 'id' => 'order-form'])!!}
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
</div>
@endsection