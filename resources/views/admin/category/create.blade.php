@extends('admin.layout.app')
@section('content')
  <div class="content-wrapper">
  
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
        {!! Form::open(['route' => 'categories.store']) !!}
        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
            {!! Form::label('Thumbnail') !!}
            {!! Form::text('thumbnail', null, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
            @if ($errors->has('thumbnail'))
                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
        </div>

        <div class="form-group @if($errors->has('name')) has-error @endif">
            {!! Form::label('Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            @if ($errors->has('name'))
                <span class="help-block">{!! $errors->first('name') !!}</span>@endif
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