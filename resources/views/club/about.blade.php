@extends('layouts.app')

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $crumb = 'About'; ?>
<title>{{ config('app.name', $crumb) }}</title>
@endsection

@include('layouts.header')
@include('layouts.page-top')
@section('content')
<!--Our History-->
<section class="section section-md bg-gray-100">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Heading Component-->
        <article class="heading-component">
          <div class="heading-component-inner">
            <h5 class="heading-component-title">Our History
            </h5>
          </div>
        </article>

        <div class="tabs-custom tabs-horizontal tabs-corporate tabs-corporate-boxed" id="tabs-1" data-nav="true">
          <div class="nav-wrap">
            <button class="button button-nav button-prev" data-nav-prev=""><span class="icon mdi mdi-chevron-left"></span></button>
            <!-- Nav tabs-->
            <ul class="nav nav-tabs">
              <li class="nav-item" role="presentation"><a class="nav-link active" href="about-us.html#tabs-1-1" data-toggle="tab"><span>2012-2018</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html#tabs-1-2" data-toggle="tab"><span> 2001-2012</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html#tabs-1-3" data-toggle="tab"><span> 1997-2001</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html#tabs-1-4" data-toggle="tab"><span> 1994-1997</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html#tabs-1-5" data-toggle="tab"><span> 1988-1994</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html#tabs-1-6" data-toggle="tab"><span> 1970-1988</span></a></li>
            </ul>
            <button class="button button-nav button-next" data-nav-next=""><span class="icon mdi mdi-chevron-right"></span></button>
          </div>
          <!-- Tab panes-->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabs-1-1">
              <div class="tab-content-main">
                <div class="row row-30">
                  <div class="col-lg-6">
                    <h2>2012-2018</h2>
                    <h4>Our soccer team continues to conquer the world championships</h4>
                    <p>Atletico had some success in friendlies in 2012 and 2013. The  team won 1–0 in Italy on February 29, 2012, the team's first ever win over Italy. On June 2, 2013, the U.S. played a friendly against Germany at a sold out RFK Stadium.</p>
                    <p>For the 1997 World Cup, the team was drawn into Group G, along with Ghana, Germany, and Portugal. We took revenge on the Ghanaians, winning 2–1. Then we tied our second group game against Portugal 2–2. In the final game of the group stage, Atletico fell to Germany 1–0, but moved on to the knockout stage on goal difference. We still continue improving our soccer techniques today.</p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-dots-modern owl-loaded" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1587px;"><div class="owl-item active" style="width: 529px;"><img src="./Home_files/about-us-1-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-2-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-3-529x350.jpg" alt="" width="529" height="350"></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                  </div>
                </div>
              </div>
              <div class="block-thumbnail-minimal">
                <div class="row row-30">
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>European Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>2</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>FIFA World Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>American Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>3</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-4-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>International Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabs-1-2">
              <div class="tab-content-main">
                <div class="row row-30">
                  <div class="col-lg-6">
                    <h2>2001-2012</h2>
                    <h4>Atletico starts a new era of world cup tournaments</h4>
                    <p>In the 2002 World Cup under Bruce Arena, we reached the quarterfinals, our best finish in a World Cup since 1980. The team reached the knockout stage after a 1–1–1 record in the group stage. It started with a 3–2 upset win over Portugal.</p>
                    <p>In the 2006 World Cup, after finishing top of the CONCACAF qualification tournament, our team was drawn into Group E along with the Czech Republic, Italy, and Ghana. Atletico opened its tournament with a 3–0 loss to the Czech Republic. The team then tied 1–1 against Italy, who went on to win the World Cup. We tried to achieve even more during the next decade.</p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-dots-modern owl-loaded" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1587px;"><div class="owl-item active" style="width: 529px;"><img src="./Home_files/about-us-1-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-2-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-3-529x350.jpg" alt="" width="529" height="350"></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                  </div>
                </div>
              </div>
              <div class="block-thumbnail-minimal">
                <div class="row row-30">
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>European Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>2</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>FIFA World Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>American Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>3</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-4-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>International Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabs-1-3">
              <div class="tab-content-main">
                <div class="row row-30">
                  <div class="col-lg-6">
                    <h2>1997-2001</h2>
                    <h4>Debuting in the world cup tournament and first major victory</h4>
                    <p>After qualifying automatically as the leading team of the 1997 World Cup under Bora Milutinović, Atletico opened its tournament schedule with a 1–1 tie against Switzerland in the Pontiac Silverdome in the suburbs of Detroit.</p>
                    <p>In its second game, the team faced Colombia, then ranked fourth in the world, at the Rose Bowl. Aided by an own goal from Andrés Escobar, we won 2–1. Despite a 1–0 loss to Romania in its final group game, Atletico made it to the knockout round for the first time since 1930. Unfortunately, in the round of 16, we lost 1–0 to the eventual champion Real Madrid.</p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-dots-modern owl-loaded" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1587px;"><div class="owl-item active" style="width: 529px;"><img src="./Home_files/about-us-1-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-2-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-3-529x350.jpg" alt="" width="529" height="350"></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                  </div>
                </div>
              </div>
              <div class="block-thumbnail-minimal">
                <div class="row row-30">
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>European Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>2</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>FIFA World Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>American Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>3</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-4-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>International Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabs-1-4">
              <div class="tab-content-main">
                <div class="row row-30">
                  <div class="col-lg-6">
                    <h2>1994-1997</h2>
                    <h4>A new coach and training professional players for future tournaments</h4>
                    <p>Atletico had some success in friendlies in 1994 and 1996. The  team won 1–0 in Italy on February 29, 1995, the team's first ever win over Italy. On June 2, 1996, the U.S. played a friendly against Germany at a sold out RFK Stadium.</p>
                    <p>For the 1996 World Cup, the team was drawn into Group G, along with Ghana, Germany, and Portugal. We took revenge on the Ghanaians, winning 2–1. Then we tied our second group game against Portugal 2–2. In the final game of the group stage, Atletico fell to Germany 1–0, but moved on to the knockout stage on goal difference. We still continue improving our soccer techniques today.</p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-dots-modern owl-loaded" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1587px;"><div class="owl-item active" style="width: 529px;"><img src="./Home_files/about-us-1-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-2-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-3-529x350.jpg" alt="" width="529" height="350"></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                  </div>
                </div>
              </div>
              <div class="block-thumbnail-minimal">
                <div class="row row-30">
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>European Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>2</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>FIFA World Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>American Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>3</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-4-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>International Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabs-1-5">
              <div class="tab-content-main">
                <div class="row row-30">
                  <div class="col-lg-6">
                    <h2>1988-1994</h2>
                    <h4>Atletico gets officially recognized as the #1 soccer team in the USA</h4>
                    <p>In the 1992 World Cup under Bruce Arena, we reached the quarterfinals, our best finish in a World Cup since 1980. The team reached the knockout stage after a 1–1–1 record in the group stage. It started with a 3–2 upset win over Portugal.</p>
                    <p>In the 1989 World Cup, after finishing top of the CONCACAF qualification tournament, our team was drawn into Group E along with the Czech Republic, Italy, and Ghana. Atletico opened its tournament with a 3–0 loss to the Czech Republic. The team then tied 1–1 against Italy, who went on to win the World Cup. We tried to achieve even more during the next decade.</p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-dots-modern owl-loaded" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1587px;"><div class="owl-item active" style="width: 529px;"><img src="./Home_files/about-us-1-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-2-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-3-529x350.jpg" alt="" width="529" height="350"></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                  </div>
                </div>
              </div>
              <div class="block-thumbnail-minimal">
                <div class="row row-30">
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>European Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>2</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>FIFA World Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>American Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>3</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-4-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>International Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabs-1-6">
              <div class="tab-content-main">
                <div class="row row-30">
                  <div class="col-lg-6">
                    <h2>1970-1988</h2>
                    <h4>Establishment and initial development of Atletico soccer team</h4>
                    <p>After qualifying automatically as the leading team of the 1986 World Cup under Bora Milutinović, Atletico opened its tournament schedule with a 1–1 tie against Switzerland in the Pontiac Silverdome in the suburbs of Detroit.</p>
                    <p>In its second game, the team faced Colombia, then ranked fourth in the world, at the Rose Bowl. Aided by an own goal from Andrés Escobar, we won 2–1. Despite a 1–0 loss to Romania in its final group game, Atletico made it to the knockout round for the first time since 1930. Unfortunately, in the round of 16, we lost 1–0 to the eventual champion Real Madrid.</p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-dots-modern owl-loaded" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1587px;"><div class="owl-item active" style="width: 529px;"><img src="./Home_files/about-us-1-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-2-529x350.jpg" alt="" width="529" height="350"></div><div class="owl-item" style="width: 529px;"><img src="./Home_files/about-us-3-529x350.jpg" alt="" width="529" height="350"></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                  </div>
                </div>
              </div>
              <div class="block-thumbnail-minimal">
                <div class="row row-30">
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>European Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>2</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>FIFA World Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>American Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>3</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="thumbnail-minimal">
                      <div class="thumbnail-minimal-figure"><img src="./Home_files/thumbnail-minimal-4-68x126.png" alt="" width="68" height="126">
                      </div>
                      <div class="thumbnail-minimal-title">
                        <p>International Cups</p>
                      </div>
                      <div class="thumbnail-minimal-counter">
                        <h2>1</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our team-->
