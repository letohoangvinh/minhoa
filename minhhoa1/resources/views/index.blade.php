
@extends('layout.app')

@section('title' , "DANH SÁCH SINH VIÊN")

@section('content')

     <div class="container">

          <table class="table ">
               <thead class="">
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Fullname</th>
                   <th scope="col">Birthday</th>
                   <th scope="col">Address</th>
                   <th scope="col">Edit</th>
                 </tr>
               </thead>
               <tbody>
                    @foreach ($data as $student)
                    <tr>
                         <th scope="row"> {{ $student->id }}</th>
                         <td> {{ $student->fullname }}</td>
                         <td> {{ $student->birthday }}</td>
                         <td>{{ $student->address }}</td>
                         <td>
                              <a href="{{ url('/edit/' . $student->id ) }}" ><button onclick="{{ url('/' . $student->id . '/edit') }}" type="button" class="btn btn-outline-primary">Edit</button> </a>
                         </td>
                       
                       </tr>
                    @endforeach

               </tbody>
             </table>
     </div>

@endsection