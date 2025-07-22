@extends('layouts.root')

@section('title', 'Editar pedido')

@section('content')
    <form method="POST" action="{{route('orders.update.post', ['orderId' => $order->id])}}" class="flex flex-col gap-y-3 p-10 shadow-xl border border-primary rounded-lg">
        @csrf
        <div class="flex flex-col">
            <label for="delivery_date">Fecha de entrega</label>
            <input type="date" name="delivery_date" value="{{ $order->delivery_date }}"/>
        </div>
        <div class="flex flex-col">
            <label for="comment">Observaciones</label>
            <textarea name="comment" cols="30">{{ $order->comment }}</textarea>
        </div>
        <div class="flex justify-between gap-x-3">
            <button type="submit" class="button">Actualizar Pedido</button>
            <a href="{{ route('orders.index') }}" class="button-inverted">Cancelar</a>
        </div>
    </form>
@endsection
