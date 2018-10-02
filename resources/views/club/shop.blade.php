@extends('layouts.app')
@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $crumb = 'Shop'; ?>
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
            <h5 class="heading-component-title">Product catalog
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
      <div class="col-md-6 col-lg-4">
        <article class="product">
          <header class="product-header">
            <!-- Badge-->
            <div class="badge badge-red">Hot<span class="icon material-icons-whatshot"></span>
            </div>
            <div class="product-figure"><img src="{{URL::asset('Home_files/product-1.png')}}" alt=""></div>
            <div class="product-buttons">
              <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                <ul class="product-share">
                  <li class="product-share-item"><span>Share</span></li>
                  <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                </ul>
              </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-1-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
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
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="product">
          <header class="product-header">
            <!-- Badge-->
            <div class="badge badge-shop">new
            </div>
            <div class="product-figure"><img src="{{URL::asset('Home_files/product-2.png')}}" alt=""></div>
            <div class="product-buttons">
              <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                <ul class="product-share">
                  <li class="product-share-item"><span>Share</span></li>
                  <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                </ul>
              </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-2-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
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
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="product">
          <header class="product-header">
            <div class="product-figure"><img src="{{URL::asset('Home_files/product-3.png')}}" alt=""></div>
            <div class="product-buttons">
              <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                <ul class="product-share">
                  <li class="product-share-item"><span>Share</span></li>
                  <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                </ul>
              </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-3-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
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
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="product">
          <header class="product-header">
            <div class="product-figure"><img src="{{URL::asset('Home_files/product-4.png')}}" alt=""></div>
            <div class="product-buttons">
              <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                <ul class="product-share">
                  <li class="product-share-item"><span>Share</span></li>
                  <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                </ul>
              </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-4-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
            </div>
          </header>
          <footer class="product-content">
            <h6 class="product-title"><a href="#">Apple watch nike+</a></h6>
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
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="product">
          <header class="product-header">
            <!-- Badge-->
            <div class="badge badge-red">Hot<span class="icon material-icons-whatshot"></span>
            </div>
            <div class="product-figure"><img src="{{URL::asset('Home_files/product-5.png')}}" alt=""></div>
            <div class="product-buttons">
              <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                <ul class="product-share">
                  <li class="product-share-item"><span>Share</span></li>
                  <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                </ul>
              </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-5-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
            </div>
          </header>
          <footer class="product-content">
            <h6 class="product-title"><a href="#">nike free rn</a></h6>
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
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="product">
          <header class="product-header">
            <div class="product-figure"><img src="{{URL::asset('Home_files/product-6.png')}}" alt=""></div>
            <div class="product-buttons">
              <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                <ul class="product-share">
                  <li class="product-share-item"><span>Share</span></li>
                  <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                  <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                </ul>
              </div><a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-6-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
            </div>
          </header>
          <footer class="product-content">
            <h6 class="product-title"><a href="#">atletico black t-shirt</a></h6>
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
        </article>
      </div>
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
