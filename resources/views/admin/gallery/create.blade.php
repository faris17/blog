@extends('admin.layout.app')
@section('content')
  <div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Form Gallery </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Form Upload Gallery Thumbnail</a></li>
        <li class="breadcrumb-item active" aria-current="page">Upload</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
           {!! Form::open(['route' => 'galleries.store', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group @if($errors->has('image_url')) has-error @endif">
                {!! Form::label('Image url', null, ['style' => 'display: block;']) !!}
                {!! Form::file('image_url[]', ['multiple' => 'multiple']) !!}
                @if ($errors->has('image_url'))<span
                        class="help-block">{!! $errors->first('image_url') !!}</span>@endif
            </div>

            {!! Form::submit('Create',['class' => 'btn btn-sm btn-primary']) !!}
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection
</div>
