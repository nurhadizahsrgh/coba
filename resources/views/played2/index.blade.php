@extends('layouts.app')

@section('content')

<div class="container">
	<center>
	<h2>Daftar Played 2<a href="{{ url('played2/create') }}">Tambah Data</a></h2>
	</center>

	<table>
		<tr>
			<th>ARTIS</th>
			<th>NAMA ALBUM</th>
			<th>JUDUL</th>
			<th>PLAYED</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist->artist_name }}</td>
			<td>{{ $row->album->album_name }}</td>
			<td>{{ $row->track->track_name }}</td>
			<td>{{ $row->played_id }}</td>
			<td><a href="{{ url('played2/' . $row->played_id . '/edit') }}">Edit</a></td>
			<td><form action="{{ url('played2/' . $row->played_id) }}" method="POST">
				<input name="_method" type="hidden" value="DELETE">
				@csrf
				<button>Hapus</button>
			</form></td>
		</tr>
		@endforeach
	</table>
</div>

@endsection