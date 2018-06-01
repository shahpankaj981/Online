<!-- Temporary-->
{!! Form::hidden('user_id',1) !!}

<div class="form-group">
  {!! Form::label('name','Name:') !!}
  {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<!-- Price input -->
<div class="form-group">
  {{ Form::label('price', 'Price', ['class' => 'control-label']) }}
  {{ Form::text('price', null, ['class' => 'form-control'])  }}
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'form-control btn btn-info']) !!}
</div>