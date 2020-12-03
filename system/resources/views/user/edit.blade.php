@extends('admin.base')

@section('content')
	<section class="container blog" style="margin-top: 100px;">
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-12">
		            <div class="card">
						<div class="card-header">
							Edit Data User
						</div>
						<div class="card-body">
							<form action="{{url('User', $user->id)}}" method="post">
								@csrf
								@method('PUT')
								<div class="form-group">
									<label for="" class="control-label"> Nama </label>
									<input type="text" class="form-control" name="nama" value="{{$user->nama}}">
								</div>
								<div class="form-group">
									<label for="" class="control-label"> Username </label>
									<input type="text" class="form-control" name="username" value="{{$user->username}}">
								</div>
								<div class="form-group">
									<label for="" class="control-label"> Password </label>
									<input type="password" class="form-control" name="password">
								</div>
								<div class="form-group">
									<label for="" class="control-label"> Email </label>
									<input type="email" class="form-control" name="email" value="{{$user->email}}">
								</div>
								<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
							</form>
						</div>
					</div>
		        </div>
				</div>
		    </section>
@endsection