<div class="col-md-4 col-lg-offset-4">
    <br/>
    <table width="100%" border="1" style="text-align: center">
        <thead>
            <tr>
                <td>Номер карты</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $val) { ?>
                <tr>
                    <td><?php echo $val['number']?></td>
                    <td><a href="/card/delete?id=<?=$val['id']?>">Удалить</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php if($user['role'][0]['role'] != 0) { ?>
        <a href="/card/new" style="display: block; text-align: center; margin-top: 20px;color:#8895d8;">Добавить</a>
    <?php } ?> 
</div>