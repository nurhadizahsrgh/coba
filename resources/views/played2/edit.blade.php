@extends('layouts.app')

@section('content')

<div class="container">
	<h2>Edit Data Played</h2>

	<form action="{{ url('/played2/' . $row->played_id) }}" method="POST">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table>
			<tr>
				<th>ARTIS</th>
				<td>
					<select name="artist_id">
						@foreach($lst as $rows)
						<option value ="{{ $rows->artist_id }}">{{ $rows->artist_name }}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<th>NAMA ALBUM</th>
				<td>
					<select name="album_id">
						@foreach($ls as $rows)
						<option value ="{{ $rows->album_id }}">{{ $rows->album_name }}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<th>JUDUL</th>
				<td>
					<select name="track_id">
						@foreach($l as $rows)
						<option value ="{{ $rows->track_id }}">{{ $rows->track_name }}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
	
</div>
@endsection