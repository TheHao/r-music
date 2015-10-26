@extends('app')

@section('content')
<section id="one" class="wrapper style1">
    <div class="inner">

        <article class="" style="background-color: #fff;     margin-bottom: 6em;">
            <div class="table-wrapper tabset10" style="height: 400px !important;">
                <div data-pws-tab="tab111" data-pws-tab-name="Thứ 3, 20/10">
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
                            <?php foreach ($orders as $order): ?>
                                <tr>
                                    <td><?php echo $order->id; ?></td>
                                    <td><?php echo $order->song_name; ?></td>
                                    <td><?php echo $order->user_id; ?></td>
                                    <td><?php echo $order->recipient; ?></td>
                                    <td><?php echo $order->comment; ?></td>
                                    <td>
                                        <?php
                                        if ($order->status == 1):
                                            echo 'selected';
                                        else:
                                            echo 'banned';
                                        endif;
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td>11</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-selected">
                                <td>22</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Selected</td>
                            </tr>
                            <tr class="order-banned">
                                <td>33</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Banned</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-special">
                                <td>55</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Special</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-selected">
                                <td>22</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Selected</td>
                            </tr>
                            <tr class="order-banned">
                                <td>33</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Banned</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-special">
                                <td>55</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Special</td>
                            </tr>
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
                            <tr>
                                <td>1</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-selected">
                                <td>2</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Selected</td>
                            </tr>
                            <tr class="order-banned">
                                <td>3</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Banned</td>
                            </tr>

                        </tbody>

                    </table>
                </div>      
                <div data-pws-tab="tab333" data-pws-tab-name="Chiều">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát chiều</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-selected">
                                <td>2</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Selected</td>
                            </tr>
                            <tr class="order-banned">
                                <td>3</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Banned</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-special">
                                <td>5</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Special</td>
                            </tr>
                        </tbody>

                    </table>
                </div>                            
            </div>
        </article>
        <article class="" style="background-color: #fff;     margin-bottom: 6em;">
            <div class="table-wrapper tabset10" style="height: 400px !important;">
                <div data-pws-tab="tab111" data-pws-tab-name="List order">
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
                            <tr>
                                <td>11</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-selected">
                                <td>22</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Selected</td>
                            </tr>
                            <tr class="order-banned">
                                <td>33</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Banned</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-special">
                                <td>55</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Special</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-selected">
                                <td>22</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Selected</td>
                            </tr>
                            <tr class="order-banned">
                                <td>33</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Banned</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-special">
                                <td>55</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Special</td>
                            </tr>
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
                            <tr>
                                <td>1</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-selected">
                                <td>2</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Selected</td>
                            </tr>
                            <tr class="order-banned">
                                <td>3</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Banned</td>
                            </tr>

                        </tbody>

                    </table>
                </div>      
                <div data-pws-tab="tab333" data-pws-tab-name="Chiều">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Bài hát chiều</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Sms</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-selected">
                                <td>2</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Selected</td>
                            </tr>
                            <tr class="order-banned">
                                <td>3</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Banned</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td></td>
                            </tr>
                            <tr class="order-special">
                                <td>5</td>
                                <td>Cơn mưa ngang qua</td>
                                <td>HungNT</td>
                                <td>Lan</td>
                                <td>What's missing in your workflow?</td>
                                <td>Special</td>
                            </tr>
                        </tbody>

                    </table>
                </div>                            
            </div>
        </article>

        <article class="" style="background-color: #fff;     margin-bottom: 6em;">
            <div class="table-wrapper">
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
                        <tr>
                            <td>1</td>
                            <td>Cơn mưa ngang qua</td>
                            <td>HungNT</td>
                            <td>Lan</td>
                            <td>What's missing in your workflow?</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cơn mưa ngang qua</td>
                            <td>HungNT</td>
                            <td>Lan</td>
                            <td>What's missing in your workflow?</td>
                            <td>Selected</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Cơn mưa ngang qua</td>
                            <td>HungNT</td>
                            <td>Lan</td>
                            <td>What's missing in your workflow?</td>
                            <td>Banned</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Cơn mưa ngang qua</td>
                            <td>HungNT</td>
                            <td>Lan</td>
                            <td>What's missing in your workflow?</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Cơn mưa ngang qua</td>
                            <td>HungNT</td>
                            <td>Lan</td>
                            <td>What's missing in your workflow?</td>
                            <td>Special</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </article  class="" style="background-color: #fff;     margin-bottom: 6em;">
        <article>

        </article>
    </div>
</section>
@endsection
