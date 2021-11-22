@extends('layout.main')
@section('title', 'About Page')
@section('css')
<link rel="stylesheet" href="{{url('css/about.css')}}">
@endsection
@section('content')

<h1 class="text">About Page</h1>
<img src="{{'image/img.jpg'}}" alt="Image">
@endsection

@section('js')

<script src="{{asset('js/about.js')}}">

</script>

@endsection
