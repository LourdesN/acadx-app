<!-- Admn No Field -->
<div class="col-sm-12">
    {!! Form::label('admn_no', 'Admn No:') !!}
    <p>{{ $student->admn_no }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $student->email }}</p>
</div>

<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $student->full_name }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{{ $student->phone_number }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $student->address }}</p>
</div>

<!-- Id Number Field -->
<div class="col-sm-12">
    {!! Form::label('id_number', 'Id Number:') !!}
    <p>{{ $student->id_number }}</p>
</div>

<!-- Date Of Admission Field -->
<div class="col-sm-12">
    {!! Form::label('date_of_admission', 'Date Of Admission:') !!}
    <p>{{ $student->date_of_admission }}</p>
</div>

<!-- Department Id Field -->
<div class="col-sm-12">
    {!! Form::label('department_id', 'Department:') !!}
    <p>{{ $student->department->name }}</p>
</div>

<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', 'Course:') !!}
    <p>{{ $student->course->name }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $student->gender }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $student->status }}</p>
</div>

