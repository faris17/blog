@extends('website.template.linkmaster')

@section('contentpage')
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>Recent Posts</h2>
          </div>
        </div>

        @yield('content')

      </div>
    </div>
@endsection

 