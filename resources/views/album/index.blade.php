@extends('layouts.app')

@section('content')

<div class="container">
	<center>
	<h2>Daftar Album <a href="{{ url('album/create') }}">Tambah Data</a></h2>
	</center>
	<table>
		<tr>
			<th>ID</th>
			<th>NAMA ALBUM</th>
			<th>ID ARTIS</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->album_id }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->artist->artist_id }}</td>
			<td><a href="{{ url('album/' . $row->album_id . '/edit') }}">Edit</a></td>
			<td><form action="{{ url('album/' . $row->album_id) }}" method="POST">
				<input name="_method" type="hidden" value="DELETE">
				@csrf
				<button>Hapus</button>
			</form></td>
		</tr>
		@endforeach
	</table>
	
</div>
@endsection