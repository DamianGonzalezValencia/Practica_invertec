@extends('layouts.app')

@section('template_title')
    {{ $categorias->name ?? "{{ __('Show') Categoria" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cat:</strong>
                            {{ $categorias->id_cat }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cat:</strong>
                            {{ $categorias->nombre_cat }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
