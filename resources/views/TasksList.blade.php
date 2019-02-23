{{--@if (session()->get('role_id',0)==1)--}}
    <center>
        <form method="POST" action="{{ route('tasksList') }}">
            {{ csrf_field() }}
            <table border="1" >
                <tr style="background-color:#228B22">
                    <td width="10%" ><b>Дата публикации</b></td>
                    <td width="30%" ><b>Название записи</b></td>
                    <td width="30%" ><b>Превью записи</b></td>
                    <td width="50%" ><b>Текст записи</b></td>
                </tr>
                <tr>
                    <?php
                    foreach ($allTask as $task) {
                        echo '<tr>'.
                            '<td>'.$task['date_add'].'</td>'.
                            '<td style="background-color:#ffffcc">'.'<a href=' . 'blog/' . $task['id'] . '>' . $task['text_subject'] . '</a>'.'</td>'.
                            '<td>'.$task['text_subject'].'</td>'.
                            '<td>'.$task['text_all'].'</td>'.
                            '</tr>';
                    }
                    ?>
                </tr>
            </table>


            {{ $allTask->links() }}

        </form>
    </center>
{{--@endif--}}