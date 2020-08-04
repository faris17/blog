@extends('admin.layout.app')
@section('content')
  <div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Form Post Content Blog </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Post</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
           {!! Form::open(['route' => 'posts.store']) !!}
            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                {!! Form::label('Thumbnail') !!}
                {!! Form::text('thumbnail', null, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                @if ($errors->has('thumbnail'))
                    <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
            </div>

            <div class="form-group @if($errors->has('title')) has-error @endif">
                {!! Form::label('Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                @if ($errors->has('title'))
                    <span class="help-block">{!! $errors->first('title') !!}</span>@endif
            </div>

            <div class="form-group @if($errors->has('sub_title')) has-error @endif">
                {!! Form::label('Sub Title') !!}
                {!! Form::text('sub_title', null, ['class' => 'form-control', 'placeholder' => 'Sub Title']) !!}
                @if ($errors->has('sub_title'))
                    <span class="help-block">{!! $errors->first('sub_title') !!}</span>@endif
            </div>

            <div class="form-group @if($errors->has('details')) has-error @endif">
                {!! Form::label('Details') !!}
                {!! Form::textarea('details', null, ['class' => 'form-control', 'placeholder' => 'Details', 'id'=>'content_blog']) !!}
                @if ($errors->has('details'))
                    <span class="help-block">{!! $errors->first('details') !!}</span>@endif
            </div>

            <div class="form-group @if($errors->has('category_id')) has-error @endif">
                {!! Form::label('Category') !!}
                {!! Form::select('category_id[]', $categories, null, ['class' => 'form-control', 'id' => 'category_id', 'multiple' => 'multiple']) !!}
                @if ($errors->has('category_id'))
                    <span class="help-block">{!! $errors->first('category_id') !!}</span>
                @endif
            </div>

            <div class="form-group">
                {!! Form::label('Publish') !!}
                {!! Form::select('ispublished', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Create',['class' => 'btn btn-sm btn-primary']) !!}
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection
</div>


@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#content_blog' ) )
        .catch( error => {
            console.error( error );
        } );

        $('#category_id').select2();

</script>
@endsection