<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Expected Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expected_amount', 'Expected Amount:') !!}
    {!! Form::number('expected_amount', null, ['class' => 'form-control', 'required']) !!}
</div>