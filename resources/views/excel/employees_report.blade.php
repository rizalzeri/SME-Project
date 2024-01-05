<table>
    <thead>
      <tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Total Working Days</th>
        <th>Total Working Hours</th>
      </tr>
    </thead>
    <tbody>
      @if(count($data))
        @foreach($data as $data_employee)
          <tr>        
            <td>{{ $data_employee->id_employee }}</td>
            <td>{{ $data_employee->fullname }}</td>
            <td>{{ $data_employee->total_days }}</td>
            <td>{{ $data_employee->total_working_hours }}</td>
          </tr>
        @endforeach
      @else
      <tr>
        <td colspan="3">User Not Found</td>
      </tr>
      @endif
    </tbody>
</table>