@extends('layouts.main')
@section('title', "FreeDoctor")

@section('content')
@include('home-partials.hero')
@include('home-partials.step')
@include('home-partials.stats')
@include('home-partials.testimonies')
@include('home-partials.features')
@endsection
