@extends('layouts.app')

@section('template_title')
    Noticiashome
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Noticiashome') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('noticiashome.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Imagen</th>
										<th>Title</th>
										<th>Autor</th>
										<th>Date</th>
										<th>Time</th>
										<th>Place</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($noticiashomes as $noticiashome)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $noticiashome->imagen }}</td>
											<td>{{ $noticiashome->title }}</td>
											<td>{{ $noticiashome->autor }}</td>
											<td>{{ $noticiashome->date }}</td>
											<td>{{ $noticiashome->time }}</td>
											<td>{{ $noticiashome->place }}</td>
											<td>{{ $noticiashome->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('noticiashome.destroy',$noticiashome->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('noticiashome.show',$noticiashome->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('noticiashome.edit',$noticiashome->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $noticiashomes->links() !!}
            </div>
        </div>
    </div>
@endsection
