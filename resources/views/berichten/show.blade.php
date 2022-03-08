@extends('berichten.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> bericht</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('berichten.index') }}"> terug</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titel:</strong>
                {{ $berichten->titel }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>content:</strong>
                {{ $berichten->content }}
            </div>
        </div>
    </div>
@endsection
