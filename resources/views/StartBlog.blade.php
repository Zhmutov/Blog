<?php ?>

<form id="postForm" method="POST" action="{{ route('access') }}">
    {{ csrf_field() }}
    <tr><td></td><td> <b>Доступ:</b></td><td><select  name="role">
                <option value="Admin"   selected >Admin</option>
                <option value="User"   selected >User</option>

            </select>

    <button type="submit">Выбрать</button>
</form>




