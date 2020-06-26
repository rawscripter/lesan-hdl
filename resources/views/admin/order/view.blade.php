@extends('layouts.admin.layout')
@section('content')
    <div class="main-panel" style="width: 100% !important;">
        <div class="content-wrapper">
            <h3 class="text-center">Order number {{ $order->id }}</h3>
            <hr>
            <div class="card container shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table ">
                            <tr>
                                <th>Customer name</th>
                                <td>{{ $order->name }}</td>
                            </tr>
                            <tr>
                                <th>Customer email</th>
                                <td>{{ $order->email }}</td>
                            </tr>
                            <tr>
                                <th>Customer address</th>
                                <td>{{ $order->address }}</td>
                            </tr>
                            <tr>
                                <th>Customer city</th>
                                <td>{{ $order->city }}</td>
                            </tr>
                            <tr>
                                <th>product name</th>
                                <td>{{ $order->product->name }}</td>
                            </tr>
                            <tr>
                                <th>quantity</th>
                                <td>{{ $order->quantity }}</td>
                            </tr>
                            <tr>
                                <th>Unite price</th>
                                <td>${{ $order->unite_price }}</td>
                            </tr>
                            <tr>
                                <th>Total price</th>
                                <td>${{ $order->total }}</td>
                            </tr>
                            <tr>
                                <th>Transaction ID</th>
                                <td>{{ $order->paypal_tx_id }}</td>
                            </tr>
                            <tr>
                                <th>Ordered At</th>
                                <td>{{ $order->created_at->format('d F, Y H:i:s') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
