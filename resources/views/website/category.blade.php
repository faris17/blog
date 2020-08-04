@extends('website.template.bloglayout')

@section('contentblog')
 <div class="col-md-12 col-lg-8 main-content">
    <h2>Kategori : {{$category->name}}</h2>
    @foreach($posts as $post)
        <div class="col-md-12">
        <div class="post-content-body">
         <h3><a href="{{url('post/'.$post->slug)}}">{{$post->title}}</a></h3>
    	
        <div class="row mb-5 mt-5">
          <div class="col-md-12 mb-4">
           <img src="{{asset('website/images/'.$post->thumbnail)}}" alt="Image placeholder" class="img-fluid rounded">
          </div>
        </div>

        <p>{{$post->sub_title}}</p>
        </div>
        </div>
    @endforeach

    {{$posts->links()}}
</div> 
@endsection