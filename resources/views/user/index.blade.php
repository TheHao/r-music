@extends('app')

@section('content')
<section id="one" class="wrapper style1">
    <div class="inner">
        <article class="" style="background-color: #fff;     margin-bottom: 6em;">
            <div class="table-wrapper tabset10" style="height: 400px !important;">
                <div data-pws-tab="tab111" data-pws-tab-name="Danh sách User">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if ($user->banned_flg === 0)
                                    <tr class="order-selected">
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{!!link_to_action('UserController@banned','Active' , ['id' => $user->id], null)!!}</td>
                                        <td>{!!link_to_action('UserController@update','Update' , ['id' => $user->id], null)!!}</td>
                                    </tr>
                                @else
                                    <tr class="order-banned">
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{!!link_to_action('UserController@active','Banned' , ['id' => $user->id], null)!!}</td>
                                        <td>{!!link_to_action('UserController@update','Update' , ['id' => $user->id], null)!!}</td>
                                    </tr>
                                @endif    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </article>
    </div>
</section>        
@endsection
