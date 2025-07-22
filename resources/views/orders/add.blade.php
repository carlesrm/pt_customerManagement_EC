@extends('layouts.root')

@section('title', 'Crear Pedido')

@section('content')
    <form method="POST" action="{{route('orders.add.post')}}" class="flex flex-col gap-y-3 p-10 shadow-xl border border-primary rounded-lg">
        @csrf
        <div class="flex flex-col">
            <label for="customer_email">Correo del cliente</label>
            <input type="text" name="customer_email"/>
        </div>
        <div class="flex flex-col">
            <label for="delivery_date">Fecha de entrega</label>
            <input type="date" name="delivery_date"/>
        </div>
        <div class="flex flex-col">
            <label for="comment">Observaciones</label>
            <textarea name="comment" cols="30"></textarea>
        </div>
        <div class="flex justify-between gap-x-3">
            <button type="submit" class="button">Crear Pedido</button>
            <a href="{{ route('orders.index') }}" class="button-inverted">Cancelar</a>
        </div>
    </form>
@endsection
