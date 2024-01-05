@extends('layouts.main')

@section('container')
      <div class="bg-gray-300 rounded-br-lg rounded-bl-lg">
          <div class="bg-white shadow-2xl flex">
            <div class="ms-11 my-2">
                <svg height="50px" width="50px" fill="#000000" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>employee_solid</title> <g id="aad88ad3-6d51-4184-9840-f392d18dd002" data-name="Layer 3"> <circle cx="16.86" cy="9.73" r="6.46"></circle> <rect x="21" y="28" width="7" height="1.4"></rect> <path d="M15,30v3a1,1,0,0,0,1,1H33a1,1,0,0,0,1-1V23a1,1,0,0,0-1-1H26V20.53a1,1,0,0,0-2,0V22H22V18.42A32.12,32.12,0,0,0,16.86,18a26,26,0,0,0-11,2.39,3.28,3.28,0,0,0-1.88,3V30Zm17,2H17V24h7v.42a1,1,0,0,0,2,0V24h6Z"></path> </g> </g></svg>
              </div>
              
              <h1 class="text-2xl p-4">
                Data Employees
              </h1>
            <h1 class="text-2xl p-4 ">
              
            </h1>
            
          </div>
          <div class="bg-white rounded-b-lg mx-12 px-8 pt-2">
            <table class="table-fixed w-full shadow-2xl ">
                <br>
                <thead class="mx-4 bg-gray-50 border-b-2 border-gray-300">
                  <tr>
                    <th class="p-3 text-sm tracking-wide text-left">First Name</th>
                    <th class="p-3 text-sm tracking-wide text-left">Last Name</th>
                    <th class="p-3 text-sm tracking-wide text-left w-40">ID Number</th>
                    <th class="p-3 text-sm tracking-wide text-left">Address</th>
                    <th class="p-3 text-sm tracking-wide text-left">Gender</th>
                    <th class="p-3 text-sm tracking-wide text-left">Birth Date</th>
                    <th class="p-3 text-sm tracking-wide text-left">Education</th>
                    <th class="p-3 text-sm tracking-wide text-left">Marital Status</th>
                    <th class="p-3 text-sm tracking-wide text-left">Attendance</th>
                  </tr>
                </thead>
                <tbody class="mx-4 bg-gray-50 border-b-2 border-gray-300" id="employee-list">
                </tbody>
              </table>
              <div class="flex justify-end mt-4 mx-12 ">
                <div class="text-sm mt-2 me-2 font-semibold">
                  Generate Report
                </div>
                <a href="{{ url('generate_pdf') }}" class="bg-red-600 hover:bg-red-800 text-white text-xs py-2 px-4 rounded mr-2">PDF</a>
                <a href="{{ url('generate_excel') }}" class="bg-green-600 hover:bg-green-800 text-white text-xs py-2 px-4 rounded">Excel</a>
            </div>  
            <br>
          </div>
          <br>
          
      </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $.ajax({
                    url: "{{ url('api/data_employees') }}",
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        var employeeList = $('#employee-list');
                        employeeList.empty();
                        $.each(data, function(index, employee) {
                          
                            var viewButton = `<a href="{{ url('attendance_employee') }}?id_employee=${employee.id_employee}" class="bg-blue-500 hover:bg-blue-700 text-white text-xs py-2 px-4 rounded">View</a>`;
                            employeeList.append(`
                                <tr>
                                    <td class="p-3 text-xs  tracking-wide text-left">${employee.first_name}</td>
                                    <td class="p-3 text-xs  tracking-wide text-left">${employee.last_name}</td>
                                    <td class="p-3 text-xs  tracking-wide text-left w-32 overflow-hidden whitespace-nowrap text-overflow-ellipsis">${employee.id_number}</td>
                                    <td class="p-3 text-xs  tracking-wide text-left">${employee.address}</td>
                                    <td class="p-3 text-xs  tracking-wide text-left">${employee.gender}</td>
                                    <td class="p-3 text-xs  tracking-wide text-left">${employee.birth_date}</td>
                                    <td class="p-3 text-xs  tracking-wide text-left">${employee.education}</td>
                                    <td class="p-3 text-xs  tracking-wide text-left">${employee.marital_status}</td>
                                    <td class="p-3 text-xs  tracking-wide text-left">
                                        ${viewButton}
                                    </td>
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
