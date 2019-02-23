<?php ?>

<form id="postForm" method="POST" action="{{ route('create') }}">
    {{ csrf_field() }}
    <label for="title">Заголовок:</label><br/>
    <input type="text" name="title" id="title" size="50" value={{old('title')}}>
    <br/>
    <label for="textPV">Текст превью:</label><br/>
    <input type="text" name="textPV" id="textPV" size="50" value={{old('textPV')}}>
    <br/>
    <label for="text">Полный текст:</label><br/>
    <textarea type="text" name="text" id="text">{{old('text')}}</textarea>
    <button type="submit">Отправить</button>
</form>




