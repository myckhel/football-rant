
<!-- Section Breadcrumbs-->
<section class="section parallax-container breadcrumbs-wrap" data-parallax-img="{{URL::asset('images/bg-breadcrumbs-1-1920x726.jpg')}}">
  <div class="material-parallax parallax">
    <img src="{{URL::asset('Home_files/bg-breadcrumbs-1-1920x726.jpg')}}" alt="" style="transform: translate3d(-50%, 257px, 0px); display: block;">
  </div>
  <div class="parallax-content breadcrumbs-custom context-dark">
    <div class="container">
      <h3 class="breadcrumbs-custom-title">{{$crumb}}</h3>
      <ul class="breadcrumbs-custom-path">
        <li><a href="{{route('club','atletico')}}">Home</a></li>
        @if(Route::currentRouteName() == 'post')
        <li><a href="{{route('news','atletico')}}">News</a></li>
        @endif
        <li class="active">{{$crumb}}</li>
      </ul>
    </div>
  </div>
</section>