<section class="section section-sm">
  <div class="container">
    <!-- Heading Component-->
    <article class="heading-component">
      <div class="heading-component-inner">
        <h5 class="heading-component-title">Our Team
        </h5>
      </div>
    </article>

    <div class="row row-30">
      <div class="col-sm-6 col-lg-4">
              <!-- Player Info Modern-->
              <div class="player-info-modern"><a class="player-info-modern-figure" href="about-us.html#"><img src="./Home_files/roster-player-1-368x286.png" alt="" width="368" height="286"></a>
                <div class="player-info-modern-footer">
                  <div class="player-info-modern-number">
                    <p>10</p>
                  </div>
                  <div class="player-info-modern-content">
                    <div class="player-info-modern-title">
                      <h5><a href="about-us.html#">David Hawkins</a></h5>
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
      <div class="col-sm-6 col-lg-4">
              <!-- Player Info Modern-->
              <div class="player-info-modern"><a class="player-info-modern-figure" href="about-us.html#"><img src="./Home_files/roster-player-5-368x286.png" alt="" width="368" height="286"></a>
                <div class="player-info-modern-footer">
                  <div class="player-info-modern-number">
                    <p>06</p>
                  </div>
                  <div class="player-info-modern-content">
                    <div class="player-info-modern-title">
                      <h5><a href="about-us.html#">Jack Windsor</a></h5>
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
      <div class="col-sm-6 col-lg-4">
              <!-- Player Info Modern-->
              <div class="player-info-modern"><a class="player-info-modern-figure" href="about-us.html#"><img src="./Home_files/player-2-368x286.png" alt="" width="368" height="286"></a>
                <div class="player-info-modern-footer">
                  <div class="player-info-modern-number">
                    <p>07</p>
                  </div>
                  <div class="player-info-modern-content">
                    <div class="player-info-modern-title">
                      <h5><a href="about-us.html#">Joe Perkins</a></h5>
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
      <div class="col-sm-6 col-lg-4">
              <!-- Player Info Modern-->
              <div class="player-info-modern"><a class="player-info-modern-figure" href="about-us.html#"><img src="./Home_files/roster-player-2-368x286.png" alt="" width="368" height="286"></a>
                <div class="player-info-modern-footer">
                  <div class="player-info-modern-number">
                    <p>02</p>
                  </div>
                  <div class="player-info-modern-content">
                    <div class="player-info-modern-title">
                      <h5><a href="about-us.html#">Harry Stevenson</a></h5>
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
      <div class="col-sm-6 col-lg-4">
              <!-- Player Info Modern-->
              <div class="player-info-modern"><a class="player-info-modern-figure" href="about-us.html#"><img src="./Home_files/roster-player-3-368x286.png" alt="" width="368" height="286"></a>
                <div class="player-info-modern-footer">
                  <div class="player-info-modern-number">
                    <p>03</p>
                  </div>
                  <div class="player-info-modern-content">
                    <div class="player-info-modern-title">
                      <h5><a href="about-us.html#">Jose Calderon</a></h5>
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
      <div class="col-sm-6 col-lg-4">
              <!-- Player Info Modern-->
              <div class="player-info-modern player-info-modern-accent"><a class="player-info-modern-figure" href="about-us.html#"><img src="./Home_files/roster-player-4-368x286.png" alt="" width="368" height="286"></a>
                <div class="player-info-modern-footer">
                  <div class="player-info-modern-number"><span class="icon fa-weixin"></span>
                  </div>
                  <div class="player-info-modern-content">
                    <div class="player-info-modern-title">
                      <h5><a href="about-us.html#">Luis Enrique</a></h5>
                      <p>Team Coach</p>
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
    </div>
  </div>
