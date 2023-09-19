@extends('layouts.app')

@section('content')
<link href="/layouit/css/bootstrap.min.css" rel="stylesheet">
<link href="/layouit/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <livewire:ver-carusel-component />

        </div>
    </div>
</div>

    <script src="/layouit/js/jquery.min.js"></script>
    <script src="/layouit/js/bootstrap.min.js"></script>
    <script src="/layouit/js/scripts.js"></script>

@endsection
