@extends('admin.base')

@section('content')
	<section class="container blog" style="margin-top: 100px;">
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-12">
		            <div class="card">
						<div class="card-header">
							Tambah Data User
						</div>
						<div class="card-body">
						<form action="{{url('User')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label"> Nama </label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Username </label>
							<input type="text" class="form-control" name="username">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Email </label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Password </label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> No Hp </label>
							<input type="text" class="form-control" name="no_handphone">
						</div>
						
						<button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
						</form>
					</div>
						</div>
					</div>
		        </div>
				</div>
		    </section>
@endsection