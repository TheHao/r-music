@extends('app')

@section('content')
<div class="container">
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
                                <?php foreach ($orders as $order):?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $order->id;?></td>
                                        <td><?php echo $order->song_name;?></td>
                                        <td><?php echo $order->user_id;?></td>
                                        <td><?php echo $order->recipient;?></td>
                                        <td><?php echo $order->comment;?></td>
                                        <td></td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                    
                            </table>
</div>
@endsection
