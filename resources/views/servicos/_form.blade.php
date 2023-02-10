    @csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nome</label>
    <input type="text" class="form-control" id="validationCustom01" value="{{isset($servico->nome) ? $servico->nome : ''}}" name="nome" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Valor Mínimo</label>
    <div class="input-group">
      {{-- <span class="input-group-text" id="inputGroupPrepend">R$</span> --}}
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="{{isset($servico->valor_minimo) ? $servico->valor_minimo : ''}}" name="valor_minimo" >
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Qt. Horas</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{$servico->quantidade_horas ??  ''}}" name="quantidade_horas" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Porcentagem de Horas</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->porcentagem) ? $servico->porcentagem : ''}}" name="porcentagem" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Preço: Quarto</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->valor_quarto) ?  $servico->valor_quarto : ''}}" name="valor_quarto" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Horas: Quarto</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->horas_quarto) ? $servico->horas_quarto : ''}}" name="horas_quarto" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Preço: Sala</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->valor_sala) ?? ''}}" name="valor_sala" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Horas: Sala</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->horas_sala) ? $servico->horas_sala : ''}}" name="horas_sala" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Preço: Banheiro</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->valor_banheiro) ? $servico->valor_banheiro : ''}}" name="valor_banheiro" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Horas: Banheiro</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->horas_banheiro) ? $servico->horas_banheiro : ''}}" name="horas_banheiro" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>


  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Preço: Quintal</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->valor_quintal) ? $servico->valor_quintal : ''}}" name="valor_quintal" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Horas: Quintal</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->horas_quintal) ? $servico->horas_quintal : ''}}" name="horas_quintal" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Preço: Cozinha</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->valor_cozinha) ? $servico->valor_cozinha : ''}}" name="valor_cozinha" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Horas: Cozinha</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->horas_cozinha) ? $servico->horas_cozinha : ''}}" name="horas_cozinha" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>


  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Preço: Outros</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->valor_outros) ? $servico->valor_outros : ''}}" name="valor_outros" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Horas: Outros</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($servico->horas_outros) ? $servico->horas_outros : ''}}" name="horas_outros" >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>



  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
