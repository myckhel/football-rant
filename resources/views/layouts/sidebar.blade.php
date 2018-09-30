@if(Route::currentRouteName() == "groups")
<div class="col-lg-4">
  <!-- Blog Aside-->
  <div class="block-aside">
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Create Group
          </h5>
        </div>
      </article>

      <!--Block Categories-->
      <div class="block-categories">
        <!-- group creation -->
        <form id="create_group_form" class="rd-form rd-inline-form-creative" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="" >
          <div class="form-wrap">
            <div class="form-input-wrap">
              <input class="form-input form-control-has-validation" id="footer-form-email" type="text" name="name" placeholder="Name" required>
              <input type="hidden" name="user" value="{{auth::user()->id}}">
              <input type="hidden" name="club" value="1">
            </div>
          </div>
          <div class="form-button">
            <button class="button button-primary-outline" type="submit" aria-label="Send"><span class="fa fa-user-plus"></span></button>
          </div>
          @csrf
        </form>
      </div>
    </div>
  </div>
</div>
@endif

@if(Route::currentRouteName() == "news")
<div class="col-lg-4">
  <!-- Blog Aside-->
  <div class="block-aside">
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Categories
          </h5>
        </div>
      </article>

      <!--Block Categories-->
      <div class="block-categories">
        <ul class="list-marked list-marked-categories">
          <li><a href="news.html#">Soccer</a><span class="list-marked-counter">68</span></li>
          <li><a href="news.html#">The Team</a><span class="list-marked-counter">16</span></li>
          <li><a href="news.html#">League</a><span class="list-marked-counter">20</span></li>
        </ul>
      </div>
    </div>
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Trending News
          </h5>
        </div>
      </article>

      <div class="tabs-custom tabs-horizontal tabs-modern" id="tabs-modern">
        <ul class="nav nav-tabs">
          <li class="nav-item" role="presentation"><a class="nav-link active" href="news.html#tabs-modern-1" data-toggle="tab">New</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="news.html#tabs-modern-2" data-toggle="tab">Trending</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="news.html#tabs-modern-3" data-toggle="tab">Popular</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tabs-modern-1">
                              <!-- Post Classic-->
                              <article class="post-classic">
                                <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-5-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                                <div class="post-classic-main">
                                  <p class="post-classic-title"><a href="blog-post.html">Alvaro Morata proving his worth at Chelsea</a></p>
                                  <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                    <time datetime="2018">April 15, 2018
                                      <!-- Tabs Modern with Post Classic-->
                                    </time>
                                  </div>
                                </div>
                              </article>
                              <!-- Post Classic-->
                              <article class="post-classic">
                                <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-6-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                                <div class="post-classic-main">
                                  <p class="post-classic-title"><a href="blog-post.html">Are Bournemouth in trouble this season?</a></p>
                                  <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                    <time datetime="2018">April 15, 2018
                                      <!-- Tabs Modern with Post Classic-->
                                    </time>
                                  </div>
                                </div>
                              </article>
                              <!-- Post Classic-->
                              <article class="post-classic">
                                <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-7-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                                <div class="post-classic-main">
                                  <p class="post-classic-title"><a href="blog-post.html">The Reds’ Convincing Win At Anfield Road</a></p>
                                  <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                    <time datetime="2018">April 15, 2018
                                      <!-- Tabs Modern with Post Classic-->
                                    </time>
                                  </div>
                                </div>
                              </article>
                              <!-- Post Classic-->
                              <article class="post-classic">
                                <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-8-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
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
          <div class="tab-pane fade" id="tabs-modern-2">
                              <!-- Post Classic-->
                              <article class="post-classic">
                                <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-2-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                                <div class="post-classic-main">
                                  <p class="post-classic-title"><a href="blog-post.html">Are Bournemouth in trouble this season?</a></p>
                                  <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                    <time datetime="2018">April 15, 2018
                                      <!-- Tabs Modern with Post Classic-->
                                    </time>
                                  </div>
                                </div>
                              </article>
                              <!-- Post Classic-->
                              <article class="post-classic">
                                <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-3-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                                <div class="post-classic-main">
                                  <p class="post-classic-title"><a href="blog-post.html">Alvaro Morata proving his worth at Chelsea</a></p>
                                  <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                    <time datetime="2018">April 15, 2018
                                      <!-- Tabs Modern with Post Classic-->
                                    </time>
                                  </div>
                                </div>
                              </article>
                              <!-- Post Classic-->
                              <article class="post-classic">
                                <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-4-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                                <div class="post-classic-main">
                                  <p class="post-classic-title"><a href="blog-post.html">The Reds’ Convincing Win At Anfield Road</a></p>
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
                              <!-- Post Classic-->
                              <article class="post-classic">
                                <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-4-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
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
        </div>
      </div>
    </div>
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Follow Us
          </h5>
        </div>
      </article>

      <!-- Buttons Media-->
      <div class="group-sm group-flex"><a class="button-media button-media-facebook" href="news.html#">
          <h4 class="button-media-title">50k</h4>
          <p class="button-media-action">Like<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-facebook"></span></a><a class="button-media button-media-twitter" href="news.html#">
          <h4 class="button-media-title">120k</h4>
          <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-twitter"></span></a><a class="button-media button-media-google" href="news.html#">
          <h4 class="button-media-title">15k</h4>
          <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-google"></span></a><a class="button-media button-media-instagram" href="news.html#">
          <h4 class="button-media-title">85k</h4>
          <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-instagram"></span></a></div>
    </div>
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Latest Comments
          </h5>
        </div>
      </article>

      <!-- List Comments Classic-->
      <div class="list-comments-classic">
                          <!-- Comment Classic-->
                          <div class="comment-classic">
                            <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewBox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                              <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                            </svg>
                            <div class="comment-classic-header">
                              <div class="comment-classic-header-aside">
                                <img src="{{URL::asset('Home_files/user-1-63x63.jpg')}}" alt="" width="63" height="63">
                              </div>
                              <div class="comment-classic-header-main">
                                <p class="comment-classic-title">Amanda Norton</p>
                                <time class="comment-classic-time" datetime="2018">4 hours ago
                                </time>
                              </div>
                            </div>
                            <div class="comment-classic-body">
                              <div class="comment-classic-text">
                                <p>I am not really a big fan of soccer but even I am sure that Liverpool are going to make it this time just like they did 3 years...</p>
                              </div>
                              <div class="comment-classic-post-title"><a href="blog-post.html">Six Big Questions About the Future of Manchester’s Updated Team</a></div>
                            </div>
                          </div>
                          <!-- Comment Classic-->
                          <div class="comment-classic">
                            <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewBox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                              <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                            </svg>
                            <div class="comment-classic-header">
                              <div class="comment-classic-header-aside"><img src="{{URL::asset('Home_files/user-2-63x63.jpg')}}" alt="" width="63" height="63">
                              </div>
                              <div class="comment-classic-header-main">
                                <p class="comment-classic-title">Robert Norton</p>
                                <time class="comment-classic-time" datetime="2018">14 hours ago
                                </time>
                              </div>
                            </div>
                            <div class="comment-classic-body">
                              <div class="comment-classic-text">
                                <p>Real Madrid are my personal favorites...</p>
                              </div>
                              <div class="comment-classic-post-title"><a href="blog-post.html">Which Team is Your Personal Favorite This Year?</a></div>
                            </div>
                          </div>
                          <!-- Comment Classic-->
                          <div class="comment-classic">
                            <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewBox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                              <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                            </svg>
                            <div class="comment-classic-header">
                              <div class="comment-classic-header-aside"><img src="{{URL::asset('Home_files/user-3-63x63.jpg')}}" alt="" width="63" height="63">
                              </div>
                              <div class="comment-classic-header-main">
                                <p class="comment-classic-title">Rebecca Smith</p>
                                <time class="comment-classic-time" datetime="2018">20 hours ago
                                </time>
                              </div>
                            </div>
                            <div class="comment-classic-body">
                              <div class="comment-classic-text">
                                <p>My opinion on the topic is that Rollers don’t have enough chances to withstand the...</p>
                              </div>
                              <div class="comment-classic-post-title"><a href="blog-post.html">Rollers: Some Facts About New Stars of Premier League 2018</a></div>
                            </div>
                          </div>
      </div>
    </div>
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Join Our Newsletter
          </h5>
        </div>
      </article>

      <!-- Mail Form Modern-->
      <form class="rd-mailform rd-mailform-modern" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
        <div class="form-wrap">
          <label class="form-label rd-input-label" for="subscribe-email">Enter Your E-mail</label>
          <input class="form-input form-control-has-validation form-control-last-child" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
        </div>
        <div class="form-wrap">
          <button class="button button-block button-primary" type="submit">Subscribe</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endif

