@foreach($employees as $employee)

{{ $employee->fristname }}
{{ $employee->employee_id }}
{{ $employee->salary }}

@endforeach