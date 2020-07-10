@extends('layouts.app')

@section('content')

<div class="container">
	<center>
	<h2>Tambah Data Album</h2>
	</center>

	<form method="POST" action="{{ url('/album') }}">
		@csrf
		<table>
			<tr>
				<th>NAMA ALBUM</th>
				<td><input type="text" name="album_name"></td>
			</tr>
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
				<th></th>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	
</div>
@endsection