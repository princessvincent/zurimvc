<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        {{-- Material Dashboard 2 by Creative Tim --}}
    </title>
    @extends('layouts.nav')
    @section('content')
        <div class="card">


 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
   <script> 
   swal("{{ session('status') }}");
   
   </script> 
@endif


            <div class="card-body">
                <div class="card-header"><h3> <strong>Users</strong></h3></div>


                            <table class="table table-borderd table-striped">
                <thead>
                    <tr>
                        {{-- <th>Id</th> --}}
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach ($view as $views)
                        <tr>
                            <td>{{ $views->name }}</td>
                            <td>{{ $views->email }}</td>
                            <td>{{ $views->phone_num}}</td>
                            <td>
                           <a  type="button"  href="{{ url('edit/' . $views->id) }}" class="btn btn-primary">Edit</a>

                            <a  type="button"  href="{{ url('delete/'. $views->id) }}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>

            </div>


        </div>
    @endsection
    </body>

</html>
