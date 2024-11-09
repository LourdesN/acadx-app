<?php

namespace App\DataTables;

use App\Models\Student;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class StudentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        // Format the data as needed (e.g., displaying department name, course name, gender, etc.)
        return $dataTable->addColumn('action', 'students.datatables_actions')
                        ->editColumn('date_of_admission', function ($student) {
                        return \Carbon\Carbon::parse($student->date_of_admission)->format('d-m-Y');
                        })
                         ->editColumn('gender', function ($student) {
                             return $student->gender == 'male' ? 'Male' : 'Female';
                         })
                         ->editColumn('department_id', function ($student) {
                             return $student->department ? $student->department->name : 'N/A';
                         })
                         ->editColumn('course_id', function ($student) {
                             return $student->course ? $student->course->name : 'N/A';
                         });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Student $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Student $model)
    {
        // Eager load the relations for department and course to avoid N+1 queries
        return $model->with(['department', 'course'])->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    // Enable Buttons as per your need
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'admn_no',
            'email',
            'full_name',
            'phone_number',
            'address',
            'id_number',
            'date_of_admission',
            'department_id'=> ['title' => 'Department'] , // Will display the department name
            'course_id'=> ['title' => 'Course'] ,     // Will display the course name
            'gender',        // Will display 'Male' or 'Female'
            'status',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'students_datatable_' . time();
    }

    
}
