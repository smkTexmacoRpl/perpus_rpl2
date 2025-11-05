@extends('layouts.app')
@section('content')
<div>
    <!-- Be present above all else. - Naval Ravikant -->
    @foreach ($bukus as $buku)
    {{ $buku }}
    @endforeach
</div>
@endsection