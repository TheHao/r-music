@extends('app')

@section('content')
<div class="container">
    <form method="post" action='{{ url("user/add") }}'>
        <label>Tên bài hát: </label>
        <input type="text" placeholder="tên bài hát" name="song_name" value=""/>
        <label>Link bài hát: </label>
        <input type="text" placeholder="link bài hát" name="song_url" value=""/>
        <label>Người nhận: </label>
        <input type="text" placeholder="gửi đến" name="recipient" value=""/>
        <label>Lời chúc: </label>
        <input type="text" placeholder="lời chúc..." name="comment" value=""/>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="user_id" value="1">
        <input type="submit" value="Submit">
    </form>
</div>
@endsection