@if(Route::currentRouteName() == "post")
<div class="col-lg-4">
  <!-- Blog Alide-->
  <div class="block-aside">
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Categories
          </h5>
        </div>
      </article>

      <!--Block Categories-->
      <div class="block-categories">
        <ul class="list-marked list-marked-categories">
          <li><a href="blog-post.html#">Soccer</a><span class="list-marked-counter">68</span></li>
          <li><a href="blog-post.html#">The Team</a><span class="list-marked-counter">16</span></li>
          <li><a href="blog-post.html#">League</a><span class="list-marked-counter">20</span></li>
        </ul>
      </div>
    </div>
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">In The Spotlight
          </h5><a class="button button-xs button-gray-outline" href="blog-post.html#">All News</a>
        </div>
      </article>

      <!-- List Post Classic-->
      <div class="list-post-classic">
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-1-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                            <div class="post-classic-main">
                              <p class="post-classic-title"><a href="blog-post.html">Raheem Sterling turns the tide for Manchester</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2018">April 15, 2018</time>
                              </div>
                            </div>
                          </article>
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-2-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                            <div class="post-classic-main">
                              <p class="post-classic-title"><a href="blog-post.html">Prem in 90 seconds: Chelsea's crisis is over!</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2018">April 15, 2018</time>
                              </div>
                            </div>
                          </article>
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-3-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                            <div class="post-classic-main">
                              <p class="post-classic-title"><a href="blog-post.html">Good vibes back at struggling Schalke</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2018">April 15, 2018</time>
                              </div>
                            </div>
                          </article>
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-4-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                            <div class="post-classic-main">
                              <p class="post-classic-title"><a href="blog-post.html">Liverpool in desperate need of backup players</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2018">April 15, 2018</time>
                              </div>
                            </div>
                          </article>
      </div>
    </div>
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Follow Us
          </h5>
        </div>
      </article>

      <!-- Buttons Media-->
      <div class="group-sm group-flex"><a class="button-media button-media-facebook" href="blog-post.html#">
          <h4 class="button-media-title">50k</h4>
          <p class="button-media-action">Like<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-facebook"></span></a><a class="button-media button-media-twitter" href="blog-post.html#">
          <h4 class="button-media-title">120k</h4>
          <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-twitter"></span></a><a class="button-media button-media-google" href="blog-post.html#">
          <h4 class="button-media-title">15k</h4>
          <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-google"></span></a><a class="button-media button-media-instagram" href="blog-post.html#">
          <h4 class="button-media-title">85k</h4>
          <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-instagram"></span></a></div>
    </div>
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Latest Comments
          </h5>
        </div>
      </article>

      <!-- List Comments Classic-->
      <div class="list-comments-classic">
                          <!-- Comment Classic-->
                          <div class="comment-classic">
                            <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewBox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                              <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                            </svg>
                            <div class="comment-classic-header">
                              <div class="comment-classic-header-aside"><img src="{{URL::asset('Home_files/user-1-63x63.jpg')}}" alt="" width="63" height="63">
                              </div>
                              <div class="comment-classic-header-main">
                                <p class="comment-classic-title">Amanda Norton</p>
                                <time class="comment-classic-time" datetime="2018">4 hours ago
                                </time>
                              </div>
                            </div>
                            <div class="comment-classic-body">
                              <div class="comment-classic-text">
                                <p>I am not really a big fan of soccer but even I am sure that Liverpool are going to make it this time just like they did 3 years...</p>
                              </div>
                              <div class="comment-classic-post-title"><a href="blog-post.html">Six Big Questions About the Future of Manchester’s Updated Team</a></div>
                            </div>
                          </div>
                          <!-- Comment Classic-->
                          <div class="comment-classic">
                            <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewBox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                              <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                            </svg>
                            <div class="comment-classic-header">
                              <div class="comment-classic-header-aside"><img src="{{URL::asset('Home_files/user-2-63x63.jpg')}}" alt="" width="63" height="63">
                              </div>
                              <div class="comment-classic-header-main">
                                <p class="comment-classic-title">Robert Norton</p>
                                <time class="comment-classic-time" datetime="2018">14 hours ago
                                </time>
                              </div>
                            </div>
                            <div class="comment-classic-body">
                              <div class="comment-classic-text">
                                <p>Real Madrid are my personal favorites...</p>
                              </div>
                              <div class="comment-classic-post-title"><a href="blog-post.html">Which Team is Your Personal Favorite This Year?</a></div>
                            </div>
                          </div>
                          <!-- Comment Classic-->
                          <div class="comment-classic">
                            <svg version="1.1" x="0px" y="0px" width="6.888px" height="4.68px" viewBox="0 0 6.888 4.68" enable-background="new 0 0 6.888 4.68" xml:space="preserve">
                              <path fill="#171617" d="M1.584,0h1.8L2.112,4.68H0L1.584,0z M5.112,0h1.776L5.64,4.68H3.528L5.112,0z"></path>
                            </svg>
                            <div class="comment-classic-header">
                              <div class="comment-classic-header-aside"><img src="{{URL::asset('Home_files/user-3-63x63.jpg')}}" alt="" width="63" height="63">
                              </div>
                              <div class="comment-classic-header-main">
                                <p class="comment-classic-title">Rebecca Smith</p>
                                <time class="comment-classic-time" datetime="2018">20 hours ago
                                </time>
                              </div>
                            </div>
                            <div class="comment-classic-body">
                              <div class="comment-classic-text">
                                <p>My opinion on the topic is that Rollers don’t have enough chances to withstand the...</p>
                              </div>
                              <div class="comment-classic-post-title"><a href="blog-post.html">Rollers: Some Facts About New Stars of Premier League 2018</a></div>
                            </div>
                          </div>
      </div>
    </div>
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Join Our Newsletter
          </h5>
        </div>
      </article>

      <!-- Mail Form Modern-->
      <form class="rd-mailform rd-mailform-modern" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
        <div class="form-wrap">
          <label class="form-label rd-input-label" for="subscribe-email">Enter Your E-mail</label>
          <input class="form-input form-control-has-validation form-control-last-child" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
        </div>
        <div class="form-wrap">
          <button class="button button-block button-primary" type="submit">Subscribe</button>
        </div>
      </form>
    </div>
    <div class="block-aside-item">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Tags
          </h5>
        </div>
      </article>

      <!-- List Tags-->
      <ul class="list-tags">
        <li><a href="blog-post.html#">Sport</a></li>
        <li><a href="blog-post.html#">Team</a></li>
        <li><a href="blog-post.html#">League</a></li>
        <li><a href="blog-post.html#">Cup</a></li>
        <li><a href="blog-post.html#">Soccer</a></li>
        <li><a href="blog-post.html#">Player</a></li>
        <li><a href="blog-post.html#">Championship</a></li>
      </ul>
    </div>
  </div>
