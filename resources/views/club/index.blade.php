@extends('layouts.app')

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name', 'Club') }}</title>
@endsection

@include('layouts.header')
@include('layouts.home-top')
@section('content')
<!-- Latest News-->
<section class="section section-md bg-gray-100">
  <div class="container">
    <div class="row row-50">
      <div class="col-md-12 owl-carousel-outer-navigation">
        <!-- Heading Component-->
        <article class="heading-component">
          <div class="heading-component-inner">
            <h5 class="heading-component-title">Latest News
            </h5>
            <div class="owl-carousel-arrows-outline">
              <div class="owl-nav">
                <button class="owl-arrow owl-arrow-prev"></button>
                <button class="owl-arrow owl-arrow-next"></button>
              </div>
            </div>
          </div>
        </article>

        <!-- Owl Carousel-->
        <div class="owl-carousel owl-loaded" data-items="1" data-md-items="2" data-lg-items="3" data-autoplay="true" data-autoplay-speed="6500" data-dots="false" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-nav-custom=".owl-carousel-outer-navigation">
          <!-- Post Carmen-->

          <!-- Post Carmen-->

          <!-- Post Carmen-->

        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2000px, 0px, 0px); transition: all 0.25s ease 0s; width: 3600px;"><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="{{URL::asset('Home_files/news-5-2-369x343.jpg')}}" alt="" width="369" height="343">
            <div class="post-carmen-header">
              <!-- Badge-->
              <div class="badge badge-secondary">The Team
              </div>
            </div>
            <div class="post-carmen-main">
              <h4 class="post-carmen-title"><a href="blog-post.html">Daily top 10 news: Chelsea, world cup 2018 &amp; more</a></h4>
              <div class="post-carmen-meta">
                <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                  <time datetime="2018">April 15, 2018</time>
                </div>
                <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                </div>
              </div>
            </div>
          </article></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="{{URL::asset('Home_files/news-5-3-369x343.jpg')}}" alt="" width="369" height="343">
            <div class="post-carmen-header">
              <!-- Post Video Button--><a class="post-video-button" href="#modal1" data-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>
            </div>
            <div class="post-carmen-main">
              <h4 class="post-carmen-title"><a href="blog-post.html">Liverpool must stop Coutinho from joining Barcelona</a></h4>
              <div class="post-carmen-meta">
                <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                  <time datetime="2018">April 15, 2018</time>
                </div>
                <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                </div>
              </div>
            </div>
          </article></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="{{URL::asset('Home_files/news-5-4-369x343.jpg')}}" alt="" width="369" height="343">
            <div class="post-carmen-header">
              <!-- Badge-->
              <div class="badge badge-primary">The League
              </div>
            </div>
            <div class="post-carmen-main">
              <h4 class="post-carmen-title"><a href="blog-post.html">Why would Messi swap Barca for Manchester?</a></h4>
              <div class="post-carmen-meta">
                <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                  <time datetime="2018">April 15, 2018</time>
                </div>
                <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                </div>
              </div>
            </div>
          </article></div><div class="owl-item" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="{{URL::asset('Home_files/news-5-2-369x343.jpg')}}" alt="" width="369" height="343">
            <div class="post-carmen-header">
              <!-- Badge-->
              <div class="badge badge-secondary">The Team
              </div>
            </div>
            <div class="post-carmen-main">
              <h4 class="post-carmen-title"><a href="blog-post.html">Daily top 10 news: Chelsea, world cup 2018 &amp; more</a></h4>
              <div class="post-carmen-meta">
                <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                  <time datetime="2018">April 15, 2018</time>
                </div>
                <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                </div>
              </div>
            </div>
          </article></div><div class="owl-item" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="{{URL::asset('Home_files/news-5-3-369x343.jpg')}}" alt="" width="369" height="343">
            <div class="post-carmen-header">
              <!-- Post Video Button--><a class="post-video-button" href="#modal1" data-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>
            </div>
            <div class="post-carmen-main">
              <h4 class="post-carmen-title"><a href="blog-post.html">Liverpool must stop Coutinho from joining Barcelona</a></h4>
              <div class="post-carmen-meta">
                <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                  <time datetime="2018">April 15, 2018</time>
                </div>
                <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                </div>
              </div>
            </div>
          </article></div><div class="owl-item active" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="{{URL::asset('Home_files/news-5-4-369x343.jpg')}}" alt="" width="369" height="343">
            <div class="post-carmen-header">
              <!-- Badge-->
              <div class="badge badge-primary">The League
              </div>
            </div>
            <div class="post-carmen-main">
              <h4 class="post-carmen-title"><a href="blog-post.html">Why would Messi swap Barca for Manchester?</a></h4>
              <div class="post-carmen-meta">
                <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                  <time datetime="2018">April 15, 2018</time>
                </div>
                <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                </div>
              </div>
            </div>
          </article></div><div class="owl-item cloned active" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="{{URL::asset('Home_files/news-5-2-369x343.jpg')}}" alt="" width="369" height="343">
            <div class="post-carmen-header">
              <!-- Badge-->
              <div class="badge badge-secondary">The Team
              </div>
            </div>
            <div class="post-carmen-main">
              <h4 class="post-carmen-title"><a href="blog-post.html">Daily top 10 news: Chelsea, world cup 2018 &amp; more</a></h4>
              <div class="post-carmen-meta">
                <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                  <time datetime="2018">April 15, 2018</time>
                </div>
                <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                </div>
              </div>
            </div>
          </article></div><div class="owl-item cloned active" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="{{URL::asset('Home_files/news-5-3-369x343.jpg')}}" alt="" width="369" height="343">
            <div class="post-carmen-header">
              <!-- Post Video Button--><a class="post-video-button" href="#modal1" data-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>
            </div>
            <div class="post-carmen-main">
              <h4 class="post-carmen-title"><a href="blog-post.html">Liverpool must stop Coutinho from joining Barcelona</a></h4>
              <div class="post-carmen-meta">
                <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                  <time datetime="2018">April 15, 2018</time>
                </div>
                <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                </div>
              </div>
            </div>
          </article></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="{{URL::asset('Home_files/news-5-4-369x343.jpg')}}" alt="" width="369" height="343">
            <div class="post-carmen-header">
              <!-- Badge-->
              <div class="badge badge-primary">The League
              </div>
            </div>
            <div class="post-carmen-main">
              <h4 class="post-carmen-title"><a href="blog-post.html">Why would Messi swap Barca for Manchester?</a></h4>
              <div class="post-carmen-meta">
                <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                  <time datetime="2018">April 15, 2018</time>
                </div>
                <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="#">345</a></div>
                <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                </div>
              </div>
            </div>
          </article></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots disabled"></div></div>
      </div>
      <div class="col-lg-8">
        <div class="main-component">
          <!-- Heading Component-->
          <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">Upcoming Match
              </h5><a class="button button-xs button-gray-outline" href="#">Calendar</a>
            </div>
          </article>

          <!-- Game Result Bug-->
          <article class="game-result">
            <div class="game-info game-info-creative">
              <p class="game-info-subtitle">Real Stadium -
                <time datetime="08:30"> 08:30 PM</time>
              </p>
              <h3 class="game-info-title">Champions league semi-final 2018</h3>
              <div class="game-info-main">
                <div class="game-info-team game-info-team-first">
                  <figure><img src="{{URL::asset('Home_files/team-atletico-100x100.png')}}" alt="" width="100" height="100">
                  </figure>
                  <div class="game-result-team-name">Atletico</div>
                  <div class="game-result-team-country">Italy</div>
                </div>
                <div class="game-info-middle game-info-middle-vertical">
                  <time class="time-big" datetime="2018-04-17"><span class="heading-3">Fri 19</span> May 2018
                  </time>
                  <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
                  <div class="group-sm">
                    <div class="button button-sm button-share-outline">Share
                      <ul class="game-info-share">
                        <li class="game-info-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                        <li class="game-info-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                        <li class="game-info-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                        <li class="game-info-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                      </ul>
                    </div><a class="button button-sm button-primary" href="#">Buy tickets</a>
                  </div>
                </div>
                <div class="game-info-team game-info-team-second">
                  <figure><img src="{{URL::asset('Home_files/team-bavaria-fc-113x106.png')}}" alt="" width="113" height="106">
                  </figure>
                  <div class="game-result-team-name">Celta Vigo</div>
                  <div class="game-result-team-country">Spain</div>
                </div>
              </div>
            </div>
            <div class="game-info-countdown">
              <div class="countdown countdown-bordered is-countdown" data-type="until" data-time="31 Dec 2018 16:00" data-format="dhms" data-style="short"><span class="countdown-row countdown-show4"><span class="countdown-section"><span class="countdown-amount">94</span><span class="countdown-period">Days</span></span><span class="countdown-section"><span class="countdown-amount">22</span><span class="countdown-period">Hrs</span></span><span class="countdown-section"><span class="countdown-amount">47</span><span class="countdown-period">Mins</span></span><span class="countdown-section"><span class="countdown-amount">30</span><span class="countdown-period">Secs</span></span></span></div>
            </div>
          </article>
        </div>
        <div class="main-component">
          <!-- Heading Component-->
          <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">Popular news
              </h5><a class="button button-xs button-gray-outline" href="#">All news</a>
            </div>
          </article>

          <div class="row row-30">
            <div class="col-md-6">
              <!-- Post Future-->
              <article class="post-future"><a class="post-future-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/news-2-1-368x287.jpg')}}" alt="" width="368" height="287"></a>
                <div class="post-future-main">
                  <h4 class="post-future-title"><a href="blog-post.html">Sadio mane still makes a difference, sam wilson admits</a></h4>
                  <div class="post-future-meta">
                    <!-- Badge-->
                    <div class="badge badge-secondary">The Team
                    </div>
                    <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018</time>
                    </div>
                  </div>
                  <hr>
                  <div class="post-future-text">
                    <p>Liverpool would love to welcome Philippe Coutinho back, but Sadio Mane is carrying...</p>
                  </div>
                  <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="blog-post.html">Read more</a>
                    <div class="post-future-share">
                      <div class="inline-toggle-parent">
                        <div class="inline-toggle icon material-icons-share"></div>
                        <div class="inline-toggle-element">
                          <ul class="list-inline">
                            <li>Share</li>
                            <li><a class="icon fa-facebook" href="#"></a></li>
                            <li><a class="icon fa-twitter" href="#"></a></li>
                            <li><a class="icon fa-google-plus" href="#"></a></li>
                            <li><a class="icon fa-instagram" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6">
              <!-- Post Future-->
              <article class="post-future"><a class="post-future-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/news-2-2-368x287.jpg')}}" alt="" width="368" height="287"></a>
                <div class="post-future-main">
                  <h4 class="post-future-title"><a href="blog-post.html">Robertson's decent debut at european cup 2018</a></h4>
                  <div class="post-future-meta">
                    <!-- Badge-->
                    <div class="badge badge-secondary">The Team
                    </div>
                    <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018</time>
                    </div>
                  </div>
                  <hr>
                  <div class="post-future-text">
                    <p>Robertson, in his first Anfield outing as a Liverpool player, looked assured at left-back...</p>
                  </div>
                  <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="blog-post.html">Read more</a>
                    <div class="post-future-share">
                      <div class="inline-toggle-parent">
                        <div class="inline-toggle icon material-icons-share"></div>
                        <div class="inline-toggle-element">
                          <ul class="list-inline">
                            <li>Share</li>
                            <li><a class="icon fa-facebook" href="#"></a></li>
                            <li><a class="icon fa-twitter" href="#"></a></li>
                            <li><a class="icon fa-google-plus" href="#"></a></li>
                            <li><a class="icon fa-instagram" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-12">
              <!-- Post Gloria-->
              <article class="post-gloria"><img src="{{URL::asset('Home_files/post-gloria-1-769x429.jpg')}}" alt="" width="769" height="429">
                <div class="post-gloria-main">
                  <h3 class="post-gloria-title"><a href="blog-post.html">Premier League Winners and Losers: a quick look</a></h3>
                  <div class="post-gloria-meta">
                    <!-- Badge-->
                    <div class="badge badge-primary">The League
                    </div>
                    <div class="post-gloria-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018</time>
                    </div>
                  </div>
                  <div class="post-gloria-text">
                    <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewBox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                      <path d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                    </svg>
                    <p>During this year’s premier league, we are glad to announce that there are new players who are...</p>
                  </div><a class="button" href="blog-post.html">Read more</a>
                </div>
              </article>
            </div>
            <div class="col-md-6">
              <!-- Post Future-->
              <article class="post-future"><a class="post-future-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/news-2-3-368x287.jpg')}}" alt="" width="368" height="287"></a>
                <div class="post-future-main">
                  <h4 class="post-future-title"><a href="blog-post.html">Pochettino and ‘gaffer’s son’ Rose estranged – reports</a></h4>
                  <div class="post-future-meta">
                    <!-- Badge-->
                    <div class="badge badge-secondary">The Team
                    </div>
                    <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018</time>
                    </div>
                  </div>
                  <hr>
                  <div class="post-future-text">
                    <p>Danny Rose and Mauricio Pochettino were once so close that he was nicknamed “the gaffer’s...</p>
                  </div>
                  <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="blog-post.html">Read more</a>
                    <div class="post-future-share">
                      <div class="inline-toggle-parent">
                        <div class="inline-toggle icon material-icons-share"></div>
                        <div class="inline-toggle-element">
                          <ul class="list-inline">
                            <li>Share</li>
                            <li><a class="icon fa-facebook" href="#"></a></li>
                            <li><a class="icon fa-twitter" href="#"></a></li>
                            <li><a class="icon fa-google-plus" href="#"></a></li>
                            <li><a class="icon fa-instagram" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6">
              <!-- Post Future-->
              <article class="post-future"><a class="post-future-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/news-2-4-368x287.jpg')}}" alt="" width="368" height="287"></a>
                <div class="post-future-main">
                  <h4 class="post-future-title"><a href="blog-post.html">Coutinho’s camp: It was all Barca’s fault and we can prove it</a></h4>
                  <div class="post-future-meta">
                    <!-- Badge-->
                    <div class="badge badge-secondary">The Team
                    </div>
                    <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018</time>
                    </div>
                  </div>
                  <hr>
                  <div class="post-future-text">
                    <p>Philippe Coutinho is reportedly seeking clear-the-air talks with Liverpool after...</p>
                  </div>
                  <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="blog-post.html">Read more</a>
                    <div class="post-future-share">
                      <div class="inline-toggle-parent">
                        <div class="inline-toggle icon material-icons-share"></div>
                        <div class="inline-toggle-element">
                          <ul class="list-inline">
                            <li>Share</li>
                            <li><a class="icon fa-facebook" href="#"></a></li>
                            <li><a class="icon fa-twitter" href="#"></a></li>
                            <li><a class="icon fa-google-plus" href="#"></a></li>
                            <li><a class="icon fa-instagram" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-12">
              <!-- Post Future-->
              <article class="post-future post-future-horizontal"><a class="post-future-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/news-3-1-370x325.jpg')}}" alt="" width="370" height="325"></a>
                <div class="post-future-main">
                  <h4 class="post-future-title"><a href="blog-post.html">Zidane: “We’re not going to change the way we play at the Calderón”</a></h4>
                  <div class="post-future-meta">
                    <!-- Badge-->
                    <div class="badge badge-red">hot<span class="icon mdi mdi-fire"></span>
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
            </div>
            <div class="col-md-12">
              <!-- Post Future-->
              <article class="post-future post-future-horizontal"><a class="post-future-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/news-3-2-370x325.jpg')}}" alt="" width="370" height="325"></a>
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
            </div>
          </div>
        </div>
        <div class="main-component">
          <!-- Heading Component-->
          <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">Top Players
              </h5><a class="button button-xs button-gray-outline" href="#">See all team</a>
            </div>
          </article>

          <div class="row row-30">
            <div class="col-md-6">
              <!-- Player Info Modern-->
              <div class="player-info-modern"><a class="player-info-modern-figure" href="#"><img src="{{URL::asset('Home_files/player-1-368x286.png')}}" alt="" width="368" height="286"></a>
                <div class="player-info-modern-footer">
                  <div class="player-info-modern-number">
                    <p>05</p>
                  </div>
                  <div class="player-info-modern-content">
                    <div class="player-info-modern-title">
                      <h5><a href="#">Jack Windsor</a></h5>
                      <p>Midfielder</p>
                    </div>
                    <div class="player-info-modern-progress">
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern">
                        <div class="progress-header">
                          <p>Pass Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">80</span>
                      </article>
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern">
                        <div class="progress-header">
                          <p>Shots Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">60</span>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Player Info Modern-->
              <div class="player-info-modern"><a class="player-info-modern-figure" href="#"><img src="{{URL::asset('Home_files/player-2-368x286.png')}}" alt="" width="368" height="286"></a>
                <div class="player-info-modern-footer">
                  <div class="player-info-modern-number">
                    <p>21</p>
                  </div>
                  <div class="player-info-modern-content">
                    <div class="player-info-modern-title">
                      <h5><a href="#">Joe Perkins</a></h5>
                      <p>Midfielder</p>
                    </div>
                    <div class="player-info-modern-progress">
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern">
                        <div class="progress-header">
                          <p>Pass Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">95</span>
                      </article>
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern">
                        <div class="progress-header">
                          <p>Shots Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">70</span>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Player Info Modern-->
              <div class="player-info-modern"><a class="player-info-modern-figure" href="#"><img src="{{URL::asset('Home_files/player-3-368x286.png')}}" alt="" width="368" height="286"></a>
                <div class="player-info-modern-footer">
                  <div class="player-info-modern-number">
                    <p>21</p>
                  </div>
                  <div class="player-info-modern-content">
                    <div class="player-info-modern-title">
                      <h5><a href="#">David Hawkins</a></h5>
                      <p>Defender</p>
                    </div>
                    <div class="player-info-modern-progress">
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern">
                        <div class="progress-header">
                          <p>Pass Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">90</span>
                      </article>
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern">
                        <div class="progress-header">
                          <p>Shots Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">75</span>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Player Info Modern-->
              <div class="player-info-modern"><a class="player-info-modern-figure" href="#"><img src="{{URL::asset('Home_files/player-4-368x286.png')}}" alt="" width="368" height="286"></a>
                <div class="player-info-modern-footer">
                  <div class="player-info-modern-number">
                    <p>21</p>
                  </div>
                  <div class="player-info-modern-content">
                    <div class="player-info-modern-title">
                      <h5><a href="#">Harry Stevenson</a></h5>
                      <p>Goalkeeper</p>
                    </div>
                    <div class="player-info-modern-progress">
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern">
                        <div class="progress-header">
                          <p>Pass Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">55</span>
                      </article>
                      <!-- Linear progress bar-->
                      <article class="progress-linear progress-bar-modern">
                        <div class="progress-header">
                          <p>Shots Acc</p>
                        </div>
                        <div class="progress-bar-linear-wrap">
                          <div class="progress-bar-linear"></div>
                        </div><span class="progress-value">95</span>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('layouts.sidebar')
    </div>
  </div>
</section>
@endsection
