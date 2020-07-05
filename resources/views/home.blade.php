@extends('layouts.app')

@section('content')

<div class="container"  style="display: block" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> {{ __('You are logged in!') }}</h5>
      
      </div>
      <div class="modal-body">
        <p>Desenvolvido por Mateus Anjos. 
        
        https://github.com/mateusanjost/
        https://mateusanjos.forumeiros.com
        https://www.linkedin.com/in/mateus-anjos-07650a166/
        </p>
      </div>
     
    </div>
  </div>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar fornecedor') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                   
<br>
                    <form method="POST" action="{{ route('mensalidade') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
    


                        <div class="form-group row">
                            <label for="mensalidade" class="col-md-4 col-form-label text-md-right">{{ __('Mensalidade') }}</label>

                            <div class="col-md-6">
                                <input id="mensalidade" type="string" class="form-control @error('mensalidade') is-invalid @enderror" name="mensalidade" value="{{ old('mensalidade') }}" required>

                                @error('mensalidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

              

                        <div class="form-group row" style="display: none;">
                            <label for="filtro" class="col-md-4 col-form-label text-md-right">{{ __('filtro') }}</label>

                            <div class="col-md-6">
                            <input id="filtro" type="string" class="form-control @error('filtro') is-invalid @enderror" name="filtro" value="{{$data}}" required >
                        
                                @error('filtro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>


                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Fornecedores') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
                    <h1 align="center"> FORNECEDORES </h1>
                    <h2 align="center">SOMA DE <strong>TODAS</strong> AS MENSALIDADES: <strong>{{$total}}</strong></h2>
                    <table class="table">  
                    <thead class="thead-dark">
                    <tr>
  
    <th> NOME </th>
    <th> Email </th>
    <th> Mensalidade </th>
    <th>...</th>
</tr></thead>
@if($campos)
    @foreach($campos as $camposs)
    <tbody>  <tr>
           
            <td>{{$camposs->name}}</td>
            <td>{{$camposs->email}}</td>
            <td>{{$camposs->mensalidade}}</td>
            <td>


            <form action="{{route('delete', $camposs->id)}}" method="post">
                            <input type="hidden" name="id" value="{{$camposs->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit">
            
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg></button>
                        </form>


          
            </td>
<br>
        </tr>
        </tbody>
    @endforeach
@endif
</table>
        </div>
    </div>
</div>

@endsection

