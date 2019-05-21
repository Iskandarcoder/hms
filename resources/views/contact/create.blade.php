@extends('layouts.app')

@section('title','Contact Us')

@section('content')
  <h1>Contact Us</h1>

  @if(! session()->has('message'))
    <form class="" action="/contact" method="post">

      <div class="form-group pb-2">
        <label for="name">Name</label>
        <input typr="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Full name">
        <div style="color:red;">{{ $errors->first('name') }}</div>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input typr="text" name="email" value="{{ old('email') }}"  class="form-control" placeholder="name@example.com">
        <div style="color:red;">{{ $errors->first('email') }}</div>
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea typr="text" name="message" id="message" cols="30" rows="10"  class="form-control" placeholder="example message">{{ old('message') }}</textarea>
        <div style="color:red;">{{ $errors->first('message') }}</div>
      </div>

      @csrf
      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
  @endif
@endsection
