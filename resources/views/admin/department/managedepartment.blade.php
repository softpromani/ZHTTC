@extends('admin.includes.layout', ['breadcrumb_title' => 'Department'])
@section('title', 'Department')
@section('main-content')


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Manage Department</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                                <th>Action</th>
                                @canany(['managedepartment_edit', 'managedepartment_delete'])
                            @endcanany
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($departments as $b)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $b->name ?? 'N/A' }}</td>
                                <td>{{ $b->description }}</td>

                                <td><img src="{{ asset('storage/'.$b->image) }}" class="me-75 bg-light-danger"
                                    style="height:60px;width:60px;" /></td>

                                @php $bannerid=Crypt::encrypt($b->id); @endphp

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                                    <li><a class="dropdown-item"
                                                            href="{{ route('admin.department.edit',$bannerid) }}">Edit</a></li>


                                                   <li><a class="dropdown-item" href="#"
                                                            onclick="event.preventDefault();document.getElementById('delete-form-{{$bannerid }}').submit();">Delete</a>
                                                    </li>

                                             </ul>

                                                <form id="delete-form-{{ $bannerid }}"
                                                    action="{{ route('admin.department.destroy',$bannerid) }}" method="post"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>

                                        </div>
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
