@extends('layouts.app')

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $crumb = '404'; ?>
<title>{{ config('app.name', $crumb) }}</title>
@endsection

@include('layouts.header')
@include('layouts.page-top')
@section('content')
<!-- Search results-->
<section class="section-md bg-gray-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-xl-8">
        <!-- RD Search-->
        <article class="heading-component">
          <div class="heading-component-inner">
            <h5 class="heading-component-title">{{$message}}
            </h5>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>
<section class="section-md bg-gray-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-xl-8">
      <div class="heading-component-aside">
        <div class="rd-search-modern">
          <form class="rd-form rd-search rd-form-inline" action="search-results.html" method="GET">
            <div class="form-wrap">
              <label class="form-label rd-input-label" for="rd-search-form-input">Enter your search request</label>
              <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
            </div>
            <button class="rd-search-form-submit fl-budicons-launch-search81" type="submit"></button>
          </form>
        </div>
        <div class="rd-search-results"></div>
      </div>
    </div>
  </div>
</section>
@endsection
