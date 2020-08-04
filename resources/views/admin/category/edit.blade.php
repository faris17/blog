@extends('admin.layout.app')
@section('content')
  <div class="content-wrapper">
  
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
        <div class="card-body">
        {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) !!}
        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
            {!! Form::label('Thumbnail') !!}
            {!! Form::text('thumbnail', $category->thumbnail, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
            @if ($errors->has('thumbnail'))
                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
        </div>

        <div class="form-group @if($errors->has('name')) has-error @endif">
            {!! Form::label('Name') !!}
            {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            @if ($errors->has('name'))
                <span class="help-block">{!! $errors->first('name') !!}</span>@endif
        </div>

        <div class="form-group">
            {!! Form::label('Publish') !!}
            {!! Form::select('ispublished', [1 => 'Publish', 0 => 'Draft'], isset($category->ispublished) ? $category->ispublished : null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Update',['class' => 'btn btn-sm btn-warning']) !!}
        {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection
</div>