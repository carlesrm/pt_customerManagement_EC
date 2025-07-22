<header class="fixed flex justify-center w-full shadow">
    <div class="flex justify-between items-center p-2 w-full max-w-[800px]">
        <div class="flex gap-x-3 items-center">
            <a href="{{route('home')}}" class="text-lg font-semibold hover:underline transition-all {{ Route::is('home') ? 'underline' : ''}}">
                Clientes
            </a>
            <a href="{{route('orders.index')}}" class="text-lg font-semibold hover:underline transition-all {{ Route::is('orders.index') ? 'underline' : ''}}">
                Pedidos
            </a>
        </div>
        <div class="flex gap-x-3">
            <a href="{{route('customers.add')}}" class="button">
                + Cliente
            </a>
            <a href="{{route('orders.add')}}" class="button">
                + Pedido
            </a>
        </div>
    </div>
</header>
