{{ Form::open((isset($options) ? $options : [])) }}
<fieldset disabled id="fieldset_master">
    <div class="form-group">
        {{ Form::label('nome', 'Empresa') }}
        {{ Form::text('nome', null, ['class'=> 'form-control', 'placeholder'=>'digite a empresa']) }}
        <small id="emailHelp" class="form-text text-muted">Razão social da empresa</small>
    </div>
    <div class="form-group">
        {{ Form::label('nome_fantasia', 'Nome Fantasia') }}
        {{ Form::text('nome_fantasia', null, ['class'=>'form-control', 'placeholder'=>'nome fantasia']) }}
    </div>

    <div class="form-group">
        {{ Form::label('cnpj', 'Cnpj') }}
        {{ Form::text('cnpj', null, ['class'=>'form-control', 'placeholder'=>'digite o cnpj']) }}
    </div>
    <div class="form-group">
        {{ Form::label('contato', 'Contato') }}
        {{ Form::text('contato', null, ['class'=>'form-control', 'placeholder'=> 'digite o contato']) }}
        <small id="contatoHelp" class="form-text text-muted">Nome do contato na empresa.</small>
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'digite o email']) }}
    </div>
    <div class="form-group">
        {{ Form::label('telefone', 'Telefone') }}
        {{ Form::tel('telefone', null, ['class'=>'form-control', 'placeholder'=>'digite o telefone']) }}
    </div>
</fieldset>
        {{ Form::submit('Submit',['class'=>'btn btn-primary hidden', 'style'=>'display:none;', 'id'=>'button_submit']) }}
{{ Form::close() }}
