<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        <link href="https://fonts.cdnfonts.com/css/bai-jamjuree" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                /* font-family: 'Nunito'; */
                font-family: 'Bai Jamjuree', sans-serif;
            }
        </style>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- @livewireStyles --}}
        <livewire:styles />
    </head>
    <body class="antialiased">
        <nav class="flex text-white bg-slate-700">
            <a  href="/counter" 
                class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('counter')) ? 'bg-slate-800' : '' }}"
            >ตัวนับ</a>

            <a  href="/calculator"
                class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('calculator')) ? 'bg-slate-800' : '' }}"
            >เครื่องคิดเลข</a>
            
            <a  href="/todo-list"
                class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('todo-list')) ? 'bg-slate-800' : '' }}"
            >TodoList</a>

            <a  href="/cascading-dropdown"
                class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('cascading-dropdown')) ? 'bg-slate-800' : '' }}"
            >Cascading Dropdrown</a>

            <a  href="/products"
                class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('products')) ? 'bg-slate-800' : '' }}"
            >ค้นหาสินค้า</a>

            <a  href="/image-upload"
                class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('image-upload')) ? 'bg-slate-800' : '' }}"
            >อัพโหลดรูปภาพ</a>

            <a  href="/register"
                class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('register')) ? 'bg-slate-800' : '' }}"
            >ลงทะเบียน</a>
        </nav>

        {{ $slot }}

        <livewire:scripts />
    </body>
</html>
