{{ $slot }}
{{ $x ?? '' }}
<form action={{ route('name.contact'), }} method='post'>
    @csrf
    <input type="text" placeholder="Nome" class={{ $classe ?? 'borda-preta' }}>
    <br>
    <input type="text" placeholder="Telefone" class={{ $classe ?? 'borda-preta' }}>
    <br>
    <input type="text" placeholder="E-mail" class={{ $classe ?? 'borda-preta' }}>
    <br>
    <select class={{ $classe ?? 'borda-preta' }}>
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea class={{ $classe ?? 'borda-preta' }}>Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>