@extends('layout')

@section('title')
  Customer List
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <h1>Customers</h1>
    </div>
  </div>
<div class="row">
  <div class="col-12">
    <form action="customers" method="post">

      <div class="form-group pb-2">
        <label for="name">Name</label>
        <input typr="text" name="name" value="{{ old('name') }}" class="form-control">
        <div style="color:red;">{{ $errors->first('name') }}</div>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input typr="text" name="email" value="{{ old('email') }}"  class="form-control">
        <div style="color:red;">{{ $errors->first('email') }}</div>
      </div>

      <div class="form-group">
        <label for="active">Status</label>
        <select name="active" id="active" class="form-control">
          <option value="" disabled>Select customer status</option>
          <option value="1">Active</option>
          <option value="2">Inactive</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Add Customer</button>
      @csrf
    </form>

  </div>
</div>
<hr>
<div class="row">
  <div class="col-12">
    <ul>
      @foreach ($customers as $customer)
        <li>{{ $customer->name }} <span class="text-muted">({{ $customer->email }})</span></li>
      @endforeach
    </ul>
  </div>
</div>

@endsection
