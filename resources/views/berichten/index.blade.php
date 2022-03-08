@extends('berichten.layout')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>berichten</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('berichten.create') }}"> nieuw bericht</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>titel</th>
            <th>content</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $value->titel }}</td>
                <td>{{ \Str::limit($value->content, 100) }}</td>
                <td>
                    <form action="{{ route('berichten.destroy',$value->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('berichten.show',$value->id) }}">bericht</a>
                        <a class="btn btn-primary" href="{{ route('berichten.edit',$value->id) }}">bewerk</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">verwijder</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection
