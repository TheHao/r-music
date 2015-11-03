@extends('app')

@section('content')
<section id="one" class="wrapper style1">
    <div class="inner">

        <article class="" style="background-color: #fff;     margin-bottom: 6em;">
            <div class="table-wrapper tabset10" style="height: 400px !important;">
                <div data-pws-tab="tab111" data-pws-tab-name="{{$today}}">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todayOrders as $order)
                                @if ($order->special_flg === 1)
                                    <tr class="order-special">
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->song_name}}</td>
                                        <td>{{$order->user_id}}</td>
                                        <td>{{$order->recipient}}</td>
                                        <td>{{$order->comment}}</td>
                                        <td>{{"Special"}}</td>
                                    </tr>
                                @else
                                    @if ($order->banned_flg === 1)
                                        <tr class="order-banned">
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->song_name}}</td>
                                            <td>{{$order->user_id}}</td>
                                            <td>{{$order->recipient}}</td>
                                            <td>{{$order->comment}}</td>
                                            <td>{{"Banned"}}</td>
                                        </tr>
                                    @else
                                            @if ($order->status === 1 || $order->status === 2)
                                                <tr class="order-selected">
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->song_name}}</td>
                                                    <td>{{$order->user_id}}</td>
                                                    <td>{{$order->recipient}}</td>
                                                    <td>{{$order->comment}}</td>
                                                    <td>{{"Selected"}}</td>
                                                </tr>
                                            @else
                                             <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->song_name}}</td>
                                                <td>{{$order->user_id}}</td>
                                                <td>{{$order->recipient}}</td>
                                                <td>{{$order->comment}}</td>
                                                <td></td>
                                             </tr>
                                            @endif
                                    @endif
                                @endif    
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div data-pws-tab="tab222" data-pws-tab-name="Sáng">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todayChoiseAms as $choise)
                                <tr class="order-selected">
                                    <td>{{$choise->id}}</td>
                                    <td>{{$choise->song_name}}</td>
                                    <td>{{$choise->user_id}}</td>
                                    <td>{{$choise->recipient}}</td>
                                    <td>{{$choise->comment}}</td>
                                    <td>{{"Selected"}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>      
                <div data-pws-tab="tab333" data-pws-tab-name="Chiều">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todayChoisePms as $choise)
                                <tr class="order-selected">
                                    <td>{{$choise->id}}</td>
                                    <td>{{$choise->song_name}}</td>
                                    <td>{{$choise->user_id}}</td>
                                    <td>{{$choise->recipient}}</td>
                                    <td>{{$choise->comment}}</td>
                                    <td>{{"Selected"}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>                            
            </div>
        </article>
        <article class="" style="background-color: #fff;     margin-bottom: 6em;">
            <div class="table-wrapper tabset10" style="height: 400px !important;">
                <div data-pws-tab="tab111" data-pws-tab-name="{{$yesterday}}">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($yesterdayOrders as $order)
                                @if ($order->special_flg === 1)
                                    <tr class="order-special">
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->song_name}}</td>
                                        <td>{{$order->user_id}}</td>
                                        <td>{{$order->recipient}}</td>
                                        <td>{{$order->comment}}</td>
                                        <td>{{"Special"}}</td>
                                    </tr>
                                @else
                                    @if ($order->banned_flg === 1)
                                        <tr class="order-banned">
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->song_name}}</td>
                                            <td>{{$order->user_id}}</td>
                                            <td>{{$order->recipient}}</td>
                                            <td>{{$order->comment}}</td>
                                            <td>{{"Banned"}}</td>
                                        </tr>
                                    @else
                                            @if ($order->status === 1 || $order->status === 2)
                                                <tr class="order-selected">
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->song_name}}</td>
                                                    <td>{{$order->user_id}}</td>
                                                    <td>{{$order->recipient}}</td>
                                                    <td>{{$order->comment}}</td>
                                                    <td>{{"Selected"}}</td>
                                                </tr>
                                            @else
                                             <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->song_name}}</td>
                                                <td>{{$order->user_id}}</td>
                                                <td>{{$order->recipient}}</td>
                                                <td>{{$order->comment}}</td>
                                                <td></td>
                                             </tr>
                                            @endif
                                    @endif
                                @endif    
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div data-pws-tab="tab222" data-pws-tab-name="Sáng">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($yesterdayChoiseAms as $choise)
                                <tr class="order-selected">
                                    <td>{{$choise->id}}</td>
                                    <td>{{$choise->song_name}}</td>
                                    <td>{{$choise->user_id}}</td>
                                    <td>{{$choise->recipient}}</td>
                                    <td>{{$choise->comment}}</td>
                                    <td>{{"Selected"}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>      
                <div data-pws-tab="tab333" data-pws-tab-name="Chiều">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($yesterdayChoisePms as $choise)
                                <tr class="order-selected">
                                    <td>{{$choise->id}}</td>
                                    <td>{{$choise->song_name}}</td>
                                    <td>{{$choise->user_id}}</td>
                                    <td>{{$choise->recipient}}</td>
                                    <td>{{$choise->comment}}</td>
                                    <td>{{"Selected"}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>                            
            </div>
        </article>

        <article class="" style="background-color: #fff;     margin-bottom: 6em;">
            <div class="table-wrapper tabset10" style="height: 400px !important;">
                <div data-pws-tab="tab111" data-pws-tab-name="{{$afterYesterday}}">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($afterYesterdayOrders as $order)
                                @if ($order->special_flg === 1)
                                    <tr class="order-special">
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->song_name}}</td>
                                        <td>{{$order->user_id}}</td>
                                        <td>{{$order->recipient}}</td>
                                        <td>{{$order->comment}}</td>
                                        <td>{{"Special"}}</td>
                                    </tr>
                                @else
                                    @if ($order->banned_flg === 1)
                                        <tr class="order-banned">
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->song_name}}</td>
                                            <td>{{$order->user_id}}</td>
                                            <td>{{$order->recipient}}</td>
                                            <td>{{$order->comment}}</td>
                                            <td>{{"Banned"}}</td>
                                        </tr>
                                    @else
                                            @if ($order->status === 1 || $order->status === 2)
                                                <tr class="order-selected">
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->song_name}}</td>
                                                    <td>{{$order->user_id}}</td>
                                                    <td>{{$order->recipient}}</td>
                                                    <td>{{$order->comment}}</td>
                                                    <td>{{"Selected"}}</td>
                                                </tr>
                                            @else
                                             <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->song_name}}</td>
                                                <td>{{$order->user_id}}</td>
                                                <td>{{$order->recipient}}</td>
                                                <td>{{$order->comment}}</td>
                                                <td></td>
                                             </tr>
                                            @endif
                                    @endif
                                @endif    
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div data-pws-tab="tab222" data-pws-tab-name="Sáng">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($afterYesterdayChoiseAms as $choise)
                                <tr class="order-selected">
                                    <td>{{$choise->id}}</td>
                                    <td>{{$choise->song_name}}</td>
                                    <td>{{$choise->user_id}}</td>
                                    <td>{{$choise->recipient}}</td>
                                    <td>{{$choise->comment}}</td>
                                    <td>{{"Selected"}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>      
                <div data-pws-tab="tab333" data-pws-tab-name="Chiều">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($afterYesterdayChoisePms as $choise)
                                <tr class="order-selected">
                                    <td>{{$choise->id}}</td>
                                    <td>{{$choise->song_name}}</td>
                                    <td>{{$choise->user_id}}</td>
                                    <td>{{$choise->recipient}}</td>
                                    <td>{{$choise->comment}}</td>
                                    <td>{{"Selected"}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>                            
            </div>
        </article>
    </div>
</section>
@endsection