</div>
@endif

@if(Route::currentRouteName() == "club")
<!-- Aside Block-->
<div class="col-lg-4">
  <aside class="aside-components">
    <div class="aside-component">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">In the spotlight
          </h5><a class="button button-xs button-gray-outline" href="#">All news</a>
        </div>
      </article>

      <!-- List Post Classic-->
      <div class="list-post-classic">
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-1-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                            <div class="post-classic-main">
                              <p class="post-classic-title"><a href="blog-post.html">Raheem Sterling turns the tide for Manchester</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2018">April 15, 2018</time>
                              </div>
                            </div>
                          </article>
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-2-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                            <div class="post-classic-main">
                              <p class="post-classic-title"><a href="blog-post.html">Prem in 90 seconds: Chelsea's crisis is over!</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2018">April 15, 2018</time>
                              </div>
                            </div>
                          </article>
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-3-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                            <div class="post-classic-main">
                              <p class="post-classic-title"><a href="blog-post.html">Good vibes back at struggling Schalke</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2018">April 15, 2018</time>
                              </div>
                            </div>
                          </article>
                          <!-- Post Classic-->
                          <article class="post-classic">
                            <div class="post-classic-aside"><a class="post-classic-figure" href="blog-post.html"><img src="{{URL::asset('Home_files/blog-element-4-94x94.jpg')}}" alt="" width="94" height="94"></a></div>
                            <div class="post-classic-main">
                              <p class="post-classic-title"><a href="blog-post.html">Liverpool in desperate need of backup players</a></p>
                              <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                <time datetime="2018">April 15, 2018</time>
                              </div>
                            </div>
                          </article>
      </div>
    </div>
    <div class="aside-component">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">latest Games results
          </h5>
        </div>
      </article>

      <!-- Game Result Classic-->
      <article class="game-result game-result-classic">
        <div class="game-result-main">
          <div class="game-result-team game-result-team-first">
            <figure class="game-result-team-figure game-result-team-figure-big"><img src="{{URL::asset('Home_files/team-atletico-55x55.png')}}" alt="" width="55" height="55">
            </figure>
            <div class="game-result-team-name">Atletico</div>
            <div class="game-result-team-country">USA</div>
          </div>
          <div class="game-result-middle">
            <div class="game-result-score-wrap">
              <div class="game-result-score game-result-team-win">2<span class="game-result-team-label game-result-team-label-top">Win</span>
              </div>
              <div class="game-result-score-divider">
                <svg x="0px" y="0px" width="7px" height="21px" viewBox="0 0 7 21" enable-background="new 0 0 7 21" xml:space="preserve">
                  <g>
                    <circle cx="3.5" cy="3.5" r="3"></circle>
                    <path d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z"></path>
                  </g>
                  <g>
                    <circle cx="3.695" cy="17.5" r="3"></circle>
                    <path d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z"></path>
                  </g>
                </svg>
              </div>
              <div class="game-result-score">1
              </div>
            </div>
            <div class="game-results-status">Home</div>
          </div>
          <div class="game-result-team game-result-team-second">
            <figure class="game-result-team-figure game-result-team-figure-big"><img src="{{URL::asset('Home_files/team-real-madrid-41x59.png')}}" alt="" width="41" height="59">
            </figure>
            <div class="game-result-team-name">Real madrid</div>
            <div class="game-result-team-country">Spain</div>
          </div>
        </div>
        <div class="game-result-footer">
          <ul class="game-result-details">
            <li>New Yorkers Stadium</li>
            <li>
              <time datetime="2018-04-14">April 14, 2018</time>
            </li>
          </ul>
        </div>
      </article>
      <!-- Game Result Classic-->
      <article class="game-result game-result-classic">
        <div class="game-result-main">
          <div class="game-result-team game-result-team-first">
            <figure class="game-result-team-figure game-result-team-figure-big"><img src="{{URL::asset('Home_files/team-bavaria-fc-56x52.png')}}" alt="" width="56" height="52">
            </figure>
            <div class="game-result-team-name">Bavaria FC</div>
            <div class="game-result-team-country">Germany</div>
          </div>
          <div class="game-result-middle">
            <div class="game-result-score-wrap">
              <div class="game-result-score">2
              </div>
              <div class="game-result-score-divider">
                <svg x="0px" y="0px" width="7px" height="21px" viewBox="0 0 7 21" enable-background="new 0 0 7 21" xml:space="preserve">
                  <g>
                    <circle cx="3.5" cy="3.5" r="3"></circle>
                    <path d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z"></path>
                  </g>
                  <g>
                    <circle cx="3.695" cy="17.5" r="3"></circle>
                    <path d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z"></path>
                  </g>
                </svg>
              </div>
              <div class="game-result-score game-result-team-win">3<span class="game-result-team-label game-result-team-label-top">Win</span>
              </div>
            </div>
            <div class="game-results-status">Away</div>
          </div>
          <div class="game-result-team game-result-team-second">
            <figure class="game-result-team-figure game-result-team-figure-big"><img src="{{URL::asset('Home_files/team-atletico-55x55.png')}}" alt="" width="55" height="55">
            </figure>
            <div class="game-result-team-name">Atletico</div>
            <div class="game-result-team-country">USA</div>
          </div>
        </div>
        <div class="game-result-footer">
          <ul class="game-result-details">
            <li>New Yorkers Stadium</li>
            <li>
              <time datetime="2018-04-14">April 14, 2018</time>
            </li>
          </ul>
        </div>
      </article>
      <!-- Game Result Classic-->
      <article class="game-result game-result-classic">
        <div class="game-result-main">
          <div class="game-result-team game-result-team-first">
            <figure class="game-result-team-figure game-result-team-figure-big"><img src="{{URL::asset('Home_files/team-atletico-55x55.png')}}" alt="" width="55" height="55">
            </figure>
            <div class="game-result-team-name">Atletico</div>
            <div class="game-result-team-country">USA</div>
          </div>
          <div class="game-result-middle">
            <div class="game-result-score-wrap">
              <div class="game-result-score game-result-team-win">4<span class="game-result-team-label game-result-team-label-top">Win</span>
              </div>
              <div class="game-result-score-divider">
                <svg x="0px" y="0px" width="7px" height="21px" viewBox="0 0 7 21" enable-background="new 0 0 7 21" xml:space="preserve">
                  <g>
                    <circle cx="3.5" cy="3.5" r="3"></circle>
                    <path d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z"></path>
                  </g>
                  <g>
                    <circle cx="3.695" cy="17.5" r="3"></circle>
                    <path d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z"></path>
                  </g>
                </svg>
              </div>
              <div class="game-result-score">1
              </div>
            </div>
            <div class="game-results-status">Home</div>
          </div>
          <div class="game-result-team game-result-team-second">
            <figure class="game-result-team-figure game-result-team-figure-big"><img src="{{URL::asset('Home_files/team-sevilla-57x46.png')}}" alt="" width="57" height="46">
            </figure>
            <div class="game-result-team-name">Sevilla</div>
            <div class="game-result-team-country">Spain</div>
          </div>
        </div>
        <div class="game-result-footer">
          <ul class="game-result-details">
            <li>New Yorkers Stadium</li>
            <li>
              <time datetime="2018-04-14">April 14, 2018</time>
            </li>
          </ul>
        </div>
      </article>
    </div>
    <div class="aside-component">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Follow us
          </h5>
        </div>
      </article>

      <!-- Buttons Media-->
      <div class="group-sm group-flex"><a class="button-media button-media-facebook" href="#">
          <h4 class="button-media-title">50k</h4>
          <p class="button-media-action">Like<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-facebook"></span></a><a class="button-media button-media-twitter" href="#">
          <h4 class="button-media-title">120k</h4>
          <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-twitter"></span></a><a class="button-media button-media-google" href="#">
          <h4 class="button-media-title">15k</h4>
          <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-google"></span></a><a class="button-media button-media-instagram" href="#">
          <h4 class="button-media-title">85k</h4>
          <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-instagram"></span></a></div>
    </div>
    <div class="aside-component">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Our Awards
          </h5>
        </div>
      </article>

      <!-- Owl Carousel-->
      <div class="owl-carousel owl-carousel-dots-modern awards-carousel owl-loaded owl-drag" data-items="1" data-autoplay="true" data-autoplay-speed="4000" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="true">
                          <!-- Awards Item-->

                          <!-- Awards Item-->

                          <!-- Awards Item-->

      <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1479px, 0px, 0px); transition: all 0.25s ease 0s; width: 2590px;"><div class="owl-item cloned" style="width: 369.984px;"><div class="awards-item">
                            <div class="awards-item-main">
                              <h4 class="awards-item-title"><span class="text-accent">Best</span>Forward
                              </h4>
                              <div class="divider"></div>
                              <h5 class="awards-item-time">June 2015</h5>
                            </div>
                            <div class="awards-item-aside"> <img src="{{URL::asset('Home_files/thumbnail-minimal-2-68x126.png')}}" alt="" width="68" height="126">
                            </div>
                          </div></div><div class="owl-item cloned" style="width: 369.984px;"><div class="awards-item">
                            <div class="awards-item-main">
                              <h4 class="awards-item-title"><span class="text-accent">Best</span>Coach
                              </h4>
                              <div class="divider"></div>
                              <h5 class="awards-item-time">November 2016</h5>
                            </div>
                            <div class="awards-item-aside"> <img src="{{URL::asset('Home_files/thumbnail-minimal-3-73x135.png')}}" alt="" width="73" height="135">
                            </div>
                          </div></div><div class="owl-item" style="width: 369.984px;"><div class="awards-item">
                            <div class="awards-item-main">
                              <h4 class="awards-item-title"><span class="text-accent">World</span>Champions
                              </h4>
                              <div class="divider"></div>
                              <h5 class="awards-item-time">December 2014</h5>
                            </div>
                            <div class="awards-item-aside"> <img src="{{URL::asset('Home_files/thumbnail-minimal-1-67x147.png')}}" alt="" width="67" height="147">
                            </div>
                          </div></div><div class="owl-item" style="width: 369.984px;"><div class="awards-item">
                            <div class="awards-item-main">
                              <h4 class="awards-item-title"><span class="text-accent">Best</span>Forward
                              </h4>
                              <div class="divider"></div>
                              <h5 class="awards-item-time">June 2015</h5>
                            </div>
                            <div class="awards-item-aside"> <img src="{{URL::asset('Home_files/thumbnail-minimal-2-68x126.png')}}" alt="" width="68" height="126">
                            </div>
                          </div></div><div class="owl-item active" style="width: 369.984px;"><div class="awards-item">
                            <div class="awards-item-main">
                              <h4 class="awards-item-title"><span class="text-accent">Best</span>Coach
                              </h4>
                              <div class="divider"></div>
                              <h5 class="awards-item-time">November 2016</h5>
                            </div>
                            <div class="awards-item-aside"> <img src="{{URL::asset('Home_files/thumbnail-minimal-3-73x135.png')}}" alt="" width="73" height="135">
                            </div>
                          </div></div><div class="owl-item cloned" style="width: 369.984px;"><div class="awards-item">
                            <div class="awards-item-main">
                              <h4 class="awards-item-title"><span class="text-accent">World</span>Champions
                              </h4>
                              <div class="divider"></div>
                              <h5 class="awards-item-time">December 2014</h5>
                            </div>
                            <div class="awards-item-aside"> <img src="{{URL::asset('Home_files/thumbnail-minimal-1-67x147.png')}}" alt="" width="67" height="147">
                            </div>
                          </div></div><div class="owl-item cloned" style="width: 369.984px;"><div class="awards-item">
                            <div class="awards-item-main">
                              <h4 class="awards-item-title"><span class="text-accent">Best</span>Forward
                              </h4>
                              <div class="divider"></div>
                              <h5 class="awards-item-time">June 2015</h5>
                            </div>
                            <div class="awards-item-aside"> <img src="{{URL::asset('Home_files/thumbnail-minimal-2-68x126.png')}}" alt="" width="68" height="126">
                            </div>
                          </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div>
    </div>
    <div class="aside-component">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Standings
          </h5><a class="button button-xs button-gray-outline" href="#">Full Standings</a>
        </div>
      </article>

      <!-- Table team-->
      <div class="table-custom-responsive">
        <table class="table-custom table-standings table-classic">
          <thead>
            <tr>
              <th colspan="2">Team Position</th>
              <th>W</th>
              <th>L</th>
              <th>PTS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span>1</span></td>
              <td class="team-inline">
                <div class="team-figure"><img src="{{URL::asset('Home_files/team-atletico-37x37.png')}}" alt="" width="37" height="37">
                </div>
                <div class="team-title">
                  <div class="team-name">Atletico</div>
                  <div class="team-country">USA</div>
                </div>
              </td>
              <td>153</td>
              <td>30</td>
              <td>186</td>
            </tr>
            <tr>
              <td><span>2</span></td>
              <td class="team-inline">
                <div class="team-figure"><img src="{{URL::asset('Home_files/team-sevilla-45x35.png')}}" alt="" width="45" height="35">
                </div>
                <div class="team-title">
                  <div class="team-name">Sevilla</div>
                  <div class="team-country">Spain</div>
                </div>
              </td>
              <td>120</td>
              <td>30</td>
              <td>186</td>
            </tr>
            <tr>
              <td><span>3</span></td>
              <td class="team-inline">
                <div class="team-figure"><img src="{{URL::asset('Home_files/team-real-madrid-29x43.png')}}" alt="" width="29" height="43">
                </div>
                <div class="team-title">
                  <div class="team-name">Real Madrid</div>
                  <div class="team-country">Spain</div>
                </div>
              </td>
              <td>100</td>
              <td>30</td>
              <td>186</td>
            </tr>
            <tr>
              <td><span>4</span></td>
              <td class="team-inline">
                <div class="team-figure"><img src="{{URL::asset('Home_files/team-celta-vigo-37x34.png')}}" alt="" width="37" height="34">
                </div>
                <div class="team-title">
                  <div class="team-name">Celta Vigo</div>
                  <div class="team-country">Italy</div>
                </div>
              </td>
              <td>98</td>
              <td>30</td>
              <td>186</td>
            </tr>
            <tr>
              <td><span>5</span></td>
              <td class="team-inline">
                <div class="team-figure"><img src="{{URL::asset('Home_files/team-barcelona-36x31.png')}}" alt="" width="36" height="31">
                </div>
                <div class="team-title">
                  <div class="team-name">Barcelona</div>
                  <div class="team-country">Spain</div>
                </div>
              </td>
              <td>98</td>
              <td>30</td>
              <td>186</td>
            </tr>
            <tr>
              <td><span>6</span></td>
              <td class="team-inline">
                <div class="team-figure"><img src="{{URL::asset('Home_files/team-bavaria-fc-39x37.png')}}" alt="" width="39" height="37">
                </div>
                <div class="team-title">
                  <div class="team-name">Bavaria FC</div>
                  <div class="team-country">Germany</div>
                </div>
              </td>
              <td>98</td>
              <td>30</td>
              <td>186</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="aside-component">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Gallery
          </h5>
        </div>
      </article>

      <article class="gallery" data-lightgallery="group">
        <div class="row row-10 row-narrow">
          <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="{{URL::asset('images/gallery-soccer-1-original.jpg')}}"><img src="{{URL::asset('Home_files/gallery-soccer-1-116x116.jpg')}}" alt="">
              <div class="thumbnail-creative-overlay"></div></a>
          </div>
          <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="{{URL::asset('images/gallery-soccer-2-original.jpg')}}"><img src="{{URL::asset('Home_files/gallery-soccer-2-116x116.jpg')}}" alt="">
              <div class="thumbnail-creative-overlay"></div></a>
          </div>
          <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="{{URL::asset('images/gallery-soccer-3-original.jpg')}}"><img src="{{URL::asset('Home_files/gallery-soccer-3-116x116.jpg')}}" alt="">
              <div class="thumbnail-creative-overlay"></div></a>
          </div>
          <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="{{URL::asset('images/gallery-soccer-4-original.jpg')}}"><img src="{{URL::asset('Home_files/gallery-soccer-4-116x116.jpg')}}" alt="">
              <div class="thumbnail-creative-overlay"></div></a>
          </div>
          <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="{{URL::asset('images/gallery-soccer-5-original.jpg')}}"><img src="{{URL::asset('Home_files/gallery-soccer-5-116x116.jpg')}}" alt="">
              <div class="thumbnail-creative-overlay"></div></a>
          </div>
          <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="{{URL::asset('images/gallery-soccer-6-original.jpg')}}"><img src="{{URL::asset('Home_files/gallery-soccer-6-116x116.jpg')}}" alt="">
              <div class="thumbnail-creative-overlay"></div></a>
          </div>
        </div>
      </article>
    </div>
    <div class="aside-component">
      <!-- Heading Component-->
      <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Team Stats
          </h5>
        </div>
      </article>

      <div class="table-custom-responsive">
        <table class="table-custom table-custom-bordered table-team-statistic">
          <tbody><tr>
            <td>
              <p class="team-statistic-counter">109</p>
              <p class="team-statistic-title">Points Per Game</p>
            </td>
            <td>
              <p class="team-statistic-counter">65</p>
              <p class="team-statistic-title">Rebounds Per Game</p>
            </td>
          </tr>
          <tr>
            <td>
              <p class="team-statistic-counter">23.6</p>
              <p class="team-statistic-title">Assists Per Game</p>
            </td>
            <td>
              <p class="team-statistic-counter">102</p>
              <p class="team-statistic-title">Points Allowed</p>
            </td>
          </tr>
        </tbody></table>
      </div>
    </div>
    <div class="aside-component">
      <div class="owl-carousel-outer-navigation">
        <!-- Heading Component-->
        <article class="heading-component">
          <div class="heading-component-inner">
            <h5 class="heading-component-title">Shop
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
        <div class="owl-carousel owl-spacing-1 owl-loaded" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="4000" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-nav-custom=".owl-carousel-outer-navigation">



        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1199px, 0px, 0px); transition: all 0s ease 0s; width: 2800px;"><div class="owl-item cloned" style="width: 369.984px; margin-right: 30px;"><article class="product">
            <header class="product-header">
              <!-- Badge-->
              <div class="badge badge-shop">new
              </div>
              <div class="product-figure"><img src="{{URL::asset('Home_files/product-small-2.png')}}" alt=""></div>
              <div class="product-buttons">
                <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                  <ul class="product-share">
                    <li class="product-share-item"><span>Share</span></li>
                    <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="{{URL::asset('images/shop/product-2-original.jpg')}}" data-lightgallery="item" style="font-size: 25px"></a>
              </div>
            </header>
            <footer class="product-content">
              <h6 class="product-title"><a href="#">Nike Air Zoom Pegasus</a></h6>
              <div class="product-price"><span class="heading-6 product-price-new">$290</span>
              </div>
              <ul class="product-rating">
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star_half"></span></li>
              </ul>
            </footer>
          </article></div><div class="owl-item cloned" style="width: 369.984px; margin-right: 30px;"><article class="product">
            <header class="product-header">
              <div class="product-figure"><img src="{{URL::asset('Home_files/product-small-3.png')}}" alt=""></div>
              <div class="product-buttons">
                <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                  <ul class="product-share">
                    <li class="product-share-item"><span>Share</span></li>
                    <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="{{URL::asset('images/shop/product-3-original.jpg')}}" data-lightgallery="item" style="font-size: 25px"></a>
              </div>
            </header>
            <footer class="product-content">
              <h6 class="product-title"><a href="#">Nike distressed baseball hat</a></h6>
              <div class="product-price"><span class="heading-6 product-price-new">$290</span>
              </div>
              <ul class="product-rating">
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star_half"></span></li>
              </ul>
            </footer>
          </article></div><div class="owl-item" style="width: 369.984px; margin-right: 30px;"><article class="product">
            <header class="product-header">
              <!-- Badge-->
              <div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span>
              </div>
              <div class="product-figure"><img src="{{URL::asset('Home_files/product-small-1.png')}}" alt=""></div>
              <div class="product-buttons">
                <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                  <ul class="product-share">
                    <li class="product-share-item"><span>Share</span></li>
                    <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="{{URL::asset('images/shop/product-1-original.jpg')}}" data-lightgallery="item" style="font-size: 25px"></a>
              </div>
            </header>
            <footer class="product-content">
              <h6 class="product-title"><a href="#">Nike hoops elite backpack</a></h6>
              <div class="product-price"><span class="product-price-old">$400</span><span class="heading-6 product-price-new">$290</span>
              </div>
              <ul class="product-rating">
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star_half"></span></li>
              </ul>
            </footer>
          </article></div><div class="owl-item active" style="width: 369.984px; margin-right: 30px;"><article class="product">
            <header class="product-header">
              <!-- Badge-->
              <div class="badge badge-shop">new
              </div>
              <div class="product-figure"><img src="{{URL::asset('Home_files/product-small-2.png')}}" alt=""></div>
              <div class="product-buttons">
                <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                  <ul class="product-share">
                    <li class="product-share-item"><span>Share</span></li>
                    <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="{{URL::asset('images/shop/product-2-original.jpg')}}" data-lightgallery="item" style="font-size: 25px"></a>
              </div>
            </header>
            <footer class="product-content">
              <h6 class="product-title"><a href="#">Nike Air Zoom Pegasus</a></h6>
              <div class="product-price"><span class="heading-6 product-price-new">$290</span>
              </div>
              <ul class="product-rating">
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star_half"></span></li>
              </ul>
            </footer>
          </article></div><div class="owl-item" style="width: 369.984px; margin-right: 30px;"><article class="product">
            <header class="product-header">
              <div class="product-figure"><img src="{{URL::asset('Home_files/product-small-3.png')}}" alt=""></div>
              <div class="product-buttons">
                <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                  <ul class="product-share">
                    <li class="product-share-item"><span>Share</span></li>
                    <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="{{URL::asset('images/shop/product-3-original.jpg')}}" data-lightgallery="item" style="font-size: 25px"></a>
              </div>
            </header>
            <footer class="product-content">
              <h6 class="product-title"><a href="#">Nike distressed baseball hat</a></h6>
              <div class="product-price"><span class="heading-6 product-price-new">$290</span>
              </div>
              <ul class="product-rating">
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star_half"></span></li>
              </ul>
            </footer>
          </article></div><div class="owl-item cloned" style="width: 369.984px; margin-right: 30px;"><article class="product">
            <header class="product-header">
              <!-- Badge-->
              <div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span>
              </div>
              <div class="product-figure"><img src="{{URL::asset('Home_files/product-small-1.png')}}" alt=""></div>
              <div class="product-buttons">
                <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                  <ul class="product-share">
                    <li class="product-share-item"><span>Share</span></li>
                    <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="{{URL::asset('images/shop/product-1-original.jpg')}}" data-lightgallery="item" style="font-size: 25px"></a>
              </div>
            </header>
            <footer class="product-content">
              <h6 class="product-title"><a href="#">Nike hoops elite backpack</a></h6>
              <div class="product-price"><span class="product-price-old">$400</span><span class="heading-6 product-price-new">$290</span>
              </div>
              <ul class="product-rating">
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star_half"></span></li>
              </ul>
            </footer>
          </article></div><div class="owl-item cloned" style="width: 369.984px; margin-right: 30px;"><article class="product">
            <header class="product-header">
              <!-- Badge-->
              <div class="badge badge-shop">new
              </div>
              <div class="product-figure"><img src="{{URL::asset('Home_files/product-small-2.png')}}" alt=""></div>
              <div class="product-buttons">
                <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                  <ul class="product-share">
                    <li class="product-share-item"><span>Share</span></li>
                    <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                    <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="{{URL::asset('images/shop/product-2-original.jpg')}}" data-lightgallery="item" style="font-size: 25px"></a>
              </div>
            </header>
            <footer class="product-content">
              <h6 class="product-title"><a href="#">Nike Air Zoom Pegasus</a></h6>
              <div class="product-price"><span class="heading-6 product-price-new">$290</span>
              </div>
              <ul class="product-rating">
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star"></span></li>
                <li><span class="material-icons-star_half"></span></li>
              </ul>
            </footer>
          </article></div></div></div><div class="owl-nav"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots disabled"></div></div>
      </div>
    </div>
  </aside>
</div>
@endif
