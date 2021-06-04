@extends('default.layout')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ Auth::user()->name }}</p>

    <?php $_SESSION['usuario'] = "bola" ?>


    @if ($_SESSION['usuario'] != 'bola')
        abcde
    @else
        bola
    @endif
@endsection
