<p class="text-danger">OBS: Os campos com o * são todos obrigatórios</p>
<div class="row">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="name">Nome  <span>*</span></label>
            <input type="text" class="form-control" placeholder="Nome" id="name"name="name"
                value="{{ isset($user->name) ? $user->name : old('name') }}"  required name="name"     required autofocus />
        </div>
        <div class="form-group col-md-4">
            <label for="phone_number">Telefone Principal  <span>*</span></label>
            <input type="text" class="form-control" placeholder="Telefone Principal" id="phone_number" name="phone_number"
                value="{{ isset($CustomerAccount->phone_number) ? $CustomerAccount->phone_number : old('phone_number') }}" required />
        </div>

        <div class="form-group col-md-4">
            <label for="phone_number_secund">Telefone Secundário  <span></span></label>
            <input type="text" class="form-control" placeholder="Telefone Secundário " id="phone_number" name="phone_number_secund"
                value="{{ isset($CustomerAccount->phone_number_secund) ? $CustomerAccount->phone_number_secund : old('phone_number_secund') }}" required />
        </div>

        <div class="form-group col-md-4">
            <label for="username">Tipo de Cliente  <span>*</span></label><br>
            <select name="level" class="form-control" aria-label="Default select example">
                <option disabled>Escolha uma Opção </option>
                <option value="Grossistas">Grossistas</option>
                <option value="Semi-Grossistas">Semi-Grossistas</option>
                <option value="Distribuidores">Distribuidores</option>
              </select>

        </div>




        <div class="form-group col-md-4">
            <label for="email">Email  <span>*</span></label>
            <input type="email" class="form-control" placeholder="Email" id="Email" name="email"
                value="{{ isset($user->email) ? $user->email : old('Email') }}" required />
        </div>
        <div class="form-group col-md-4">
            <label for="nif">NIF  <span>*</span></label>
            <input type="text" class="form-control" placeholder="nif" id="nif" name="nif"
                value="{{ isset($CustomerAccount->nif) ? $CustomerAccount->nif : old('nif') }}" required />
        </div>
        <div class="form-group col-md-4">
            <label for="email">Anexo do Alvará da sua empresa <span>*</span></label>
            <input type="file" class="form-control" placeholder="alvara" id="alvara" name="alvara"
                value="{{ isset($user->alvara) ? $user->email : old('alvara') }}"  />
        </div>

        @if ('Administrador' == Auth::user()->level)


        <div class="form-group col-md-4">
            <label for="username">Validar Conta <span>*</span></label><br>
            <select name="status" class="form-control" aria-label="Default select example">
                <option disabled>Escolha uma Opção </option>
                <option selected value="{{ $user->status }}">{{ $user->status }}</option>
                <option value="Validado">Ativar</option>
                <option value="Aguardando Validação">  Aguardando Validação</option>

              </select>

        </div>
        @endif




    </div>

</div>
