<!-- need to remove -->
 <style>
    i{
        margin-right: 10px;
    }

 </style>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home text-teal"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('students.index') }}" class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
     <i class="fas fa-user-graduate text-teal"></i>
        <p>Students</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('courses.index') }}" class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
     <i class="fas fa-book-reader text-teal"></i>
        <p>Courses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('levels.index') }}" class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
    <i class="fas fa-layer-group text-teal"></i>
        <p>Levels</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('departments.index') }}" class="nav-link {{ Request::is('departments*') ? 'active' : '' }}">
       <i class="fas fa-laptop-house text-teal"></i>
        <p>Departments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('schools.index') }}" class="nav-link {{ Request::is('schools*') ? 'active' : '' }}">
      <i class="fas fa-school text-teal"></i>
        <p>Schools</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employees.index') }}" class="nav-link {{ Request::is('employees*') ? 'active' : '' }}">
      <i class="fas fa-users text-teal"></i>
        <p>Employees</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('units.index') }}" class="nav-link {{ Request::is('units*') ? 'active' : '' }}">
       <i class="fas fa-book text-teal"></i>
        <p>Units</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('invoices*') || Request::is('receipts*') ? 'active' : '' }}" onclick="toggleDropdown(event)">
        <i class="fas fa-money-bill-wave text-teal"></i> Finances <i class="fas fa-caret-down"></i>
    </a>
    <div id="financesDropdown" class="collapse">
         <a href="{{ route('fees.index') }}" class="dropdown-item d-flex align-items-center {{ Request::is('fees*') ? 'active' : '' }}">
            <i class="fas fa-file-invoice-dollar mr-2 text-teal"></i> Fees
        </a>
        <a href="{{ route('invoices.index') }}" class="dropdown-item d-flex align-items-center {{ Request::is('invoices*') ? 'active' : '' }}">
            <i class="fas fa-file-invoice mr-2 text-teal"></i> Invoices
        </a>
        <a href="{{ route('receipts.index') }}" class="dropdown-item d-flex align-items-center {{ Request::is('receipts*') ? 'active' : '' }}">
            <i class="fas fa-receipt mr-2 text-teal"></i> Receipts
        </a>
    </div>
</li>

<!-- inahandle drop down behaviour -->
<script>
    function toggleDropdown(event) {
        event.preventDefault();
        const dropdownContent = document.getElementById('financesDropdown');
        dropdownContent.classList.toggle('show');
    }
</script>

<style>
    #financesDropdown.show {
        display: block;
        padding-left: 20px;
    }
    #financesDropdown {
        display: none;
    }
/* Style for the dropdown items */
.dropdown-item {
        display: flex;
        align-items: center;
    }

    .dropdown-item:hover {
        background-color: #343a40;
        color: white;
    }

    .nav-link {
        color: #495057;
        padding: 10px;
    }

    .nav-link:hover {
        color: #007bff;
    }

    .fa-caret-down{
        margin-left: 100px;
        font-size: 20px;
    }
</style>

<li class="nav-item">
    <a href="{{ route('lecturers.index') }}" class="nav-link {{ Request::is('lecturers*') ? 'active' : '' }}">
    <i class="fas fa-chalkboard-teacher text-teal"></i>
        <p>Lecturers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('enrolments.index') }}" class="nav-link {{ Request::is('enrolments*') ? 'active' : '' }}">
        <i class="fas fa-sign-in-alt text-teal"></i>
        <p>Enrolments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('grading_systems.index') }}" class="nav-link {{ Request::is('gradingSystems*') ? 'active' : '' }}">
    <i class="fas fa-sort-alpha-down-alt text-teal"></i>
        <p>Grading Systems</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('grades.index') }}" class="nav-link {{ Request::is('grades*') ? 'active' : '' }}">
        <i class="fas fa-poll text-teal"></i>
        <p>Results</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('exams.index') }}" class="nav-link {{ Request::is('exams*') ? 'active' : '' }}">
    <i class="fas fa-sticky-note text-teal"></i>
        <p>Exams</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('courseworks.index') }}" class="nav-link {{ Request::is('courseworks*') ? 'active' : '' }}">
       <i class="fab fa-leanpub text-teal"></i>
        <p>Courseworks</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('lessons.index') }}" class="nav-link {{ Request::is('lessons*') ? 'active' : '' }}">
    <i class="fas fa-book-reader text-teal"></i>
        <p>Lessons</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('attendances.index') }}" class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
        <i class="far fa-address-book text-teal"></i>
        <p>Attendances</p>
    </a>
</li>



