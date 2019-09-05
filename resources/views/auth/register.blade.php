@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="text-primary font-weight-bold">{{ __('Registro') }}</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="name">{{ __('Nombre(s)') }}</label>
                        <input type="text" class="form-control" name="name" required >
                    </div>
                    
                    <div class="col-md-6">
                        <label for="apaterno">{{ __('Apellido Paterno') }}</label>
                        <input type="text" class="form-control" name="apaterno" required>
                    </div>
                    <div class="col-md-6">
                        <label for="amaterno">{{ __('Apellido Materno') }}</label>
                        <input type="text" class="form-control" name="amaterno" required>
                    </div>

                    <div class="col-md-4">
                        <label for="id_genero">{{ __('Genero') }}</label>
                        <select name="id_genero" class="form-control" required>
                            @foreach($generos as $genero)
                                <option value="{{ $genero['id'] }}">{{ $genero['genero'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="edad">{{ __('Edad') }}</label>
                        <input type="number" class="form-control" name="edad" required>
                    </div>
                    <div class="col-md-4">
                        <label for="id_marital">{{ __('Estado Civil') }}</label>
                        <select name="id_marital" class="form-control" required>
                            @foreach($estadocivil as $civil)
                                <option value="{{ $civil['id'] }}">{{ $civil['estado_civil'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="password">{{ __('Contraseña') }}</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="id_level">Nivel de Interes</label>
                        <select name="id_level" class="form-control" onchange="return mostrarSelect(this.value);" required>
                            <option value="" selected>{{ __('Seleccione una Opción') }}</option>
                            @foreach($niveles as $nivel)
                                <option value="{{ $nivel['id'] }}">{{ $nivel['nivel_interes'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6" id="divcarrera"> 
                        
                    </div>
                    <div class="col-md-12 text-center mt-4">
                        <button type="submit" class="btn btn-success">
                            {{ __('Registrar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
