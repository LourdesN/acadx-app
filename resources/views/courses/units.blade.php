@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-header bg-teal text-white">
            <h4 class="mb-0">Units for Course: <strong>{{ $course->name }}</strong></h4>
        </div>
        <div class="card-body">
            @if($course->units->isNotEmpty())
                <ul class="list-group">
                    @foreach ($course->units as $unit)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $unit->unit_name }}
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="alert alert-warning text-center">
                    <strong>No units found for this course.</strong>
                </div>
            @endif
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Back to Courses
            </a>
        </div>
    </div>
</div>
@endsection

