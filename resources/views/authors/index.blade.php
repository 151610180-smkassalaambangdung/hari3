@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</li>
				<li class="active">penulis</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">penulis</h2>
					</div>

					<div class="panel-body"></div>
					{!! $html->table(['class'=>'table-striped']) !!}
		        </div>

@endsection
@section('scripts')
{!! $html->scripts()!!}
@endsection