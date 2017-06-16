@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/authors') }}">penulis</a></li>
				<li class="active">tambah penulis</li>
				</ul>
				<div class="panel panel-default"></div>
				<div class="panel-heading">
				<h2 class="panel-title">tamabah penulis</h2>
				</div>
				<div class="panel-body">
				{!! From::open(['url' => route('author.store'),'methode' => 'post', 'class'=>'from-horizontal']) !!}
				@indclude('authors._from')
				{!! From::close() !!}
				</div>
			</ul>
		</div>
	</div>
</div>
@endsection