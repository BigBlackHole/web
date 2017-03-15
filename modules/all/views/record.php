<div class="col-md-12">
    <br/>
    <table width="100%" border="1" style="text-align: center">
        <thead>
            <tr>
                <td>Номер карты</td>
                <td>ФИО</td>
                <td>Доктор</td>
                <td>Время</td>
                <td>Запись</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $val) { ?>
                <tr>
                    <td><?php echo $val['card']?></td>
                    <td><?php echo $val['visitor']?></td>
                    <td><?php echo $val['doctor']?></td>
                    <td><?php echo $val['time']?></td>
                    <td><?php echo $val['record']?></td>
                    <td><a href="/record/delete?id=<?=$val['id']?>">Удалить</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php if($user['role'][0]['role'] != 0) { ?>
        <a href="/record/new" style="display: block; text-align: center; margin-top: 20px;color:#8895d8;">Добавить</a>
    <?php } ?>
</div>