<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #f2f2f2;
  
}
h3 {
  text-align: center;
  text-transform: uppercase;
  
}
</style>
</head>
<body>

<h3>Reports Attendance Employee</h3>

<table id="customers">
    <thead>
      <tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Total Working Days</th>
        <th>Total Working Hours</th>
      </tr>
    </thead>
    <tbody id="employee-list">
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

</body>
</html>
