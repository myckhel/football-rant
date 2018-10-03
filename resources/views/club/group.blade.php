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
                  <div class="post-classic-aside">
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Chat
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="{{URL::asset('Home_files/user-2-63x63.jpg')}}" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="{{URL::asset('Home_files/user-3-63x63.jpg')}}" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="{{URL::asset('Home_files/user-5-69x69.jpg')}}" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="{{URL::asset('Home_files/user-6-69x69.jpg')}}" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                  </div>
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
