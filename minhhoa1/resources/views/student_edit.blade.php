
@extends('layout.app')

@section('title' , "THÔNG TIN SINH VIÊN")

@section('content')

     <form class="w-50 m-auto" method="POST" action="{{ url('/save/' . $student->id) }}">
          @csrf 
          <div class="form-group">
          <label for="formGroupExampleInput">ID </label>
               <input type="text" class="form-control" id="id" name="id" value="{{ $student->id}}" disabled='true' placeholder="Example input">
          </div>
          <div class="form-group">
          <label for="formGroupExampleInput2">Fullname</label>
          <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $student->fullname}}" placeholder="Another input">
          </div>

          <div class="form-group">
               <label for="formGroupExampleInput2">Birthday</label>
               <input type="date"   class="form-control" id="birthday" name="birthday" value="{{ $student->birthday}}" >
               </div>

               <div class="form-group">
                    <label for="formGroupExampleInput2">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $student->address}}"  placeholder="Another input">
                    </div>
          <button type="submit"  class="btn btn-primary btn-md">Save</button>
     </form>


@endsection