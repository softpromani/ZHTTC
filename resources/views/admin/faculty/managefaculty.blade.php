@extends('admin.includes.layout', ['breadcrumb_title' => 'Manage Faculty'])
@section('title', 'Manage Faculty')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Manage Faculty</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sr.No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Department Id</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Resume</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($faculties as $faculty)
                        <tr>
                            <th scope="row">{{ $loop->index+1 }}</th>
                            <td>{{ $faculty->name ?? 'N/A' }}</td>
                            <td>{{ $faculty->gender ?? 'N/A' }}</td>
                            <td>{{ $faculty->getDepartment->name ?? 'N/A' }}</td>
                            <td>{{ $faculty->designation ?? 'N/A' }}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ asset('storage/'.$faculty->resume) }}" target="_blank" >View Resume</a>
                            </td>
                            <td>
                                <img src="{{ asset('storage/'.$faculty->photo) }}" width="100" />
                            </td>
                            <td>{{ $faculty->phone ?? 'N/A' }}</td>
                            <td>{{ $faculty->email ?? 'N/A' }}</td>
                            <td>


                                <a href="{{ route('admin.faculty.edit', $faculty->id )}}" class="btn btn-primary"
                                    href="#">Edit</a>

                                <form action="{{ route('admin.faculty.destroy', $faculty->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this faculty?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
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





@endsection