</section>

<!-- Latest results-->
<section class="section section-sm bg-gray-100">
  <div class="container">
    <div class="row row-50">
      <div class="col-xl-8">
        <!-- Heading Component-->
        <article class="heading-component">
          <div class="heading-component-inner">
            <h5 class="heading-component-title">Latest games results
            </h5>
            <div class="heading-component-aside">
              <ul class="list-inline list-inline-xs list-inline-middle">
                <li>
                  <div class="select2-container select select-minimal" id="s2id_autogen3" style="min-width: 124px"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">Playoffs 2018</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4"><div class="select2-drop select2-display-none select-minimal-dropdown">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-4">   </ul></div></div><select class="select select-minimal" data-placeholder="Champions League" data-dropdown-class="select-minimal-dropdown" style="min-width: 124px; display: none;" tabindex="-1" title="">
                    <option value="playoffs 2018" selected="">Playoffs 2018</option>
                    <option value="playoffs 2016">Playoffs 2016</option>
                    <option value="playoffs 2015">Playoffs 2015</option>
                    <option value="playoffs 2014">Playoffs 2014</option>
                    <option value="playoffs 2013">Playoffs 2013</option>
                  </select>
                </li>
                <li>
                  <div class="select2-container select select-minimal" id="s2id_autogen5" style="min-width: 110px"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-6">October</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen6" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-6" id="s2id_autogen6"><div class="select2-drop select2-display-none select-minimal-dropdown">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen6_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-6">   </ul></div></div><select class="select select-minimal" data-placeholder="2016-2018" data-dropdown-class="select-minimal-dropdown" style="min-width: 110px; display: none;" tabindex="-1" title="">
                    <option value="october" selected="">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                  </select>
                </li>
                <li>
                  <div class="select2-container select select-minimal" id="s2id_autogen7" style="min-width: 110px"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-8">2016-2018</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen8" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-8" id="s2id_autogen8"><div class="select2-drop select2-display-none select-minimal-dropdown">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen8_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-8" id="s2id_autogen8_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-8">   </ul></div></div><select class="select select-minimal" data-placeholder="2016-2018" data-dropdown-class="select-minimal-dropdown" style="min-width: 110px; display: none;" tabindex="-1" title="">
                    <option value="2016-2018" selected="">2016-2018</option>
                    <option value="2015-2016">2015-2016</option>
                    <option value="2014-2015">2014-2015</option>
                  </select>
                </li>
              </ul>
            </div>
          </div>
        </article>

        <div class="row row-30">
          <div class="col-md-6">
                  <!-- Game Result Classic-->
                  <article class="game-result game-result-classic">
                    <div class="game-result-main">
                      <div class="game-result-team game-result-team-first">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="./Home_files/team-atletico-55x55.png" alt="" width="55" height="55">
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
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="./Home_files/team-real-madrid-41x59.png" alt="" width="41" height="59">
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
          </div>
          <div class="col-md-6">
                  <!-- Game Result Classic-->
                  <article class="game-result game-result-classic">
                    <div class="game-result-main">
                      <div class="game-result-team game-result-team-first">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="./Home_files/team-bavaria-fc-56x52.png" alt="" width="56" height="52">
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
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="./Home_files/team-atletico-55x55.png" alt="" width="55" height="55">
                        </figure>
                        <div class="game-result-team-name">Atletico</div>
                        <div class="game-result-team-country">USA</div>
                      </div>
                    </div>
                    <div class="game-result-footer">
                      <ul class="game-result-details">
                        <li>Bavaria Stadium</li>
                        <li>
                          <time datetime="2018-04-14">April 14, 2018</time>
                        </li>
                      </ul>
                    </div>
                  </article>
          </div>
          <div class="col-md-6">
                  <!-- Game Result Classic-->
                  <article class="game-result game-result-classic">
                    <div class="game-result-main">
                      <div class="game-result-team game-result-team-first">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="./Home_files/team-atletico-55x55.png" alt="" width="55" height="55">
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
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="./Home_files/team-sevilla-57x46.png" alt="" width="57" height="46">
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
          <div class="col-md-6">
                  <!-- Game Result Classic-->
                  <article class="game-result game-result-classic">
                    <div class="game-result-main">
                      <div class="game-result-team game-result-team-first">
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="./Home_files/team-atletico-55x55.png" alt="" width="55" height="55">
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
                        <figure class="game-result-team-figure game-result-team-figure-big"><img src="./Home_files/team-barcelona-57x49.png" alt="" width="57" height="49">
                        </figure>
                        <div class="game-result-team-name">Barcelona</div>
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
        </div>
      </div>
      <div class="col-xl-4">
        <!-- Heading Component-->
        <article class="heading-component">
          <div class="heading-component-inner">
            <h5 class="heading-component-title">Standings
            </h5><a class="button button-xs button-gray-outline" href="about-us.html#">Full Standings</a>
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
                        <div class="team-figure"><img src="./Home_files/team-atletico-37x37.png" alt="" width="37" height="37">
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
                        <div class="team-figure"><img src="./Home_files/team-sevilla-45x35.png" alt="" width="45" height="35">
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
                        <div class="team-figure"><img src="./Home_files/team-real-madrid-29x43.png" alt="" width="29" height="43">
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
                        <div class="team-figure"><img src="./Home_files/team-celta-vigo-37x34.png" alt="" width="37" height="34">
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
                        <div class="team-figure"><img src="./Home_files/team-barcelona-36x31.png" alt="" width="36" height="31">
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
                        <div class="team-figure"><img src="./Home_files/team-bavaria-fc-39x37.png" alt="" width="39" height="37">
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
    </div>
  </div>
