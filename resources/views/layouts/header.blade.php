<header class="fixed flex justify-center w-full shadow">
    <div class="flex justify-between items-center p-2 w-full max-w-[800px]">
        <a href="{{route('home')}}" class="text-lg font-semibold ">
            Inicio
        </a>
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
