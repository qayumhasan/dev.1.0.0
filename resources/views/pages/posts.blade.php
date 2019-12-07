@extends('layouts.app')

@section('content')
<div class="container-fluid app-body">
	<div class="row">
		
		<table class="table" id="example">
		<h3>Recent post send to Buffer</h3>

		<input type="text" id="myInput" placeholder="search">
    <br>
    <label>Group Search</label>
    <select class="form-control" id="exampleFormControlSelect1">
      @foreach($groups as $group)
      <option>{{$group->name}}</option>
      @endforeach
    </select>

  <thead class="thead-dark">
    <tr>
      <th scope="col">Group Name</th>
      <th scope="col">Account Name</th>
      <th scope="col">Post Text</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($posts as $post)
    <tr>
    
      
      <td>{{$post->group->name}}</td>
      <td>{{$post->user->name}}</td>
      <td>{{$post->details}}</td>
      <td>{{$post->created_at}}</td>
     
    </tr>
    @endforeach

  </tbody>

</table>
{{ $posts->links() }}

</form>
		</div>
	</div>
</div>



<script>
var table = $('#example').DataTable();
 
// #myInput is a <input type="text"> element
$('#myInput').on( 'keyup', function () {
    table.search( this.value ).draw();
} );
</script>
@endsection