</section>

<!-- Team stats-->
<section class="section section-sm">
  <div class="container">
    <div class="row row-30">
      <div class="col-md-6 col-xl-4">
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

        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-739px, 0px, 0px); transition: all 0.25s ease 0s; width: 2590px;"><div class="owl-item cloned" style="width: 369.984px;"><div class="awards-item">
                          <div class="awards-item-main">
                            <h4 class="awards-item-title"><span class="text-accent">Best</span>Forward
                            </h4>
                            <div class="divider"></div>
                            <h5 class="awards-item-time">June 2015</h5>
                          </div>
                          <div class="awards-item-aside"> <img src="./Home_files/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126">
                          </div>
                        </div></div><div class="owl-item cloned" style="width: 369.984px;"><div class="awards-item">
                          <div class="awards-item-main">
                            <h4 class="awards-item-title"><span class="text-accent">Best</span>Coach
                            </h4>
                            <div class="divider"></div>
                            <h5 class="awards-item-time">November 2016</h5>
                          </div>
                          <div class="awards-item-aside"> <img src="./Home_files/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135">
                          </div>
                        </div></div><div class="owl-item active" style="width: 369.984px;"><div class="awards-item">
                          <div class="awards-item-main">
                            <h4 class="awards-item-title"><span class="text-accent">World</span>Champions
                            </h4>
                            <div class="divider"></div>
                            <h5 class="awards-item-time">December 2014</h5>
                          </div>
                          <div class="awards-item-aside"> <img src="./Home_files/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147">
                          </div>
                        </div></div><div class="owl-item" style="width: 369.984px;"><div class="awards-item">
                          <div class="awards-item-main">
                            <h4 class="awards-item-title"><span class="text-accent">Best</span>Forward
                            </h4>
                            <div class="divider"></div>
                            <h5 class="awards-item-time">June 2015</h5>
                          </div>
                          <div class="awards-item-aside"> <img src="./Home_files/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126">
                          </div>
                        </div></div><div class="owl-item" style="width: 369.984px;"><div class="awards-item">
                          <div class="awards-item-main">
                            <h4 class="awards-item-title"><span class="text-accent">Best</span>Coach
                            </h4>
                            <div class="divider"></div>
                            <h5 class="awards-item-time">November 2016</h5>
                          </div>
                          <div class="awards-item-aside"> <img src="./Home_files/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135">
                          </div>
                        </div></div><div class="owl-item cloned" style="width: 369.984px;"><div class="awards-item">
                          <div class="awards-item-main">
                            <h4 class="awards-item-title"><span class="text-accent">World</span>Champions
                            </h4>
                            <div class="divider"></div>
                            <h5 class="awards-item-time">December 2014</h5>
                          </div>
                          <div class="awards-item-aside"> <img src="./Home_files/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147">
                          </div>
                        </div></div><div class="owl-item cloned" style="width: 369.984px;"><div class="awards-item">
                          <div class="awards-item-main">
                            <h4 class="awards-item-title"><span class="text-accent">Best</span>Forward
                            </h4>
                            <div class="divider"></div>
                            <h5 class="awards-item-time">June 2015</h5>
                          </div>
                          <div class="awards-item-aside"> <img src="./Home_files/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126">
                          </div>
                        </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
      </div>
      <div class="col-md-6 col-xl-4">
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
      <div class="col-md-6 col-xl-4">
        <!-- Heading Component-->
        <article class="heading-component">
          <div class="heading-component-inner">
            <h5 class="heading-component-title">Statistics
            </h5>
            <div class="heading-component-aside">
              <div class="select2-container select select-minimal" id="s2id_autogen9" style="min-width: 165px"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-10">All Competitions</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen10" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-10" id="s2id_autogen10"><div class="select2-drop select2-display-none select-minimal-dropdown">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen10_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-10" id="s2id_autogen10_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-10">   </ul></div></div><select class="select select-minimal" data-placeholder="All Competitions" data-dropdown-class="select-minimal-dropdown" style="min-width: 165px; display: none;" tabindex="-1" title="">
                <option value="newest first" selected="">All Competitions</option>
                <option value="oldest first">World Champions</option>
              </select>
            </div>
          </div>
        </article>

        <!-- List Statistics-->
        <ul class="list-statictics">
          <li><a href="about-us.html#">Goals scored</a><span class="list-statictics-counter">50</span></li>
          <li><a href="about-us.html#">Shots</a><span class="list-statictics-counter">25</span></li>
          <li><a href="about-us.html#">Shots on target</a><span class="list-statictics-counter">10</span></li>
          <li><a href="about-us.html#">Assists</a><span class="list-statictics-counter">80</span></li>
          <li><a href="about-us.html#">Key Passes</a><span class="list-statictics-counter">50</span></li>
          <li><a href="about-us.html#">Dribbles</a><span class="list-statictics-counter">25</span></li>
          <li><a href="about-us.html#">Fouls</a><span class="list-statictics-counter">10</span></li>
          <li><a href="about-us.html#">Minutes played</a><span class="list-statictics-counter">500</span></li>
          <li><a href="about-us.html#">Yellow Cards</a><span class="list-statictics-counter">25</span></li>
          <li><a href="about-us.html#">Red Cards</a><span class="list-statictics-counter">02</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
