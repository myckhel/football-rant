@extends('layouts.app')
@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $crumb = 'Teams'; ?>
<title>{{ config('app.name', $crumb) }}</title>
@endsection

@include('layouts.header')
@include('layouts.page-top')
@section('content')
<!-- Grid Shop-->
<section class="section section-md bg-gray-100">
  <div class="container">
    <div class="row row-50">
      <div class="col-md-12">
        <!-- Heading Component-->
        <article class="heading-component">
          <div class="heading-component-inner">
            <h5 class="heading-component-title">Available Team(s)
            </h5>
            <div class="heading-component-aside">
              <ul class="list-inline list-inline-xs list-inline-middle">
                <li>
                  <div class="select2-container select select-minimal" id="s2id_autogen3" style="min-width: 124px">
                    <a href="javascript:void(0)" class="select2-choice" tabindex="-1">
                      <span class="select2-chosen" id="select2-chosen-4">newest first</span><abbr class="select2-search-choice-close"></abbr>
                      <span class="select2-arrow" role="presentation"><b role="presentation"></b></span>
                    </a>
                    <label for="s2id_autogen4" class="select2-offscreen"></label>
                    <input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
                    <div class="select2-drop select2-display-none select-minimal-dropdown">
                      <div class="select2-search select2-search-hidden select2-offscreen">
                        <label for="s2id_autogen4_search" class="select2-offscreen"></label>
                        <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">
                      </div>
                      <ul class="select2-results" role="listbox" id="select2-results-4">   </ul>
                    </div>
                  </div>
                  <select class="select select-minimal" data-placeholder="Select an option" data-dropdown-class="select-minimal-dropdown" style="min-width: 124px; display: none;" tabindex="-1" title="">
                    <option value="newest first" selected="">newest first</option>
                    <option value="oldest first">oldest first</option>
                  </select>
                </li>
                <li>
                  <div class="select2-container select select-minimal" id="s2id_autogen5" style="min-width: 135px"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-6">product price</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen6" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-6" id="s2id_autogen6"><div class="select2-drop select2-display-none select-minimal-dropdown">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen6_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-6">   </ul></div></div><select class="select select-minimal" data-placeholder="Select an option" data-dropdown-class="select-minimal-dropdown" style="min-width: 135px; display: none;" tabindex="-1" title="">
                    <option value="product price" selected="">product price</option>
                    <option value="low to high">low to high</option>
                    <option value="high to low ">high to low</option>
                  </select>
                </li>
                <li>
                  <div class="select2-container select select-minimal" id="s2id_autogen7" style="min-width: 150px"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-8">show 6 per page</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen8" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-8" id="s2id_autogen8"><div class="select2-drop select2-display-none select-minimal-dropdown">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen8_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-8" id="s2id_autogen8_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-8">   </ul></div></div><select class="select select-minimal" data-placeholder="Select an option" data-dropdown-class="select-minimal-dropdown" style="min-width: 150px; display: none;" tabindex="-1" title="">
                    <option value="show 6 per page" selected="">show 6 per page</option>
                    <option value="show 12 per page">show 12 per page</option>
                    <option value="show 24 per page">show 24 per page</option>
                  </select>
                </li>
                <li><a class="icon icon-xs-big icon-gray-500 fa-th active" href="#"></a></li>
                <li><a class="icon icon-xs-big icon-gray-500 fa-list-ul" href="#"></a></li>
              </ul>
            </div>
          </div>
        </article>

      </div>
      <?php
      $fan = false;
      $guest = true;
      if(!($guest = !(\Auth::user()))){
        $fan = App\Fan::isFan(\Auth::user()->id);
      }
      ?>
      @foreach($teams as $team)
      <div class="col-md-6 col-lg-4">
        <article class="product">
          <header class="product-header">
            <!-- Badge-->
            <div class="badge badge-shop">new
            </div>
            <div class="product-figure"><img src="{{URL::asset('images/team/logo/'.$team->badge)}}" alt=""></div>
            <div class="product-buttons">
              <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                <ul class="product-share">
                  <li class="product-share-item"><span>Share</span></li>
                  <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                </ul>
              </div>
              <a class="product-button fa fa-eye" data-placement="right" title="View {{$team->name}}" href="{{route('club', [App\Club::toLink($team->name)])}}" style="font-size: 26px"></a>
                <a id="join_btn{{$team->id}}" class="product-button fa fa-{{$fan ? 'remove' : 'plus'}}"
                data-placement="right" title="{{$fan ? 'Leave '.$team->name : 'Join '.$team->name}}" href="{{$guest ? route('auth.sign',['action' => 'joinClub', 'key' => $team->id]) : '#'}}" style="font-size: 25px"
                @if(!$guest)
                onclick="event.preventDefault(); {{$fan ? 'leaveTeam('.$team->id.')' : ' joinTeam('.$team->id.')'}};"
                @endif
                ></a>
                @if(!$guest)
                <form id="{{$team->id}}" method="POST" style="display: none;" onsubmit="event.preventDefault();">
                  <input name="club" type="hidden" value="{{$team->id}}"/>
                  <input name="user" type="hidden" value="{{\Auth::user()->id}}"/>
                    @csrf
                </form>
                @endif
            </div>
          </header>
          <footer class="product-content">
            <h6 class="product-title"><a href="{{route('club', [App\Club::toLink($team->name)])}}">{{$team->name}} FC</a></h6>
            <div class="product-price">
              <i class="fa fa-flag"></i></span><span class="heading-6 product-price-new">{{$team->number_fans ? $team->number_fans : 0}}</span>
              <i class="fa fa-group"></i></span><span class="heading-6 product-price-new">{{$team->number_groups ? $team->number_groups : 0}}</span>
            </div>
            <ul class="product-rating">
              <li><span class="material-icons-star"></span></li>
              <li><span class="material-icons-star"></span></li>
              <li><span class="material-icons-star"></span></li>
              <li><span class="material-icons-star"></span></li>
              <li><span class="material-icons-star_half"></span></li>
            </ul>
          </footer>
        </article>
      </div>
      @endforeach
    </div>
    <nav class="pagination-wrap" aria-label="Page navigation">
      <ul class="pagination">
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><span class="page-link">...</span></li>
        <li class="page-item"><a class="page-link" href="#">14</a></li>
      </ul>
    </nav>
  </div>
</section>
@endsection

@section('js')
<script>
function joinTeam(id){

  var confirmed = confirm('confirm to join team');
  var values = {};
  if(confirmed){
      $.each($('#'+id).serializeArray(), function(i, field) {
      values[field.name] = field.value;
    });
    // process the form
    $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : "{{route('team.join', 'atletico')}}", // the url where we want to POST
        data        : values, // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
    })
    // using the done promise callback
    .done(function(data) {
      if(data.status){
        // log data to the console so we can see
        console.log(data);
        alert('Team Joined');
        window.location.replace("{{config('app.url')}}/"+data.name);
      }
      else if (!data.status) {
        alert(data.reason);
      }
      else{alert('Ooops Error Occured');}
    });
  }
}

function leaveTeam(id){

  var confirmed = confirm('confirm to leave '+id);
  var values = {};
  if(confirmed){
      $.each($('#'+id).serializeArray(), function(i, field) {
      values[field.name] = field.value;
    });
    // process the form
    $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : "{{route('team.leave', 'atletico')}}", // the url where we want to POST
        data        : values, // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
    })
    // using the done promise callback
    .done(function(data) {
      if(data.status){
        // log data to the console so we can see
        console.log(data);
        alert('You have sucessfully Left '+name);
        window.location.reload();
      }
      else if (!data.status) {
        alert(data.reason);
      }
      else{alert('Ooops Error Occured');}
    });
  }
}
</script>
@endsection
