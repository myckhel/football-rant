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
              <?php
              $member= false;
              $guest = true;
              if(!($guest = !(\Auth::user()))){
                $member = App\Member::isMember(\Auth::user()->id);
              }
              ?>
              @if(!$guest)
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
                @else
                <a href="{{route('register')}}">Register/Login To View Group Members</a>
                @endif
              </div>
              <div class="tab-pane fade" id="discussion">
                <!-- Post Classic-->
                @if(!$guest)
                <article class="post-classic">
                    <!--script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script-->
                    <!--script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script-->
                    <!--script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script-->
                    <!--meta charset='UTF-8'><meta name="robots" content="noindex">
                    <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
                    <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /-->
                    <!--link rel="canonical" href="https://codepen.io/emilcarlsson/pen/ZOQZaV?limit=all&page=74&q=contact+" />
                    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'-->

<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!--link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'-->
@include('club.asset.css')
<!--

A concept for a chat interface.

Try writing a new message! :)


Follow me here:
Twitter: https://twitter.com/thatguyemil
Codepen: https://codepen.io/emilcarlsson/
Website: http://emilcarlsson.se/

-->

<div id="frame">
	<div id="sidepanel">
		<div id="profile">
			<div class="wrap">
				<img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
				<p>{{\Auth::user()->name}}</p>
				<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
				<div id="status-options">
					<ul>
						<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
						<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
						<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
						<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
					</ul>
				</div>
				<div id="expanded">
					<label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="mikeross" />
					<label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="ross81" />
					<label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="mike.ross" />
				</div>
			</div>
		</div>
		<div id="search">
			<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
			<input type="text" placeholder="Search contacts..." />
		</div>
		<div id="contacts">
			<ul>
        @foreach($jgroups as $group)
				<li class="contact">
					<div class="wrap">
						<img src="{{URL::asset('images/team/logo/'.$group->badge)}}" alt="" />
						<div class="meta">
							<p class="name">{{$group->name}}</p>
							<p class="preview">You just got LITT up, Mike.</p>
						</div>
					</div>
				</li>
        @endforeach
			</ul>
		</div>
		<div id="bottom-bar">
			<button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
			<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
		</div>
	</div>
	<div class="content">
		<div class="contact-profile">
			<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
			<p>Harvey Specter</p>
			<div class="social-media">
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				 <i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
		</div>
		<div class="messages">
			<ul>
				<li class="sent">
					<img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
					<p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
				</li>
				<li class="replies">
					<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
					<p>When you're backed against the wall, break the god damn thing down.</p>
				</li>
				<li class="replies">
					<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
					<p>Excuses don't win championships.</p>
				</li>
				<li class="sent">
					<img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
					<p>Oh yeah, did Michael Jordan tell you that?</p>
				</li>
				<li class="replies">
					<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
					<p>No, I told him that.</p>
				</li>
				<li class="replies">
					<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
					<p>What are your choices when someone puts a gun to your head?</p>
				</li>
				<li class="sent">
					<img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
					<p>What are you talking about? You do what they say or they shoot you.</p>
				</li>
				<li class="replies">
					<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
					<p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
				</li>
			</ul>
		</div>
		<div class="message-input">
			<div class="wrap">
			<input type="text" placeholder="Write your message..." />
			<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
			<button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>
<!--script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script-->
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script >
$(".messages").animate({ scrollTop: $(document).height() }, "fast");

$("#profile-img").click(function() {
	$("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
	$("#contacts").toggleClass("expanded");
});

$("#contacts ul li.contact").click(function() {
  $("#contacts ul li.contact").removeClass("active");
  $(this).addClass("active");
});

$("#status-options ul li").click(function() {
	$("#profile-img").removeClass();
	$("#status-online").removeClass("active");
	$("#status-away").removeClass("active");
	$("#status-busy").removeClass("active");
	$("#status-offline").removeClass("active");
	$(this).addClass("active");

	if($("#status-online").hasClass("active")) {
		$("#profile-img").addClass("online");
	} else if ($("#status-away").hasClass("active")) {
		$("#profile-img").addClass("away");
	} else if ($("#status-busy").hasClass("active")) {
		$("#profile-img").addClass("busy");
	} else if ($("#status-offline").hasClass("active")) {
		$("#profile-img").addClass("offline");
	} else {
		$("#profile-img").removeClass();
	};

	$("#status-options").removeClass("active");
});

function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
	$('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
};

$('.submit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});
//# sourceURL=pen.js
</script>
                    <!-- /.panel .chat-panel -->
                </article>
                @else
                <a href="{{route('register')}}">Register/Login To View Group Discussion</a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
