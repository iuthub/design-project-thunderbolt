@extends('screenshots.parent')

@section('main')

<div align="right">
	<a href="{{ route('sctcont.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Image</th>
		<th width="35%">Title</th>
		<th width="35%">Body</th>
		<th width="30%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->first_name }}</td>
			<td>{{ $row->last_name }}</td>
			<td>
				
				<form action="{{ route('sctcont.destroy', $row->id) }}" method="post">
					<a href="{{ route('sctcont.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('sctcont.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection