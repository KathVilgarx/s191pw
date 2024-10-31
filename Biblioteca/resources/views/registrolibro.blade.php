@extends('layouts.nav')
    @section('titulo','Registro de Libros')
    @section('contenido')

    <div class="container mt-5 col-md-6">
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-warning">
                {{__('Registro de Libros')}} 
            </div>
            <div class="card-body text-justify">
                
            <form method="POST" action="/enviarCliente">
                @csrf 
                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('ISBN')}}:</label>
                        <input type="text" class="form-control" name="txtISBN" value="{{old('txtISBN')}}">
                        <small class="text-danger fst-italic">{{$errors->first('txtISBN')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Titulo')}}:</label>
                        <input type="text" class="form-control" name="txttitulo" value="{{old('txttitulo')}}">
                        <small class="text-danger fst-italic">{{$errors->first('txttitulo')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Autor')}}:</label>
                        <input type="text" class="form-control" name="txtautor" value="{{old('txtautor')}}">
                        <small class="text-danger fst-italic">{{$errors->first('txtautor')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Páginas')}}:</label>
                        <input type="text" class="form-control" name="txtpaginas" value="{{old('txtpaginas')}}">
                        <small class="text-danger fst-italic">{{$errors->first('txtpaginas')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Año')}}:</label>
                        <input type="text" class="form-control" name="txtanio" value="{{old('txtanio')}}">
                        <small class="text-danger fst-italic">{{$errors->first('txtanio')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Editorial')}}:</label>
                        <input type="text" class="form-control" name="txteditorial" value="{{old('txteditorial')}}">
                        <small class="text-danger fst-italic">{{$errors->first('txteditorial')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Email de Editorial')}}:</label>
                        <input type="text" class="form-control" name="txtemaileditorial" value="{{old('txtemaileditorial')}}">
                        <small class="text-danger fst-italic">{{$errors->first('txtemaileditorial')}}</small>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2 mt-2 mb-1">
                            <button type="submit" class="btn btn-dark btn-sm">{{__('Guardar Libro')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @endsection('contenido')

