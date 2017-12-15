@extends('layouts.app')

@section('head')
<title>Artifacts</title>
@endsection

@section('content')


	<div class="col-sm-offset-9 col-sm-3">
			<a href="{{ action('ArtifactController@refresh')}}" class="btn btn-primary form-control" style="line-height:38px;height:50px;"><i class="fa fa-refresh" aria-hidden="true"></i> Update</a>
	</div>

<div class="col-md-12">
	{!! Form::open(['url' => 'admin/selected', 'class' => 'form-horizontal form', 'files' => true]) !!}
		<div class="table">
			<table class="table table-bordered table-striped table-hover table-fixed">
				<thead>
					<tr>
						<th> Select </th>
						<th> Artifact ID </th>
						<th> Title </th>
					</tr>
				</thead>
				<tbody>
				@foreach($artifacts as $item)
				<tr>
			

				<td>
                      {!! Form::checkbox('id[]',$item->id, false, ['style' => 'position: relative; display: inline-block; width: 20px; height: 20px; border: 1px solid rgba(0,0,0, .54); overflow: hidden; z-index: 1; border-radius: 3px;']); !!}
            	</td>
					<td> {{ $item->id }}</td>
					<td>{{ $item->title }}</td>
				</tr>
				@endforeach
				</tbody>
			</table>

	<div class="form-group">
		<div class="col-sm-offset-9 col-sm-3">
			{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control', 'style' => 'background-color: #66BE56;line-height:38px;height:50px;']) !!}
		</div>
	</div>
	{!! Form::close() !!}
</div>
@endsection