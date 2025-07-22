@extends('layouts.root')

@section('title', $order->id)

@section('content')
    <div class="flex flex-col">
        <div>ID Pedido: {{ $order->id }}</div>
        <div>Fecha de entrega: {{ $order->delivery_date }}</div>
        <div>Cliente: {{ $order->customer->email }}</div>
        <div>Observaciones: {{ $order->comment }}</div>
    </div>
@endsection
