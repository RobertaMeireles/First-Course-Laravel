{{ $slot }}
{{ $class ?? '' }}
{{ $x ?? '' }}
<form action={{ route('name.contact'), }} method='post'>
    @csrf
    <input type="text" placeholder="Nome" class="borda-preta">
    <br>
    <input type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input type="text" placeholder="E-mail" class="borda-preta">
    <br>
    <select class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea class="borda-preta">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>