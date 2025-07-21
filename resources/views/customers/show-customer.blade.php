@extends('layouts.root')

@section('title', 'Customers')

@section('content')
    <div class="flex flex-col">
        <div>Nombre: {{ $customer->name }}</div>
        <div>Dirección: {{ $customer->address }}</div>
        <div>Correo electrónico: {{ $customer->email }}</div>
    </div>
@endsection
