{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
@php
  $rnd = rand (1,3);
  // $pos = ($rnd == 1) ? "50px 0;" : ($rnd == 3) ? "20px 0;" : "top left";    
@endphp
<style type="text/css">
body {
  background: url('../images/background-<?= $rnd; ?>.jpg') no-repeat center center fixed;
}
</style>
    @include('partials/home.section1')
    {{-- {!! do_shortcode('[wdi_feed id="1"]') !!} --}}
    {{-- {!! do_shortcode('[instagram-feed feed=1 class="container px-8 lg:px-16"]') !!} --}}
    {{-- {!! do_shortcode('[contact-form-7 id="20" title="Formulario"]') !!} --}}
@endsection
