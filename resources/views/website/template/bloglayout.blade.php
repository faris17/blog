@extends('website.template.linkmaster')

@section('contentpage')
<section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

         @yield('contentblog')

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            
			
            <!-- END sidebar-box -->  
            <div class="sidebar-box">
              <h3 class="heading">Popular Posts</h3>
              <div class="post-entry-sidebar">
                <ul>

                  @foreach($postspopular as $popular)
                    <li>
                    <a href="{{url('post/'.$popular->slug)}}">
                      <img src="{{$popular->thumbnail}}" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4>{{$popular->title}}</h4>
                        <div class="post-meta">
                          <span class="mr-2">{{date('M d, Y', strtotime($popular->created_at))}}</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  @endforeach
                 
                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
              <ul class="categories">
                
                    @foreach($categories as $category)
                       <li><a href="{{url('category/'.$category->slug)}}"> {{$category->name }}</a> 
                       </li>
                    @endforeach
              </ul>
            </div>
            <!-- END sidebar-box -->


        </div>
      </div>
</section>
    
@endsection



    
