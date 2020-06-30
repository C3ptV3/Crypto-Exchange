@extends('layouts.app')
@section('sidebar')
<div>
</div>
@endsection
@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    @if (!empty($errors1['error']))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors1 as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (!empty($success1['success']))
    @foreach ($success1 as $success)
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>
    </div>
    @endforeach
    @endif
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Issued Trades</h1>

    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Selling</th>
                    <th>Buying</th>
                    <th>Price</th>
                    <th>Selling Value</th>
                    <th>Buying Value</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trades as $trade)
                <tr>
                    <td>{{$trade['trade_from']}}</td>
                    <td>{{$trade['trade_to']}} </td>
                    <td>{{$trade['trade_price']}}</td>
                    <td>{{$trade['trade_from_value']}}</td>
                    <td>{{$trade['trade_to_value']}}</td>
                    @if ($trade['customer_id']==$user['id'])
                    <td> Your trade issue </a>
                    </td>
                    @else
                    <td><a href="{{ url('/transactions/'.$trade['trade_id']) }}">
                            <i class="glyphicon glyphicon-home"></i>
                            Buy </a>
                    </td>
                    @endif
                </tr>
                @endforeach



            </tbody>

        </table>

    </div>
    <div class="row">
        <div class="col-12 text-center">
            {{$trades->links()}}
        </div>
    </div>
    </div>



</main>
@endsection