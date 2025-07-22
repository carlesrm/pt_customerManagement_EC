@extends('layouts.root')

@section('title', 'Pedidos')

@section('content')
    <div class="w-full">
        <h1 class="text-2xl font-bold">Lista de Pedidos</h1>
        <div class="grid grid-cols-3 w-full gap-3 mt-3">
            @foreach($orders as $order)
                <div class="relative flex flex-col gap-y-1 p-4 bg-gray-50 border border-gray-200 shadow-md hover:shadow-lg rounded-lg cursor-pointer js-card transition-shadow duration-75" data-id="{{ $order->id }}">
                    <div class="absolute top-1.5 right-3 js-options z-10">
                        <button class="p-1 hover:bg-gray-200 rounded-full transition-colors duration-75 cursor-pointer js-options-open">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600 hover:text-gray-900" width="1.25rem" height="1.25rem" viewBox="0 0 1024 1024"><path fill="currentColor" d="M899.4 638.2h-27.198c-2.2-.6-4.2-1.6-6.4-2c-57.2-8.8-102.4-56.4-106.2-112.199c-4.401-62.4 31.199-115.2 89.199-132.4c7.6-2.2 15.6-3.8 23.399-5.8h27.2c1.8.6 3.4 1.6 5.4 1.8c52.8 8.6 93 46.6 104.4 98.6c.8 4 2 8 3 12v27.2c-.6 1.8-1.6 3.6-1.8 5.4c-8.4 52-45.4 91.599-96.801 103.6c-5 1.2-9.6 2.6-14.2 3.8zM130.603 385.8l27.202.001c2.2.6 4.2 1.6 6.4 1.8c57.6 9 102.6 56.8 106.2 113.2c4 62.2-32 114.8-90.2 131.8c-7.401 2.2-15 3.8-22.401 5.6h-27.2c-1.8-.6-3.4-1.6-5.2-2c-52-9.6-86-39.8-102.2-90.2c-2.2-6.6-3.4-13.6-5.2-20.4v-27.2c.6-1.8 1.6-3.6 1.8-5.4c8.6-52.2 45.4-91.6 96.8-103.6c4.8-1.201 9.4-2.401 13.999-3.601zm370.801.001h27.2c2.2.6 4.2 1.6 6.4 2c57.4 9 103.6 58.6 106 114.6c2.8 63-35.2 116.4-93.8 131.4c-6.2 1.6-12.4 3-18.6 4.4h-27.2c-2.2-.6-4.2-1.6-6.4-2c-57.4-8.8-103.601-58.6-106.2-114.6c-3-63 35.2-116.4 93.8-131.4c6.4-1.6 12.6-3 18.8-4.4z"/></svg>
                        </button>
                        <div class="flex flex-col absolute top-2 left-1/2 -translate-x-1/2 w-fit h-fit border border-gray-200 rounded-lg overflow-hidden shadow-sm options-menu js-options-menu">
                            <a
                                onclick="event.stopPropagation()"
                                href="{{ route('orders.update', ['orderId' => $order->id]) }}"
                                class="bg-yellow-100 hover:bg-yellow-200 text-yellow-700 py-1.5 px-3 cursor-pointer"
                            >
                                Editar
                            </a>
                            <form  action="{{ route('orders.delete', $order->id) }}" method="POST" class="js-delete-order">
                                @csrf
                                @method('DELETE')
                                <button
                                    onclick="event.stopPropagation()"
                                    type="submit"
                                    class="bg-red-100 hover:bg-red-200 text-red-700 py-1.5 px-3 cursor-pointer"
                                >
                                    Borrar
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500" width="1.25rem" height="1.25rem" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m11.492 4.067l5 2.857A2 2 0 0 1 17.5 8.661v4.678a2 2 0 0 1-1.008 1.737l-5 2.857a2 2 0 0 1-1.984 0l-5-2.857A2 2 0 0 1 3.5 13.339V8.661a2 2 0 0 1 1.008-1.737l5-2.857a2 2 0 0 1 1.984 0zM14 9.5l-7-4"/><path d="m4 8l5.552 2.99a2 2 0 0 0 1.896 0L17 8m-6.5 3.5V18"/></g></svg>
                        {{ $order->id }}
                    </div>
                    <div class="flex items-center gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500" width="1.25rem" height="1.25rem" viewBox="0 0 20 20"><path fill="currentColor" d="M5.673 0a.7.7 0 0 1 .7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699ZM1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756L1.4 7.742Zm5.267 6.877v1.666H5v-1.666h1.667Zm4.166 0v1.666H9.167v-1.666h1.666Zm4.167 0v1.666h-1.667v-1.666H15Zm-8.333-3.977v1.666H5v-1.666h1.667Zm4.166 0v1.666H9.167v-1.666h1.666Zm4.167 0v1.666h-1.667v-1.666H15ZM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0v-.92Z"/></svg>
                        {{ $order->delivery_date }}
                    </div>
                    <div class="flex items-center gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500" width="1.25rem" height="1.25rem" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M14.95 3.684L8.637 8.912a1 1 0 0 1-1.276 0l-6.31-5.228A.999.999 0 0 0 1 4v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a.999.999 0 0 0-.05-.316M2 2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2m-.21 1l5.576 4.603a1 1 0 0 0 1.27.003L14.268 3z"/></svg>
                        {{ $order->customer->email }}
                    </div>
                    <div class="flex items-center gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500" width="1.25rem" height="1.25rem" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 11h10M7 14h4m3.828 4H19a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.188c1 0 1.812.811 1.812 1.812v0c0 .808.976 1.212 1.547.641l1.867-1.867A2 2 0 0 1 14.828 18z"/></svg>
                        {{ $order->comment }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        document?.addEventListener('DOMContentLoaded', () => {
            const orderCards = document?.querySelectorAll('.js-card');
            const menuBtns = document?.querySelectorAll('.js-options-open');
            const orderDeletes = document?.querySelectorAll('.js-delete-order');

            document.addEventListener('click', (e) => {
                menuBtns.forEach(btn => {
                    const menu = btn.closest('.js-options')?.querySelector('.js-options-menu');
                    const isClickInside = btn.contains(e.target) || menu.contains(e.target);

                    if (!isClickInside) {
                        menu.classList.remove('options-menu--opened');
                    }
                });
            });

            orderCards?.forEach(card => {
                card?.addEventListener('click', (e) => {
                    const orderId = e?.currentTarget?.dataset?.id;

                    window.location.href = '/orders/info/' + orderId;
                })
            })

            menuBtns?.forEach(btn => {
                btn?.addEventListener('click', (e) => {
                    e?.stopPropagation();
                    const btn = e.currentTarget;
                    const menu = btn.closest('.js-options')?.querySelector('.js-options-menu');

                    menu.classList.toggle('options-menu--opened');
                })
            })

            orderDeletes?.forEach(order => {
                order?.addEventListener('submit', (e) => {
                    e.stopPropagation();
                    e.preventDefault();

                    if (confirm('Estas seguro?')) {
                        e.target.submit();
                    }
                })
            })
        });
    </script>
@endsection
