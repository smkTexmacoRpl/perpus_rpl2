@extends('layouts.dash')
@section('content')
<p>Selamat datang di halaman dashboard admin. Bapak/Ibu: {{Auth::user()->name}}</p>
@include('layouts.partials.main')
@endsection