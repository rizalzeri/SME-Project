@extends('layouts.main')

@section('container')
      <div class=" px-1 bg-gray-300 rounded-br-lg rounded-bl-lg">
          <div class="bg-white rounded mx-12 px-8 pt-8 shadow-lg" >
            <h1 class="text-2xl">
              Welcome To System Management Employee
            </h1>
            <p class="py-8">
              An employee management system is a system that can view information from employees. This information system includes employee profiles and employee attendance as well as information about that attendance. Users can generate reports in PDF or Excel format which include employee ID, employee name, total working days, total working hours.
            </p>
          </div>
          <div class="grid-cols-1 gap-1 my-8 flex justify-around text-cente">
            <div class="bg-white size-48 rounded-lg text-center shadow-2xl">
              <div class="my-2 text-1xl">
                Total Employee
              </div>
              <div class="flex items-center justify-center mt-12 text-2xl">
                <span id="totalEmployee"></span>
              </div>
            </div>
          </div>
          <div class="grid-cols-5 gap-5 my-8 flex justify-around text-center">          
           
            <div class="bg-white size-48 rounded-lg text-center shadow-2xl">
              <div class="my-2 text-1xl">
                Total Male
              </div>
              <div class="flex items-center justify-center mt-12 text-2xl">
                <span id="totalMale"></span>
              </div>
            </div>
            <div class="bg-white size-48 rounded-lg text-center shadow-2xl">
              <div class="my-2 text-1xl">
                Total Female
              </div>
              <div class="flex items-center justify-center mt-12 text-2xl">
                <span id="totalFemale"></span>
              </div>
            </div>
          </div>  
          <br>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
          $(document).ready(function () {
              $.ajax({
                  url: "{{ url('api/data_employees') }}",
                  method: 'GET',
                  dataType: 'json',
                  success: function (data) {
                      var totalEmployee = data.length;
                      var totalMale = data.filter(function (employee) {
                          return employee.gender === 'Male';
                      }).length;
                      var totalFemale = data.filter(function (employee) {
                          return employee.gender === 'Female';
                      }).length;
      
                      $('#totalEmployee').text(totalEmployee);
                      $('#totalMale').text(totalMale);
                      $('#totalFemale').text(totalFemale);
                  },
                  error: function (error) {
                      console.log(error);
                  }
              });
          });
      </script>
@endsection
