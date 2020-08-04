@extends('website.template.master')

@section('content')
<div class="row">
  @foreach($posts as $post)
  <div class="col-lg-4 mb-4">
    <div class="entry2">
      <a href="single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
      <div class="excerpt">
      <span class="post-category text-white bg-secondary mb-3">
      @if(count($post->categories) > 0)
        @foreach($post->categories as $category)
          {{$category->name }},
        @endforeach
      @endif
      </span>

      <h2><a href="{{url('post/'.$post->slug)}}">{{$post->title}}</a></h2>
      <div class="post-meta align-items-center text-left clearfix">
        <figure class="author-figure mb-0 mr-3 float-left"><img src="{{ $post->thumbnail }}" alt="Image" class="img-fluid"></figure>
        <span class="d-inline-block mt-1">By <a href="#">{{$post->user->name}}</a></span>
        <span>&nbsp;-&nbsp; {{date('M d, Y', strtotime($post->created_at))}}</span>
      </div>
      
        <p>{{$post->sub_title}}.</p>
        <p><a href="{{url('post/'.$post->slug)}}">Read More</a></p>
      </div>
    </div>
  </div>
  @endforeach
  
</div>

  {{$posts->links()}}
 
@endsection