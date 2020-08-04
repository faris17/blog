@extends('admin.layout.app')
@section('content')
  <div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Data Content Blog </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">posts</li>
      </ol>
    </nav>
  </div>
  <div class="row">
            <div class="col">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('message') }}
                    </div>
                @endif

                    @if(Session::has('delete-message'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ Session('delete-message') }}
                        </div>
                    @endif
            </div>
        </div>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-header">
            Post - list
            <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">Add
                New</a>
        </div>

        <div class="card-body">
          <table class="table table-bordered mb-0">
            <thead>
            <tr>
                <th scope="col" width="60">#</th>
                <th scope="col">Title</th>
                <th scope="col" width="200">Created By</th>
                <th scope="col" width="129">Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}"
                           class="btn btn-sm btn-primary">Edit</a>
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
@endsection
</div>