@extends('layouts.main')

@section('container')
      <div class="bg-gray-300 rounded-br-lg rounded-bl-lg">
          <div class="bg-white shadow-2xl flex">
            <div class="ms-11 my-2">
              <svg height="50px" width="50px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M256.008,411.524c54.5,0,91.968-7.079,92.54-13.881c2.373-28.421-34.508-43.262-49.381-48.834 c-7.976-2.984-19.588-11.69-19.588-17.103c0-3.587,0-8.071,0-14.214c4.611-5.119,8.095-15.532,10.183-27.317 c4.857-1.738,7.627-4.524,11.095-16.65c3.69-12.93-5.548-12.5-5.548-12.5c7.468-24.715-2.357-47.944-18.825-46.246 c-11.358-19.857-49.397,4.54-61.31,2.841c0,6.818,2.834,11.92,2.834,11.92c-4.143,7.882-2.548,23.564-1.389,31.485 c-0.667,0-9.016,0.079-5.468,12.5c3.452,12.126,6.23,14.912,11.088,16.65c2.079,11.786,5.571,22.198,10.198,27.317 c0,6.143,0,10.627,0,14.214c0,5.413-12.35,14.548-19.611,17.103c-14.953,5.262-51.746,20.413-49.373,48.834 C164.024,404.444,201.491,411.524,256.008,411.524z"></path> <path class="st0" d="M404.976,56.889h-75.833v16.254c0,31.365-25.524,56.889-56.889,56.889h-32.508 c-31.366,0-56.889-25.524-56.889-56.889V56.889h-75.834c-25.444,0-46.071,20.627-46.071,46.071v362.969 c0,25.444,20.627,46.071,46.071,46.071h297.952c25.445,0,46.072-20.627,46.072-46.071V102.96 C451.048,77.516,430.421,56.889,404.976,56.889z M402.286,463.238H109.714V150.349h292.572V463.238z"></path> <path class="st0" d="M239.746,113.778h32.508c22.405,0,40.635-18.23,40.635-40.635V40.635C312.889,18.23,294.659,0,272.254,0 h-32.508c-22.406,0-40.635,18.23-40.635,40.635v32.508C199.111,95.547,217.341,113.778,239.746,113.778z M231.619,40.635 c0-4.492,3.634-8.127,8.127-8.127h32.508c4.492,0,8.127,3.635,8.127,8.127v16.254c0,4.492-3.635,8.127-8.127,8.127h-32.508 c-4.493,0-8.127-3.635-8.127-8.127V40.635z"></path> </g> </g></svg>
            </div>
            
            <h1 class="text-2xl p-4">
              Attendance Employees
            </h1>
          </div>
          <div class="bg-white rounded my-4 mx-12 px-8 pt-8">
            <table class="table-auto">
              <style>
                .table-auto thead tr td {
                    padding-top: 5px; 
                    padding-bottom: 5px; 
                }
            </style>
                <thead class="text-xs">
                  <tr>
                    <td class="p-3 tracking-wide text-left">First Name</td>
                    <td class="p-3"> : <span id="first_name"></span></td>
                  </tr>
                </thead>
                <thead class="text-xs">
                  <tr>
                    <td class="p-3 tracking-wide text-left">Last Name</td>
                    <td class="p-3"> : <span id="last_name"></span></td>
                  </tr>
                </thead>
                <thead class="text-xs">
                  <tr>
                    <td class="p-3 tracking-wide text-left">Gender</td>
                    <td class="p-3"> : <span id="gender"></span></td>
                  </tr>
                </thead>
                <thead class="text-xs">
                    <tr>
                      <td class="p-3 tracking-wide text-left">Birth Date</td>
                      <td class="p-3"> : <span id="birth_date"></span></td>
                    </tr>
                </thead>
                <thead class="text-xs">
                    <tr>
                      <td class="p-3 tracking-wide text-left">Education</td>
                      <td class="p-3"> : <span id="education"></span></td>
                    </tr>
                </thead>
                <thead class="text-xs">
                    <tr>
                      <td class="p-3 tracking-wide text-left">ID Number</td>
                      <td class="p-3"> : <span id="id_number"></span></td>
                    </tr>
                </thead>
                <thead class="text-xs">
                    <tr>
                      <td class="p-3 tracking-wide text-left">Address</td>
                      <td class="p-3"> : <span id="address"></span></td>
                    </tr>
                </thead>
                <thead class="text-xs">
                    <tr>
                      <td class="p-3 tracking-wide text-left">Marital Status</td>
                      <td class="p-3"> : <span id="marital_status"></span></td>
                    </tr>
                </thead>
              </table>

              <div class="text-center font-bold">
                <h2>Attendance Employee</h2>
              </div>
              <br>
              
              <table class="table-auto mx-auto">
                <thead class="mx-4 bg-gray-50 border-b-2 border-gray-300">
                  <tr>
                    <th class="p-3 text-base font-semibold tracking-wide text-left">Attendance Date</th>
                    <th class="p-3 text-base font-semibold tracking-wide text-left">Day</th>
                    <th class="p-3 text-base font-semibold tracking-wide text-left">Time In</th>
                    <th class="p-3 text-base font-semibold tracking-wide text-left">Time Out</th>
                    <th class="p-3 text-base font-semibold tracking-wide text-left">Break Time Start</th>
                    <th class="p-3 text-base font-semibold tracking-wide text-left">Break Time End</th>
                    <th class="p-3 text-base font-semibold tracking-wide text-left">Status Attendance</th>
                  </tr>
                </thead>
                <tbody class="mx-4 bg-gray-50 border-b-2 border-gray-300" id="employee-list">
                 
                </tbody>
              </table>
              <br>
              
          </div>
          
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
          $(document).ready(function() {
            var urlParams = new URLSearchParams(window.location.search);
            var id_employee = urlParams.get('id_employee');
              $.ajax({
                url: "{{ url('api/data_employees') }}/" + id_employee,
                  method: 'GET',
                  success: function(employee) {
                      $('#first_name').text(employee.first_name);
                      $('#last_name').text(employee.last_name);
                      $('#gender').text(employee.gender);
                      $('#birth_date').text(employee.birth_date);
                      $('#education').text(employee.education);
                      $('#id_number').text(employee.id_number);
                      $('#address').text(employee.address);
                      $('#marital_status').text(employee.marital_status);
                  },
                  error: function(error) {
                      console.log(error);
                  }
              });
          });
      </script>
      <script>
        $(document).ready(function() {
            var urlParams = new URLSearchParams(window.location.search);
            var id_employee = urlParams.get('id_employee');
            $.ajax({
                url: "{{ url('api/data_employee_attendance') }}/" + id_employee,
                method: 'GET',
                success: function(data) {
                    console.log(data); // Cek struktur data
                    var employeeList = $('#employee-list');
                    employeeList.empty();
    
                    $.each(data, function(index, attendance) {
                        var status = '';
                        if (attendance.time_in > '08:00') {
                            status = 'On Late';
                        } else if (attendance.time_out > '18:00') {
                            status = 'Overtime';
                        } else if (
                            (attendance.time_in == '-' || attendance.time_in == '0' || attendance.time_in == null) &&
                            (attendance.time_out == '-' || attendance.time_out == '0' || attendance.time_out == null) &&
                            (attendance.break_time_start == '-' || attendance.break_time_start == '0' || attendance.break_time_start == null) &&
                            (attendance.break_time_end == '-' || attendance.break_time_end == '0' || attendance.break_time_end == null)
                        ) {
                            status = 'On Leave';
                        } else if (attendance.time_in < '08:00' && (attendance.time_out >= '17:00' && attendance.time_out <= '18:00')) {
                            status = 'Full Attendance';
                        } else {
                            status = 'Undefined'; // Status default jika tidak ada kondisi yang sesuai
                        }
                        employeeList.append(`
                            <tr>
                                <td class="p-3 text-sm font-semibold tracking-wide text-left">${attendance.attendance_date}</td>
                                <td class="p-3 text-sm font-semibold tracking-wide text-left">${attendance.day}</td>
                                <td class="p-3 text-sm font-semibold tracking-wide text-left">${attendance.time_in}</td>
                                <td class="p-3 text-sm font-semibold tracking-wide text-left">${attendance.time_out}</td>
                                <td class="p-3 text-sm font-semibold tracking-wide text-left">${attendance.break_time_start}</td>
                                <td class="p-3 text-sm font-semibold tracking-wide text-left">${attendance.break_time_end}</td>
                                <td class="p-3 text-sm font-semibold tracking-wide text-left">${status}</td>
                            </tr>
                        `);
                    });
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    </script>
    
@endsection
