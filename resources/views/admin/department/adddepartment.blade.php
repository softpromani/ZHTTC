@extends('admin.includes.layout', ['breadcrumb_title' => 'Department'])
@section('title', 'Department')
@section('main-content')
<form action="{{ isset($editdepartment) ? route('admin.department.update', $editdepartment->id) : route('admin.department.store') }}" method="POST" enctype="multipart/form-data">
    @if (isset($editdepartment))
     @method('patch')
    @endif

    @csrf
    <div class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" value="{{ isset($editdepartment) ? $editdepartment->name : '' }}">
    </div>
    
    <div class="col-6">
      <label for="inputImage" class="form-label">Image</label>
      <input type="file" class="form-control" name="image" id="inputImage" placeholder="Image" value="{{ $editdepartment->image ??'' }}">
      {{--  <img src="{{ asset('/storage/'.$editdepartment->image ??'') }}" class="me-75 bg-light-danger"
                                    style="height:60px;width:60px;" />  --}}
    </div>
<div class="col-md-12">
      <label for="inputDescription4" class="form-label">Description</label>
      <textarea  name="description" class="form-control" id="inputDescription4" cols="10" rows="5" value="">{{ isset($editdepartment) ? $editdepartment->description : '' }}</textarea>
    </div>
      </div>
    </div>
    <div class="col-12 mt-2">
      <button type="submit" class="btn btn-primary">{{ isset($editdepartment) ? 'Update' : 'Submit' }}</button>
    </div>
</div>
  </form>

@endsection
