@extends('admin.includes.layout', ['breadcrumb_title' => 'Faculty'])
@section('title', 'Faculty')
@section('main-content')
<form action="{{ isset($editfaculty) ? route('admin.faculty.update', $editfaculty->id) : route('admin.faculty.store') }}" method="POST" enctype="multipart/form-data">
    @if (isset($editfaculty))
    @method('patch')
   @endif
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Name </label>
            <input type="text" name="name" class="form-control" id="inputEmail4"  value="{{ isset($editfaculty) ? $editfaculty->name : '' }}">
        </div>

        <div class="col-6">
            <label for="inputGender" class="form-label">Gender</label>
            <select id="inputGender" name="gender" class="form-select">
                <option value="" >-Select gender-</option>
                <option value="male" {{ isset($editfaculty) ? ($editfaculty->gender == 'male' ? 'selected' : '') : '' }} >Male</option>
                <option value="female" {{ isset($editfaculty) ? ($editfaculty->gender == 'female' ? 'selected' : '') : '' }} >Female</option>
                <option value="other" {{ isset($editfaculty) ? ($editfaculty->gender == 'other' ? 'selected' : '') : '' }} >other</option>

            </select>
        </div>

        <div class="col-6">
            <label for="inputState" class="form-label">Department</label>
            <select id="inputState" name="department" class="form-select">
                <option value="" selected >Select Department</option>
                @foreach ($departments as $item)
                <option value="{{ $item->id }}" {{ isset($editfaculty) ? ($editfaculty->department_id == $item->id ? 'selected' : ''): '' }} >{{ $item->name ?? 'N/A' }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6">
            <label for="inputDesignation" class="form-label">Designation</label>
            <input type="text" name="designation" class="form-control" id="inputDesignation" placeholder="Designation"  value="{{ isset($editfaculty) ? $editfaculty->designation : '' }}">
        </div>
        <div class="col-6">
            <label for="inputResume" class="form-label">Resume</label>
            <input type="file" name="resume" class="form-control" id="inputResume"
                placeholder="Resume" >
                @isset($editfaculty)
                <a href="{{ 'storage/'.$editfaculty->resume ?? ''  }}" target="_blank">View resume</a>
                @endisset
        </div>
        <div class="col-6">
            <label for="inputPhoto" class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control" placeholder="Photo" id="inputPhoto" >
            @isset($editfaculty)
            <img src="{{ asset('storage/'.$editfaculty->photo ?? '') }}" width="200" />
            @endisset

        </div>
        <div class="col-6">
            <label for="inputPhone" class="form-label">Phone</label>
            <input type="number" name="phone" class="form-control" placeholder="Phone" id="inputPhone"  value="{{ isset($editfaculty) ? $editfaculty->phone : '' }}">
        </div>
        <div class="col-6">
            <label for="inputEmail4" class="form-label">Email</label>
          
            <input type="email" name="email" class="form-control" placeholder="Email" id="inputEmail4"  value="{{ isset($editfaculty) ? $editfaculty->email : '' }}">
        </div>


        <div class="row g-3 col-12">
            <button type="submit" class="btn btn-primary">{{ isset($editfaculty) ? 'Update' : 'Submit' }}</button>
        </div>
    </div>
</form>
@endsection
