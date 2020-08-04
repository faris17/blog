@extends('website.template.bloglayout')

@section('contentblog')
 <div class="col-md-12 col-lg-8 main-content">
             <h2><a href="#">{{$post->title}}</a></h2>
            <div class="post-content-body">
             <p>{{$post->sub_title}}</p>
			
            <div class="row mb-5 mt-5">
              <div class="col-md-12 mb-4">
               <img src="{{ $post->thumbnail }}" alt="Image placeholder" class="img-fluid rounded">
              </div>
            </div>

            <p>{!!$post->details!!}</p>
            
            </div>

            @if(count($post->categories) > 0)
               <div class="pt-5">
                <p>Categories:
                @foreach($post->categories as $category)
                     <a href="{{url('category/'.$category->slug)}}">{{$category->name }}</a>,
                @endforeach
                </p>
                </div>
            @endif  


        </div> 
@endsection