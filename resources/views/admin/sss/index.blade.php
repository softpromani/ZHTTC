@extends('admin.includes.layout', ['breadcrumb_title' => 'SSS'])
@section('title', 'SSS')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center ">
               
                <div class="row mb-2">
                        <div class="col-lg-10">
                             <h4 class="card-title mb-0 flex-grow-1">SSS</h4>
                        </div>
                        <div class="col-lg-2">
                            <a href="#" class="btn btn-warning btn-export-csv">Export CSV</a>
                        </div>
                    </div>
            </div><!-- end card header -->
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">SrNo.</th>
                            <th scope="col">College Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surveys as $key=>$survey)
                        <tr>
                            <th scope="row">{{ ($surveys->currentPage() - 1) * $surveys->perPage() + $key+1 }}</th>
                            <td>{{ $survey->college_name ?? 'N/A' }}</td>
                            <td>{{ $survey->age ?? 'N/A' }}</td>
                            <td>{{ $survey->email ?? 'N/A' }}</td>
                            <td>{{ $survey->phone ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('admin.viewSession', $survey->id )}}"  class="btn btn-primary"
                                >View</a></td>
                             </tr>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! $surveys->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.btn-export-csv').on('click', function() {
            window.location.href = "{{ route('admin.sssExport') }}";
        });
    });

</script>
@endsection
