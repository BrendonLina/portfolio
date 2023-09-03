<h3>Meus horarios</h3>

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-auto w-50 form-medico">
            <form action="{{route('/horariosmedicos', session()->get('medicoLogado.medico.id'))}}" method="post">
                
                @csrf
                @method('PUT')
        
                <div class="row">
                    <div class="col">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <p>Horários disponiveis:</p>
                        <input type="checkbox" id="06:00" name="horarios_disponiveis[]" value="06:00">
                        <label for="horarios_disponiveis">06:00</label>
                        <input type="checkbox" id="07:00" name="horarios_disponiveis[]" value="07:00">
                        <label for="horarios_disponiveis">07:00</label>
                        <input type="checkbox" id="08:00" name="horarios_disponiveis[]" value="08:00">
                        <label for="horarios_disponiveis">08:00</label>
                        <input type="checkbox" id="09:00" name="horarios_disponiveis[]" value="09:00">
                        <label for="horarios_disponiveis">09:00</label>
                        <input type="checkbox" id="10:00" name="horarios_disponiveis[]" value="10:00">
                        <label for="horarios_disponiveis">10:00</label>
                        <input type="checkbox" id="11:00" name="horarios_disponiveis[]" value="11:00">
                        <label for="horarios_disponiveis">11:00</label>
                        <input type="checkbox" id="12:00" name="horarios_disponiveis[]" value="12:00">
                        <label for="horarios_disponiveis">12:00</label>
                        <input type="checkbox" id="13:00" name="horarios_disponiveis[]" value="13:00">
                        <label for="horarios_disponiveis">13:00</label>
                        <input type="checkbox" id="14:00" name="horarios_disponiveis[]" value="14:00">
                        <label for="horarios_disponiveis">14:00</label>
                        <input type="checkbox" id="15:00" name="horarios_disponiveis[]" value="15:00">
                        <label for="horarios_disponiveis">15:00</label>
                        <input type="checkbox" id="16:00" name="horarios_disponiveis[]" value="16:00">
                        <label for="horarios_disponiveis">16:00</label>
                        <input type="checkbox" id="17:00" name="horarios_disponiveis[]" value="17:00">
                        <label for="horarios_disponiveis">17:00</label>
                        <input type="checkbox" id="18:00" name="horarios_disponiveis[]" value="18:00">
                        <label for="horarios_disponiveis">18:00</label>
                       
                    </div>    
                </div>
                <div class="row">
                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="d-grid gap-2 mt-2">
                        <a href="{{route('/dashboard')}}">Voltar</a>
                    </div>
                </div>
            </div>
            </div>
            </div>