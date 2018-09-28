@extends('layouts.app')

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $crumb = 'News'; ?>
<title>{{ config('app.name', $crumb) }}</title>
@endsection

@include('layouts.header')
@include('layouts.page-top')
@section('content')
<!-- News 3-->
<section class="section section-sm bg-gray-100">
  <div class="container">
    <div class="row row-30">
      <div class="col-lg-8">
        <!-- Heading Component-->
        <article class="heading-component">
          <div class="heading-component-inner">
            <h5 class="heading-component-title">Latest News
            </h5>
          </div>
        </article>

        <!-- Post Future-->
        <article class="post-future post-future-horizontal"><a class="post-future-figure" href="blog-post.html"><img src="./Home_files/news-3-1-370x325.jpg" alt="" width="370" height="325"></a>
          <div class="post-future-main">
            <h4 class="post-future-title"><a href="blog-post.html">Zidane: “We’re not going to change the way we play at the Calderón”</a></h4>
            <div class="post-future-meta">
              <!-- Badge-->
              <div class="badge badge-red">Hot<span class="icon mdi mdi-fire"></span>
              </div>
              <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                <time datetime="2018">April 15, 2018</time>
              </div>
            </div>
            <hr>
            <div class="post-future-text">
              <p>Zidane spoke to the media at the Real Madrid City. The Whites coach explained how the team is going in to the second leg of the Champions...</p>
            </div>
          </div>
        </article>
        <!-- Post Future-->
        <article class="post-future post-future-horizontal"><a class="post-future-figure" href="blog-post.html"><img src="./Home_files/news-3-2-370x325.jpg" alt="" width="370" height="325"></a>
          <div class="post-future-main">
            <h4 class="post-future-title"><a href="blog-post.html">NFL Will Handle Referee Pete Morelli’s Use of Profanity Internally</a></h4>
            <div class="post-future-meta">
              <!-- Badge-->
              <div class="badge badge-primary">The League
              </div>
              <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                <time datetime="2018">April 15, 2018</time>
              </div>
            </div>
            <hr>
            <div class="post-future-text">
              <p>The NFL will internally address referee Pete Morelli's recent microphone gaffe, a league spokesman said, but it does not appear Morelli...</p>
            </div>
          </div>
        </article>
        <!-- Post Future-->
        <article class="post-future post-future-horizontal"><a class="post-future-figure" href="blog-post.html"><img src="./Home_files/news-3-3-370x325.jpg" alt="" width="370" height="325"></a>
          <div class="post-future-main">
            <h4 class="post-future-title"><a href="blog-post.html">Everton and Brighton are battling for the signature of Zohore</a></h4>
            <div class="post-future-meta">
              <!-- Badge-->
              <div class="badge badge-red">Hot<span class="icon mdi mdi-fire"></span>
              </div>
              <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                <time datetime="2018">April 15, 2018</time>
              </div>
            </div>
            <hr>
            <div class="post-future-text">
              <p>Zohore, 23, finished last season as Cardiff's top scorer with 12 goals and has flourished since the arrival of Neil Warnock as manager. </p>
            </div>
          </div>
        </article>
        <!-- Post Future-->
        <article class="post-future post-future-horizontal"><a class="post-future-figure" href="blog-post.html"><img src="./Home_files/news-3-4-370x325.jpg" alt="" width="370" height="325"></a>
          <div class="post-future-main">
            <h4 class="post-future-title"><a href="blog-post.html">Nothing has changed at Arsenal ten years after their loss</a></h4>
            <div class="post-future-meta">
              <!-- Badge-->
              <div class="badge badge-primary">The League
              </div>
              <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                <time datetime="2018">April 15, 2018</time>
              </div>
            </div>
            <hr>
            <div class="post-future-text">
              <p>Six years ago today, Arsenal suffered perhaps the worst humiliation of Arsene Wenger's time in charge, an 8-2 defeat to Manchester United at...</p>
            </div>
          </div>
        </article>
        <!-- Post Future-->
        <article class="post-future post-future-horizontal"><a class="post-future-figure" href="blog-post.html"><img src="./Home_files/news-3-5-370x325.jpg" alt="" width="370" height="325"></a>
          <div class="post-future-main">
            <h4 class="post-future-title"><a href="blog-post.html">Coutinho’s camp: It was all Barca’s fault and we can prove it</a></h4>
            <div class="post-future-meta">
              <!-- Badge-->
              <div class="badge badge-red">Hot<span class="icon mdi mdi-fire"></span>
              </div>
              <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                <time datetime="2018">April 15, 2018</time>
              </div>
            </div>
            <hr>
            <div class="post-future-text">
              <p>Philippe Coutinho is reportedly seeking clear-the-air talks with Liverpool after Barcelona gave up on trying to sign the Brazilian. Barca... </p>
            </div>
          </div>
        </article>
        <!-- Post Future-->
        <article class="post-future post-future-horizontal"><a class="post-future-figure" href="blog-post.html"><img src="./Home_files/news-3-6-370x325.jpg" alt="" width="370" height="325"></a>
          <div class="post-future-main">
            <h4 class="post-future-title"><a href="blog-post.html">Premier League Winners and Losers: a quick look at recent changes</a></h4>
            <div class="post-future-meta">
              <!-- Badge-->
              <div class="badge badge-primary">The League
              </div>
              <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                <time datetime="2018">April 15, 2018</time>
              </div>
            </div>
            <hr>
            <div class="post-future-text">
              <p>During this year’s premier league, we are glad to announce that there are new players who are worth your attention. In this article, we’ll discuss...</p>
            </div>
          </div>
        </article>
        <nav class="pagination-wrap" aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="news.html#">1</a></li>
            <li class="page-item"><a class="page-link" href="news.html#">2</a></li>
            <li class="page-item"><a class="page-link" href="news.html#">3</a></li>
            <li class="page-item"><span class="page-link">...</span></li>
            <li class="page-item"><a class="page-link" href="news.html#">14</a></li>
          </ul>
        </nav>
      </div>
      @include('layouts.sidebar')
    </div>
  </div>
</section>
@endsection
