@extends('layouts.app')

@section('content')

<div class="container">
	<center>
	<h2>Tambah Data Played</h2>
	</center>
	
	<form method="POST" action="{{ url('/played') }}">
		@csrf
		<table>
			<tr>
				<th>ID ARTIS</th>
				<td>
					<select name="artist_id">
						@foreach($lst as $row)
						<option value ="{{ $row->artist_id }}">{{ $row->artist_id }}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<th>NAMA ALBUM</th>
				<td>
					<select name="album_id">
						@foreach($ls as $row)
						<option value ="{{ $row->album_id }}">{{ $row->album_name }}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<th>JUDUL</th>
				<td>
					<select name="track_id">
						@foreach($l as $row)
						<option value ="{{ $row->track_id }}">{{ $row->track_name }}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<th>PLAYED</th>
				<td><input type="timestamp" name="played"></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	
</div>
@endsection