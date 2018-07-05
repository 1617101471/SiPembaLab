@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Member
			  	<div class="panel-title pull-right"><a href="{{ route('user.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Users</th>
					  <th>Nis/Nip</th>
					  <th>Jurusan/Mapel</th>
					  <th>No Hp</th>
					  <th>Alamat</th>
					  <th>Email</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($posts as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->name }}</td>
				    	<td><p>{{ $data->nisp }}</p></td>
				    	<td><p>{{ $data->jurusan_mapel }}</p></td>
				    	<td><p>+62{{ $data->nohp }}</p></td>
				    	<td><p>{{ $data->alamat }}</p></td>
				    	<td><p>{{ $data->email }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('user.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('user.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('user.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"  onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection