{{--@extends('layouts.master')--}}


{{--@section('title', 'Home Page')--}}

{{--@section('content')--}}

{{--<h1 class="text-3xl text-blue-500 font-bold">Welcome to Home Page</h1>--}}
{{--<p class="text-justify font-semibold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci animi at delectus doloremque dolorum--}}
{{--    eaque ex harum id itaque, iure laudantium minima neque quam quod soluta voluptate voluptates voluptatum.</p>--}}
{{--@endsection--}}


<x-main>
    <x-slot:title>
        Home Page
    </x-slot:title>

    <h1>Welcome to Home Page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta earum hic id illo magni modi natus necessitatibus
        omnis, quis velit! Aliquam doloremque fugiat inventore odit quod suscipit vel voluptatem? Ipsam!</p>
</x-main>
