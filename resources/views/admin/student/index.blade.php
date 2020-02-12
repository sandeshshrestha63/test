@extends('admin.layouts.master')
@section('title','devilapp ')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @if(Session::has('success'))
          <div class="alert alert-primary">
            <p>{!! session()->get('success') !!}</p>
          </div>
          @endif
        <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Customer Details</p>
                  <a class="btn btn-primary mt-2 mt-xl-0" href="{{route('students.register')}}">Add new</a>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Fullname</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($students as $student)
                        <tr>
                          <td>{{$student->id}}</td>
                          <td><a href="{{route('students.show',$student->id)}}">{{$student->full_name}}</a></td>
                          <td>{{$student->address}}</td>
                          <td>{{$student->phone}}</td>
                          <td>
                            <form method="POST" action="{{route('students.edit',$student->id)}}">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="GET">
                                <button class="btn btn-danger" type="submit">Edit</button>
                            </form>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                          
                            <form method="POST" action="{{route('students.delete', $student->id)}}">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection