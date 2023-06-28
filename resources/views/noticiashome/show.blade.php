@extends('layouts.app')

@section('template_title')
    {{ $noticiashome->name ?? "{{ __('Show') Noticiashome" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Noticiashome</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('noticiashome.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $noticiashome->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $noticiashome->title }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $noticiashome->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $noticiashome->date }}
                        </div>
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $noticiashome->time }}
                        </div>
                        <div class="form-group">
                            <strong>Place:</strong>
                            {{ $noticiashome->place }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $noticiashome->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
