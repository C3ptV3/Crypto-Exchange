@extends('layouts.app')
@section('sidebar')
<div>
</div>
@endsection
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h2>Your Balance Changes</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Time/Date</th>
                    <th>Change Reason</th>
                    <th>Currency</th>
                    <th>Change</th>
                    <th>Old Value</th>
                    <th>New Value</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($transaction as $tran)
                <tr>
                    <td>{{$tran['updated_at']}}</td>
                    @if ($tran['change_type']=="TradeCreate")
                    <td>Trade Issued</td>
                    @elseif($tran['change_type']=="TradeDone-")
                    <td>Currency Given</td>
                    @elseif($tran['change_type']=="TradeDone+")
                    <td>Currency Accuired</td>
                    @elseif($tran['change_type']=="TradeSell")
                    <td>Currency Bought</td>
                    @endif
                    <td>{{$tran['change_currency']}}</td>
                    @if ($tran['new_value']-$tran['old_value']>0)
                    <td color="green">+{{$tran['new_value']-$tran['old_value']}}</td>
                    @else
                    <td>{{$tran['new_value']-$tran['old_value']}}</td>
                    @endif
                    <td>{{$tran['old_value']}}</td>
                    <td>{{$tran['new_value']}}</td>
                    @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-12 text-center">
                {{$transaction->links()}}
            </div>
        </div>
    </div>
</main>
</div>
</div>
@endsection