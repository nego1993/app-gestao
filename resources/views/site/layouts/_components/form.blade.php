{{$slot}}

<form action="{{route('contato')}}" method="POST">
    @csrf
    <input type="text" placeholder="Nome" name="nome" class="{{$class}}" value="{{ old('nome') }}">
    {{$errors->has('nome') ? $errors->first('nome') : ''}}
    <br>
    <input type="text" placeholder="Telefone" name="telefone" class="{{$class}}" value="{{ old('telefone') }}">
    {{$errors->has('telefone') ? $errors->first('telefone') : ''}}
    <br>
    <input type="text" placeholder="E-mail" name="email" class="{{$class}}" value="{{old('email') }}">
    {{$errors->has('email') ? $errors->first('email') : ''}}
    <br>
    <select class="{{$class}}" name="motivo_contatos_id">
        <option value="">Qual o motivo do contato?</option>
       @foreach ($motivoContato as $motivo )
        <option value="{{$motivo->id}}" {{old('motivo_contatos_id') == $motivo->id ? 'selected' : ''}}>{{ $motivo->motivo_contato }}</option>           
       @endforeach
    </select>
    {{$errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}
    <br>
    <textarea name="mensagem" class="{{$class}}" placeholder="Preencha aqui a sua mensagem">{{old('mensagem')}}</textarea>
    {{$errors->has('mensagem') ? $errors->first('mensagem') : ''}}
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>
</form>