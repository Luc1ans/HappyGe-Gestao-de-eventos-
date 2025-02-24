@extends('layouts.main')
@section('title', 'Criar Evento')

@section('content')

        <div class="event-create-container col-md-6 offset-md-3">
            <h1 class="text-center">Crie o seu evento</h1>
            <form action="/events" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Imagem do Evento:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="title">Evento:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
                </div>
                <div class="form-group">
                    <label for="city">Cidade:</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade">
                </div>
                <div class="form-group">
                    <label for="private">Privado?</label>
                   <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Descrição"></textarea>
                </div>
                <br>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Criar Evento">
                </div>
            </form>
        </div>
    
@endsection
