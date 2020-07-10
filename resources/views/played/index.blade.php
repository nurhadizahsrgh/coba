@extends('layouts.app')

@section('content')

<div class="container">
	<center>
	<h2>Daftar Played <a href="{{ url('played/create') }}">Tambah Data</a></h2>
	</center>

	<table>
		<tr>
			<th>ID ARTIS</th>
			<th>NAMA ALBUM</th>
			<th>JUDUL</th>
			<th>PLAYED</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist->artist_id }}</td>
			<td>{{ $row->album->album_name }}</td>
			<td>{{ $row->track->track_name }}</td>
			<td>{{ $row->played }}</td>
			<td><a href="{{ url('played/' . $row->played . '/edit') }}">Edit</a></td>
			<td><form action="{{ url('played/' . $row->played) }}" method="POST">
				<input name="_method" type="hidden" value="DELETE">
				@csrf
				<button>Hapus</button>
			</form></td>
		</tr>
		@endforeach
	</table>
</div>

@endsection