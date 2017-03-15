<div class="col-md-12">
    <br/>
    <table width="100%" border="1" style="text-align: center">
        <thead>
            <tr>
                <td>ФИО</td>
                <td>Адрес</td>
                <td>Паспорт</td>
                <td>Опыт</td>
                <td>Время работы</td>
                <td>Специализация</td>
                <td>Пол</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $val) { ?>
                <tr>
                    <td><?php echo $val['full_name']?></td>
                    <td><?php echo $val['address']?></td>
                    <td><?php echo $val['passport']?></td>
                    <td><?php echo $val['experience']?></td>
                    <td><?php echo $val['worktime']?></td>
                    <td><?php echo $val['specialty']?></td>
                    <td><?php echo $val['gender']?></td>
                    <td><a href="/doctor/delete?id=<?=$val['id']?>">Удалить</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php if($user['role'][0]['role'] != 0) { ?>
        <a href="/doctor/new" style="display: block; text-align: center; margin-top: 20px;color:#8895d8;">Добавить</a>
    <?php } ?> 
</div>