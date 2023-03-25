@extends('heroes.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Heroes</div>
                    <div class="card-body">
                        <a href="{{ url('/heroes/create') }}" class="btn btn-success btn-sm" title="Add New Heroe">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name real</th>
                                        <th>Nombre SuperHeroe</th>
                                        <th>Photo</th>
                                        <th>Informacion Adicional</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($heroes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Real_name }}</td>
                                        <td>{{ $item->Super_hero_name }}</td>
                                        <td><img src="{{ asset($item->photo_url) }}" alt="{{ $item->Super_hero_name }}" /></td>
                                        <td>{{ $item->Decription }}</td>
                                        <td>
                                            <a href="{{ url('/heroes/' . $item->id) }}" title="View Heroe"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/heroes/' . $item->id . '/edit') }}" title="Edit Heroe"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/heroes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
