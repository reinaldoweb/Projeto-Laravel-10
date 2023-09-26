<input type="text" value="{{ $support->subject ?? old('subject') }}" placeholder="Assunto" name="subject"><br><br>
<textarea name="body" cols="30" rows="5" placeholder="Descricao">{{ $support->body ?? old('body') }}</textarea><br><br>
<button type="submit">Enviar</button>
