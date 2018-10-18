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
                  @include('club.asset.css')

                  <?php $user = \Auth::user(); ?>
                  <div id="frame">
                    <div id="sidepanel">
                      <div id="profile">
                        <div class="wrap">
                          <img id="profile-img" src="{{Url::asset('Home_files/'.$user->avatar)}}" class="online" alt="" />
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
                          <group-list v-on:tgroup="toggleGroup" v-for="group in groups" :group="group"></group-list>
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
                          <!-- <img :src="'../Home_files/'+groups" alt="" /> -->
                          <p>Group name</p>
                          <div class="social-media">
                            <i class="" aria-hidden="true">@{{UsersInRoom.length}}</i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                             <i class="fa fa-instagram" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="messages">
                          <data-list v-on:user-on="userSave" :user="{{$user}}"></data-list>
                          <chat-log :messages="messages" :user_id="{{$user->id}}"></chat-log>
                        </div>
                        <div class="message-input">
                          <chat-composer v-on:messagesent="addMessage" :user="{{$user}}"></chat-composer>
                        </div>
                      </div>
                    </div>
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
<!--script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script-->
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
@endsection
