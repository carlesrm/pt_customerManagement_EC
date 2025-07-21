@extends('layouts.root')

@section('title', 'Añadir Cliente')

@section('content')
    <form method="POST" action="{{route('customers.update.post', ['customerId' => $customer->id])}}" class="flex flex-col gap-y-3 p-10 shadow-xl border border-primary rounded-lg">
        @csrf
        <div class="flex flex-col">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{ $customer->name }}"/>
        </div>
        <div class="flex flex-col">
            <label for="address">Dirección</label>
            <input type="text" name="address" value="{{ $customer->address }}"/>
        </div>
        <div class="flex flex-col">
            <label for="email">Correo Electrónico</label>
            <input type="text" name="email" value="{{ $customer->email }}"/>
        </div>
        <div class="flex justify-between gap-x-3">
            <button type="submit" class="button">Guardar</button>
            <a href="{{ route('home') }}" class="button-inverted">Cancelar</a>
        </div>
    </form>
@endsection
