@extends('layouts.app')

@section('title')
  Customer List
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Company</h1>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <form action="companies" method="post">

      <div class="form-group pb-2">
        <label for="name">Name</label>
        <input typr="text" name="name" value="{{ old('name') }}" class="form-control">
        <div style="color:red;">{{ $errors->first('name') }}</div>
      </div>

      <div class="form-group">
        <label for="email">Phone</label>
        <input typr="text" name="phone" value="{{ old('phone') }}"  class="form-control">
        <div style="color:red;">{{ $errors->first('phone') }}</div>
      </div>

      <button type="submit" class="btn btn-primary">Add Company</button>
      @csrf
    </form>

  </div>
</div>
<hr>
<div class="row">
  <div class="col-12">
    <ul>
        @foreach($companies as $company)
              <li>{{ $company->name }} <span class="text-muted">{{ $company->phone }}</span></li>
        @endforeach
    </ul>
  </div>
</div>
@endsection
