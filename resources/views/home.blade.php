@extends('layouts.app')

@section('content')


                    <div class="container">
                        <div class="jumbotron">
                            <div class="card">
                  <div class="card-header">
                    Employee
                  </div>
                      <div class="card-body">
                    <h5 class="card-title">Employee Information</h5>

                        <table class="table">
                  <thead class="thead-dark table-hover table-bordered">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">First name</th>
                      <th scope="col">Last name</th>
                      <th scope="col">Department</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <th>1</th>
                    <td>Loka</td>
                    <td>Loka</td>
                    <td>CS</td>
                    <td >
                        <button class="btn btn-primary ">Edit</button>
                        <button class="btn btn-success ">Attend</button>
                        <button class="btn btn-danger ">Not Attend</button>
                    </td>
                    </tr>


                  </tbody>
                </table>


                         </div>
                            </div>
                         </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

