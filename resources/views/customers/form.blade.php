
<div class="form-group pb-2">
  <label for="name">Name</label>
  <input typr="text" name="name" value="{{ old('name') ?? $customer->name }}" class="form-control">
  <div style="color:red;">{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
  <label for="email">Email</label>
  <input typr="text" name="email" value="{{ old('email') ?? $customer->email }}"  class="form-control">
  <div style="color:red;">{{ $errors->first('email') }}</div>
</div>

<div class="form-group">
  <label for="active">Status</label>
  <select name="active" id="active" class="form-control">
    <option value="" disabled>Select customer status</option>
    <option value="1">Active</option>
    <option value="0">Inactive</option>
  </select>
</div>

<div class="form-group">
  <label for="company_id">Company</label>
  <select name="company_id" id="ccompany_id" class="form-control">
    @foreach ($companies as $company)
      <option value="{{ $company->id }}">{{ $company->name }}</option>
    @endforeach
  </select>
</div>

@csrf
