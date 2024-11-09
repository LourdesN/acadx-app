<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $fee->course_id }}</p>
</div>

<!-- Expected Amount Field -->
<div class="col-sm-12">
    {!! Form::label('expected_amount', 'Expected Amount:') !!}
    <p>{{ $fee->expected_amount }}</p>
</div>

