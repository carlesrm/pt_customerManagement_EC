@extends('layouts.root')

@section('title', 'Customers')

@section('content')
    <div>
        <h1 class="text-2xl font-bold">Lista de Clientes</h1>
        <div class="grid grid-cols-3 gap-3 mt-3">
            @foreach($customers as $customer)
                <div class="relative flex flex-col gap-y-1 p-4 border border-gray-200 shadow-md hover:shadow-lg rounded-lg cursor-pointer js-show-customer transition-shadow duration-75" data-id="{{ $customer->id }}">
                    <div class="absolute top-1.5 right-3 js-options z-10">
                        <button class="p-1 hover:bg-gray-200 rounded-full transition-colors duration-75 cursor-pointer js-options-open">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600 hover:text-gray-900" width="1.25rem" height="1.25rem" viewBox="0 0 1024 1024"><path fill="currentColor" d="M899.4 638.2h-27.198c-2.2-.6-4.2-1.6-6.4-2c-57.2-8.8-102.4-56.4-106.2-112.199c-4.401-62.4 31.199-115.2 89.199-132.4c7.6-2.2 15.6-3.8 23.399-5.8h27.2c1.8.6 3.4 1.6 5.4 1.8c52.8 8.6 93 46.6 104.4 98.6c.8 4 2 8 3 12v27.2c-.6 1.8-1.6 3.6-1.8 5.4c-8.4 52-45.4 91.599-96.801 103.6c-5 1.2-9.6 2.6-14.2 3.8zM130.603 385.8l27.202.001c2.2.6 4.2 1.6 6.4 1.8c57.6 9 102.6 56.8 106.2 113.2c4 62.2-32 114.8-90.2 131.8c-7.401 2.2-15 3.8-22.401 5.6h-27.2c-1.8-.6-3.4-1.6-5.2-2c-52-9.6-86-39.8-102.2-90.2c-2.2-6.6-3.4-13.6-5.2-20.4v-27.2c.6-1.8 1.6-3.6 1.8-5.4c8.6-52.2 45.4-91.6 96.8-103.6c4.8-1.201 9.4-2.401 13.999-3.601zm370.801.001h27.2c2.2.6 4.2 1.6 6.4 2c57.4 9 103.6 58.6 106 114.6c2.8 63-35.2 116.4-93.8 131.4c-6.2 1.6-12.4 3-18.6 4.4h-27.2c-2.2-.6-4.2-1.6-6.4-2c-57.4-8.8-103.601-58.6-106.2-114.6c-3-63 35.2-116.4 93.8-131.4c6.4-1.6 12.6-3 18.8-4.4z"/></svg>
                        </button>
                        <div class="flex flex-col absolute top-2 left-1/2 -translate-x-1/2 w-fit h-fit border border-gray-200 rounded-lg overflow-hidden shadow-sm options-menu js-options-menu">
                            <a
                                onclick="event.stopPropagation()"
                                href="{{ route('customers.update', ['customerId' => $customer->id]) }}"
                                class="bg-yellow-100 hover:bg-yellow-200 text-yellow-700 py-1.5 px-3 cursor-pointer"
                            >
                                Editar
                            </a>
                            <form  action="{{ route('customers.delete', $customer->id) }}" method="POST" class="js-delete-customer">
                                @csrf
                                @method('DELETE')
                                <button
                                    onclick="event.stopPropagation()"
                                    type="submit"
                                    class="bg-red-100 hover:bg-red-200 text-red-700 py-1.5 px-3 cursor-pointer"
                                >
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500" width="1.25rem" height="1.25rem" viewBox="0 0 24 24"><path fill="currentColor" d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/></svg>
                        {{ $customer->name }}
                    </div>
                    <div class="flex items-center gap-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500" width="1.25rem" height="1.25rem" viewBox="0 0 20 20"><path fill="currentColor" d="m19.799 5.165l-2.375-1.83a1.997 1.997 0 0 0-.521-.237A2.035 2.035 0 0 0 16.336 3H9.5l.801 5h6.035c.164 0 .369-.037.566-.098s.387-.145.521-.236l2.375-1.832c.135-.091.202-.212.202-.334s-.067-.243-.201-.335zM8.5 1h-1a.5.5 0 0 0-.5.5V5H3.664c-.166 0-.37.037-.567.099c-.198.06-.387.143-.521.236L.201 7.165C.066 7.256 0 7.378 0 7.5c0 .121.066.242.201.335l2.375 1.832c.134.091.323.175.521.235c.197.061.401.098.567.098H7v8.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-17a.5.5 0 0 0-.5-.5z"/></svg>
                        {{ $customer->address }}
                    </div>
                    <div class="flex items-center gap-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500" width="1.25rem" height="1.25rem" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M14.95 3.684L8.637 8.912a1 1 0 0 1-1.276 0l-6.31-5.228A.999.999 0 0 0 1 4v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a.999.999 0 0 0-.05-.316M2 2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2m-.21 1l5.576 4.603a1 1 0 0 0 1.27.003L14.268 3z"/></svg>
                        {{ $customer->email }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        document?.addEventListener('DOMContentLoaded', () => {
            const customerCards = document?.querySelectorAll('.js-show-customer');
            const menuBtns = document?.querySelectorAll('.js-options-open');
            const customerDeletes = document?.querySelectorAll('.js-delete-customer');

            document.addEventListener('click', (e) => {
                menuBtns.forEach(btn => {
                    const menu = btn.closest('.js-options')?.querySelector('.js-options-menu');
                    const isClickInside = btn.contains(e.target) || menu.contains(e.target);

                    if (!isClickInside) {
                        menu.classList.remove('options-menu--opened');
                    }
                });
            });

            customerCards?.forEach(card => {
                card?.addEventListener('click', (e) => {
                    const customerId = e?.currentTarget?.dataset?.id;

                    window.location.href = '/customers/info/' + customerId;
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

            customerDeletes?.forEach(customer => {
                customer?.addEventListener('submit', (e) => {
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
