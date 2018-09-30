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
              <h5 class="heading-component-title">{{$group->club}} - {{$group->name}}
              </h5>
            </div>
          </article>

          <div class="tabs-custom tabs-horizontal tabs-modern" id="tabs-modern">
            <ul class="nav nav-tabs">
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#info" data-toggle="tab">info</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#members" data-toggle="tab">Members {{$group->number_members}}</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#discussion" data-toggle="tab">Discussion</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="info">
                <!-- Post Classic-->
                <article class="post-classic">
                  <table class="col-md-6 col-sm-12">
                    <tr>
                      <th>Created By</th>
                      <td>{{$group->creator}}</td>
                    </tr>
                    <tr>
                      <th>Current Members</th>
                      <td>{{$group->number_members}}</td>
                    </tr>
                    <tr>
                      <th>Rating</th>
                      <td>
                        <ul class="product-rating">
                          <li><span class="material-icons-star"></span></li>
                          <li><span class="material-icons-star"></span></li>
                          <li><span class="material-icons-star"></span></li>
                          <li><span class="material-icons-star"></span></li>
                          <li><span class="material-icons-star_half"></span></li>
                        </ul>
                      </td>
                    </tr>
                  </table>
                </article>
              </div>
              <div class="tab-pane fade" id="members">
                @foreach($members as $member)
                <!-- Post Classic-->
                <article class="post-classic">
                  <div class="post-classic-aside">
                    <div class="comment-classic-header-aside">
                      <img src="{{URL::asset('Home_files/user-1-63x63.jpg')}}" alt="" width="63" height="63">
                    </div>
                  </div>
                  <div class="post-classic-main">
                    <p class="post-classic-title"><a href="#">{{$member->name}}</a></p>
                    <div class="post-classic-time">
                      <span class="icon mdi mdi-clock"></span>
                      <span alt="remove member" class="icon fa fa-trash"></span>
                    </div>
                  </div>
                </article>
                @endforeach
              </div>
              <div class="tab-pane fade" id="discussion">
                <!-- Post Classic-->
                <article class="post-classic">
                  <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-1-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
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
