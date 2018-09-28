@extends('layouts.app')

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $crumb = 'Post-Title'; ?>
<title>{{ config('app.name', $crumb) }}</title>
@endsection

@include('layouts.header')
@include('layouts.page-top')
@section('content')
<!-- Blog Post-->
<section class="section section-sm bg-gray-100">
  <div class="container">
    <div class="row row-30">
      <div class="col-lg-8">
        <div class="blog-post">
          <!-- Badge-->
          <div class="badge badge-secondary">The Team
          </div>
          <h3 class="blog-post-title">Coutinho’s camp: it was all barca’s fault and we can prove it</h3>
          <div class="blog-post-header">
            <div class="blog-post-author"><img class="img-circle" src="./Home_files/user-3-63x63.jpg" alt="" width="63" height="63">
              <p class="post-author">Katrin Burns</p>
            </div>
            <div class="blog-post-meta">
              <time class="blog-post-time" datetime="2018"><span class="icon mdi mdi-clock"></span>April 15, 2018</time>
              <div class="blog-post-comment"><span class="icon mdi mdi-comment-outline"></span>345</div>
              <div class="blog-post-view"><span class="icon fl-justicons-visible6"></span>234</div>
            </div>
          </div>
          <div class="blog-post-author-quote">
            <p>Philippe Coutinho is reportedly seeking clear-the-air talks with Liverpool after Barcelona gave up on trying to sign the Brazilian. Barca failed to make a breakthrough in their attempts to replace Neymar with the Liverpool attacker this season.</p>
          </div>
          <div class="blog-post-share">
            <p>Share this post</p>
            <ul class="group">
              <li><a class="icon fa-facebook" href="blog-post.html#"></a></li>
              <li><a class="icon fa-twitter" href="blog-post.html#"></a></li>
              <li><a class="icon fa-google-plus" href="blog-post.html#"></a></li>
              <li><a class="icon fa-instagram" href="blog-post.html#"></a></li>
            </ul>
          </div>
          <div class="blog-post-content">
            <p>The Independent claims the player is ready for talks to settle any potential bad blood. It’s understood Liverpool rejected three bids from the Catalans with the final figure believed to be a £118million offer, which in fact proved to be just £82million up front with the rest in add-ons. Barca had imposed a 7pm Sunday deadline on Liverpool to agree to an offer that they had already rejected 48 hours earlier.</p>
            <p>The Reds sporting director Michael Edwards ignored their deadline as Liverpool stuck to their stance that the player was not for sale at any price.</p><img src="./Home_files/blog-post-1-683x407.jpg" alt="" width="683" height="407">
            <p>The report of the Independent says: “People within the 25-year-old midfielder’s entourage are pointing the finger at Barcelona for manipulating their client and have suggested the Nou Camp club used family members to provide additional pressure. They insist the ill-conceived email was Barca’s idea.” Still, there’s no updates on how this situation can be resolved.</p>
            <!-- Quote Default-->
            <article class="quote-default">
              <div class="quote-default-text">
                <p class="q">Coutinho’s camp will attempt to shift the blame for the saga on to Barca.</p>
              </div>
            </article>
            <p>Now though, Coutinho and his representatives are ready to accept that a move is not going to happen, which leaves the player in an awkward position as he prepares to return to the Liverpool fold. The 25-year-old has yet to return to full training at Melwood and he will not be involved against either Hoffenheim on Wednesday night or Arsenal on Sunday.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 owl-carousel-outer-navigation">
            <!-- Heading Component-->
            <article class="heading-component">
              <div class="heading-component-inner">
                <h5 class="heading-component-title">Related News
                </h5>
                <div class="owl-carousel-arrows-outline">
                  <div class="owl-nav">
                    <button class="owl-arrow owl-arrow-prev"></button>
                    <button class="owl-arrow owl-arrow-next"></button>
                  </div>
                </div>
              </div>
            </article>

            <!-- Blog Carousel-->
            <div class="owl-carousel owl-loaded" data-items="1" data-sm-items="2" data-dots="false" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-nav-custom=".owl-carousel-outer-navigation">
              <!-- Post Carmen-->

              <!-- Post Carmen-->

              <!-- Post Carmen-->

            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-800px, 0px, 0px); transition: all 0s ease 0s; width: 2800px;"><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="./Home_files/news-5-3-369x343.jpg" alt="" width="369" height="343">
                <div class="post-carmen-header">
                  <!-- Post Video Button--><a class="post-video-button" href="blog-post.html#modal1" data-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>
                </div>
                <div class="post-carmen-main">
                  <h4 class="post-carmen-title"><a href="blog-post.html">Liverpool must stop Coutinho from joining Barcelona</a></h4>
                  <div class="post-carmen-meta">
                    <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018</time>
                    </div>
                    <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html#">345</a></div>
                    <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                    </div>
                  </div>
                </div>
              </article></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="./Home_files/news-5-4-369x343.jpg" alt="" width="369" height="343">
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
                    <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html#">345</a></div>
                    <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                    </div>
                  </div>
                </div>
              </article></div><div class="owl-item active" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="./Home_files/news-5-2-369x343.jpg" alt="" width="369" height="343">
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
                    <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html#">345</a></div>
                    <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                    </div>
                  </div>
                </div>
              </article></div><div class="owl-item active" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="./Home_files/news-5-3-369x343.jpg" alt="" width="369" height="343">
                <div class="post-carmen-header">
                  <!-- Post Video Button--><a class="post-video-button" href="blog-post.html#modal1" data-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>
                </div>
                <div class="post-carmen-main">
                  <h4 class="post-carmen-title"><a href="blog-post.html">Liverpool must stop Coutinho from joining Barcelona</a></h4>
                  <div class="post-carmen-meta">
                    <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018</time>
                    </div>
                    <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html#">345</a></div>
                    <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                    </div>
                  </div>
                </div>
              </article></div><div class="owl-item" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="./Home_files/news-5-4-369x343.jpg" alt="" width="369" height="343">
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
                    <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html#">345</a></div>
                    <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                    </div>
                  </div>
                </div>
              </article></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="./Home_files/news-5-2-369x343.jpg" alt="" width="369" height="343">
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
                    <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html#">345</a></div>
                    <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                    </div>
                  </div>
                </div>
              </article></div><div class="owl-item cloned" style="width: 370px; margin-right: 30px;"><article class="post-carmen"><img src="./Home_files/news-5-3-369x343.jpg" alt="" width="369" height="343">
                <div class="post-carmen-header">
                  <!-- Post Video Button--><a class="post-video-button" href="blog-post.html#modal1" data-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>
                </div>
                <div class="post-carmen-main">
                  <h4 class="post-carmen-title"><a href="blog-post.html">Liverpool must stop Coutinho from joining Barcelona</a></h4>
                  <div class="post-carmen-meta">
                    <div class="post-carmen-time"><span class="icon mdi mdi-clock"></span>
                      <time datetime="2018">April 15, 2018</time>
                    </div>
                    <div class="post-carmen-comment"><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html#">345</a></div>
                    <div class="post-carmen-view"><span class="icon fl-justicons-visible6"></span>234
                    </div>
                  </div>
                </div>
              </article></div></div></div><div class="owl-nav"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots disabled"></div></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <!-- Heading Component-->
            <article class="heading-component">
              <div class="heading-component-inner">
                <h5 class="heading-component-title">3 comments
                </h5>
              </div>
            </article>

            <div class="blog-post-comments">
              <!-- Post Comment-->
              <div class="post-comment post-comment-parent">
                <div class="post-comment-aside"><img class="img-circle" src="./Home_files/user-4-69x69.jpg" alt="" width="69" height="69">
                </div>
                <div class="post-comment-main">
                  <div class="post-comment-header">
                    <h5 class="author-name">Linda Peterson</h5>
                    <time class="post-comment-time" datetime="2018">2 days ago
                    </time>
                  </div>
                  <div class="post-comment-text">
                    <p>Thanks for the post! All you described looks odd, to be honest. However, it’s a fair play to Liverpool for keeping him. But £82m upfront + add ons is a lot of money for a player, who while clearly being talented goes missing in one game too many. Pretty much any list of the world's top 40-50 players wouldn't feature Coutinho. And for Liverpool to demand £100m for him is a bit odd. Soccer is really unpredictable if you ask me.</p>
                  </div>
                  <div class="post-comment-footer">
                    <div class="comment-like"><span class="icon mdi mdi-thumb-up-outline"></span><a href="blog-post.html#">32</a></div>
                    <div class="comment-reply"><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html#">Reply</a></div>
                  </div>
                </div>
              </div>
              <!-- Post Comment-->
              <div class="post-comment post-comment-child">
                <div class="post-comment-aside"><img class="img-circle" src="./Home_files/user-5-69x69.jpg" alt="" width="69" height="69">
                </div>
                <div class="post-comment-main">
                  <div class="post-comment-header">
                    <h5 class="author-name">Erika Wood</h5>
                    <time class="post-comment-time" datetime="2018">2 days ago
                    </time>
                  </div>
                  <div class="post-comment-text">
                    <p>You are absolutely right! As a long-time soccer fan I can’t see any reasons why this deal happened if it was rejected 48 hours earlier. It looks like a kind of affair Coutinho would have never gotten into.</p>
                  </div>
                  <div class="post-comment-footer">
                    <div class="comment-like"><span class="icon mdi mdi-thumb-up-outline"></span><a href="blog-post.html#">32</a></div>
                    <div class="comment-reply"><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html#">Reply</a></div>
                  </div>
                </div>
              </div>
              <!-- Post Comment-->
              <div class="post-comment">
                <div class="post-comment-aside"><img class="img-circle" src="./Home_files/user-6-69x69.jpg" alt="" width="69" height="69">
                </div>
                <div class="post-comment-main">
                  <div class="post-comment-header">
                    <h5 class="author-name">Erik Peterson</h5>
                    <time class="post-comment-time" datetime="2018">2 days ago
                    </time>
                  </div>
                  <div class="post-comment-text">
                    <p>All this situation seems to be a greatly planned manipulation. Well done to Liverpool on this - if true they get a key player back who is happy to play for them after feeling manipulated. That's a solid win. To my mind, it’s another absolute transfer window shocker for Barca. Their team sheet against Betis this weekend was so poor compared to their team of a couple of years ago. This window has hugely accelerated their decline.</p>
                  </div>
                  <div class="post-comment-footer">
                    <div class="comment-like"><span class="icon mdi mdi-thumb-up-outline"></span><a href="blog-post.html#">32</a></div>
                    <div class="comment-reply"><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html#">Reply</a></div>
                  </div>
                </div>
              </div>
              <div class="comment-box">
                <div class="comment-box-aside"><img class="img-circle" src="./Home_files/user-7-69x69.jpg" alt="" width="69" height="69">
                </div>
                <div class="comment-box-main">
                  <h5 class="comment-box-name">Miranda</h5>
                  <!-- RD Mailform-->
                  <form class="rd-mailform comment-box-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                    <div class="form-wrap">
                      <label class="form-label rd-input-label" for="comment-message">Your comment</label>
                      <textarea class="form-input form-control-has-validation form-control-last-child" id="comment-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                    </div>
                    <div class="form-button">
                      <button class="button button-primary" type="submit">Submit</button>
                    </div>
                  </form>
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
