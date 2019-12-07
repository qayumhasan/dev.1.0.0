@extends('layouts.app')

@section('content')
<div class="container-fluid app-body">

  <form action="{{url('groupinsert')}}" method="post">
      {{ csrf_field() }}
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Name</label>
   <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Type</label>
   <input type="text" class="form-control" name="type" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>
  </form>
  </div>




@endsection
