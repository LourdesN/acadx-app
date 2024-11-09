<!-- Admn No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admn_no', 'Admn No:') !!}
    {!! Form::text('admn_no', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Full Name Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('full_name', 'Full Name:') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::number('phone_number', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Id Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_number', 'Id Number:') !!}
    {!! Form::number('id_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Admission Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_admission', 'Date Of Admission:') !!}
    {!! Form::date('date_of_admission', null, ['class' => 'form-control','id'=>'date_of_admission']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_of_admission').datepicker()
    </script>
@endpush

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department:') !!}
    {!! Form::select('department_id', $departments, null, ['class' => 'form-control', 'placeholder' => 'Select department', 'required']) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course:') !!}
    {!! Form::select('course_id',$courses, null, ['class' => 'form-control', 'placeholder' => 'Select Course',  'required']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::select('gender', [
        'male' => 'Male',
        'female' => 'Female'
    ], null, ['class' => 'form-control','placeholder' => 'select Gender', 'required']) !!}
</div>

<!-- Status field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status') !!}
    {!! Form::select('status', [
        1 => 'Active',
        2 => 'Deferred',
        3 => 'Graduated'
    ], null, ['class' => 'form-control']) !!}
</div>
