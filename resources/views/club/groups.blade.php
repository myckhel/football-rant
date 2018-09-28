@extends('layouts.app')

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $crumb = 'Groups'; ?>
<title>{{ config('app.name', $crumb) }}</title>
@endsection

@include('layouts.header')
@include('layouts.page-top')
@section('content')
<section class="section section-sm bg-gray-100">
  <div class="container">
    <div class="row row-30">
      <div class="col-lg-8">
        <!-- Heading Component-->

      </div>
      @include('layouts.sidebar')
    </div>
  </div>
</section>
@endsection

@section('js')
<script>
  
</script>
@endsection
