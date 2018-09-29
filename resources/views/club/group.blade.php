@extends('layouts.app')

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $crumb = $group->name; ?>
<title>{{ config('app.name', $crumb) }}</title>
@endsection

@include('layouts.header')
@include('layouts.page-top')
@section('content')

<section class="section section-sm bg-gray-100">
  <div class="container">
    <div class="row row-30">
      <div class="col-lg-8">
        <div class="block-aside-item">
          <!-- Heading Component-->
          <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">{{$group->name}}
              </h5>
            </div>
          </article>

          <div class="tabs-custom tabs-horizontal tabs-modern" id="tabs-modern">
            <ul class="nav nav-tabs">
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-modern-1" data-toggle="tab">info</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-modern-2" data-toggle="tab">Members</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-modern-3" data-toggle="tab">Discussion</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-modern-1">
                <!-- Post Classic-->
                <article class="post-classic">
                  <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="./Home_files/blog-element-5-94x94.jpg" alt="" width="94" height="94"></a></div>
                  <div class="post-classic-main">
                    <p class="post-classic-title"><a href="blog-post.html">Alvaro Morata proving his worth at Chelsea</a></p>
                    <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018
                        <!-- Tabs Modern with Post Classic-->
                      </time>
                    </div>
                  </div>
                </article>
              </div>
              <div class="tab-pane fade" id="tabs-modern-2">
                <!-- Post Classic-->
                <article class="post-classic">
                  <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="./Home_files/blog-element-2-94x94.jpg" alt="" width="94" height="94"></a></div>
                  <div class="post-classic-main">
                    <p class="post-classic-title"><a href="blog-post.html">Are Bournemouth in trouble this season?</a></p>
                    <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018
                        <!-- Tabs Modern with Post Classic-->
                      </time>
                    </div>
                  </div>
                </article>
              </div>
              <div class="tab-pane fade" id="tabs-modern-3">
                <!-- Post Classic-->
                <article class="post-classic">
                  <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="./Home_files/blog-element-1-94x94.jpg" alt="" width="94" height="94"></a></div>
                  <div class="post-classic-main">
                    <p class="post-classic-title"><a href="blog-post.html">Premier League Preview Part 3: Survival Battle</a></p>
                    <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018
                        <!-- Tabs Modern with Post Classic-->
                      </time>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
