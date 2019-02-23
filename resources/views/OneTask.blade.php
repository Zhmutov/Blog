
<center>
    <form method="get" action="{{ route('tasksList') }}">
        {{ csrf_field() }}
        <table border="1" >
            <tr style="background-color:#228B22">
                <td width="10%" ><b>Заголовок</b></td>
                <td width="30%" ><b>Текст превью</b></td>
                <td width="30%" ><b>Полный текст</b></td>
                <td width="50%" ><b>Дата создания</b></td>
            </tr>
            <tr>
                <?php
                foreach ($oneTask as $task) {
                    echo '<tr>'.
                        '<td>'.$task['text_subject'].'</td>'.
                        '<td>'.$task['text_pv'].'</td>'.
                        '<td>'.$task['text_all'].'</td>'.
                        '<td>'.$task['date_add'].'</td>'.
                        '</tr>';
                }
                ?>
            </tr>
        </table>
        <button type="submit">Все записи</button>

    </form>
</center>
