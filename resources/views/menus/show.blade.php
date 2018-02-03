@extends('layouts.main')
@section('title', 'Menu Details')

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=161117594497266';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="container">
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">{{$menu->name}}
        </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="{{ asset('/storage/images')."/".$menu->image }}" alt="{{$menu->image}}">
            </div>

            <div class="col-md-4">
                <h3 class="my-3">Menu Description</h3>
                <p>{{$menu->description}}</p>
               <a href="/cart/{{$menu->id}}" ><button class="btn btn-primary" margin="20">Add to Cart</button></a>
            </div>

        </div>
        <!-- /.row -->

<div class="row">
    <div class="col-md-7">
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="small" data-text="This is an awesome menu. Did you try it?! " data-hashtags="{{$menu->name}}" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<a href="https://twitter.com/intent/tweet?button_hashtag={{$menu->name}}&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-show-count="false">Tweet #{{$menu->name}}</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<div class="fb-like" data-href="http://localhost:8000/menus/{{$menu->id}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    </div>

    <div class="col-md-5">
        <div class="fb-comments" data-href="http://localhost:8000/menus/{{$menu->id}}" data-numposts="5"></div>
    </div>
</div>



        <!-- Related Projects Row -->
        <h3 class="my-4">You may also like</h3>

        <div class="row">

            @foreach($interested as $interest)
            <div class="col-md-3 col-sm-6 mb-4">
                <a href="/menus/{{$interest->id}}">
                    <img class="img-fluid" src="{{ asset('/storage/images')."/".$interest->image }}" alt="" height="300" width="200">
                </a>
                <p>
                    <h5>{{$interest->name}}</h5>
                </p>
            </div>
            @endforeach



        </div>
        <!-- /.row -->

    </div>



@endsection