@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
    <style>
        form.bg-white.p-6.rounded.shadow-md {
            margin: 100px auto;
            background-color: white;
            padding: 20px;
        }

        input#email{
            width: 100%;
            padding: 5px;
        }

        button.bg-blue-500 {
            width: 100%;
            border: none;
            border-radius: 7px;
            padding: 8px;
            color: white;
            background-color: #3298dc;
        }

        div.text-red-500.text-xs{
            color: red;
        }

    </style>
@endsection

@section('content')
<form action="/contact" method="POST" class="bg-white p-6 rounded shadow-md" style="width: 300px">
    @csrf
    <div class="mb-5 field">
        <label for="email" class="label black text-xs uppercase font-semibold mb-1">
            EMAIL ADDRESS
        </label>
        <input type="email" required placeholder="you@website.com" id="email" name="email" class="border px-2 py-1 text-sm m-full">
    </div>
    @error('email')
        <div class="text-red-500 text-xs">{{$message}}</div>
    @enderror

    <button type="submit" class="bg-blue-500">
        Email Me
    </button>
<p style="color:green">{{session('message') }}</p>
</form>
@endsection
