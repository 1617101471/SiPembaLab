@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Barang
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Kode</label>	
			  			<input type="number" name="kode" class="form-control" value="{{ $barangs->kode }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Barang</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $barangs->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Stock</label>	
			  			<input type="number" name="stock" class="form-control" value="{{ $barangs->stock }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kondisi</label>	
			  			<input type="text" name="kondisi" class="form-control" value="{{ $barangs->kondisi }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection