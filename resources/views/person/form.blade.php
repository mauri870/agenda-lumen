
    <div class="form-group">
        {!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apelido', 'Apelido', ['class' => 'control-label']) !!}
        {!! Form::text('apelido', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Sexo', 'Sexo', ['class' => 'control-label']) !!} <br>
        {!! Form::radio('sexo', 'M') !!} M <br>
        {!! Form::radio('sexo', 'F') !!} F
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('endereco', 'Endereco', ['class' => 'control-label']) !!}
        {!! Form::email('endereco', null, ['class' => 'form-control']) !!}
    </div>
