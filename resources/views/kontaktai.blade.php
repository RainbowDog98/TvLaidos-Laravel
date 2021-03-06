@extends('layouts.app')

@section('banner')
    <img src="images/durga.jpg" style="width: 900px; height: 250px;">
@endsection

@section('active-kontaktai')
    class="active"
@endsection

@section('contentRightParams')
    id="glowing"
@endsection

@section('content')
    <h2 id="pageTitle">Kontaktai</h2>
    <p>Adresas: <b style="font-size: 36px;">NICE</b> </p>
    <p>Telefonas: <b style="font-size: 36px;">TRY</b> </p>
    <p>El pašto adresas: <b style="font-size: 36px;">FBI</b> </p>
@endsection

@section('footer')
Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
