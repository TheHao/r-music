@extends('app')

@section('content')
<div class="container">
    {!!Form::open(array('action' => 'UserController@order'))!!}
    {!!Form::label('song_name', 'Bài hát')!!}
    {!!Form::text('song_name',"", ['placeholder'=>'bài hát...'])!!}
    {!!Form::label('song_url', 'Link')!!}
    {!!Form::text('song_url',"", ['placeholder'=>'link...'])!!}
    {!!Form::label('recipient', 'Gửi đến')!!}
    {!!Form::text('recipient',"", ['placeholder'=>'gửi đến...'])!!}
    {!!Form::label('comment', 'Lời chúc')!!}
    {!!Form::textarea('comment',"", ['rows' => '2', 'placeholder'=>'lời chúc...'])!!}
    {!!Form::checkbox('is_invisible', 1, null, ['id' => 'is-invisible'])!!}
    {!!Form::label('is-invisible', 'Ẩn danh')!!}
    {!!Form::checkbox('special_flg', 1, null, ['id' => 'special-flg'])!!}
    {!!Form::label('special-flg', 'Đặc biệt')!!}
    {!!Form::label('special_reason', 'Lý do')!!}
    {!!Form::textarea('special_reason',"", ['rows' => '2', 'placeholder'=>'lý do...'])!!}
    {!!Form::submit('Order')!!}
    {!! Form::close() !!}
</div>
@endsection