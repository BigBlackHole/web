<div class="col-md-6 col-md-offset-3">
    <br/>
    <form action="/record/save" method="post">
        <h1>Добавить запись</h1>
        <label for="card" class="required">Номер карты</label>
        <select name="card">
            <?php foreach ($data['card'] as $val) { ?>
                <option value="<?php echo $val['id']?>"><?php echo $val['number']?></option>
            <?php } ?>
        </select><br/>
        <label for="doctor" class="required">Доктор</label>
        <select name="doctor">
            <?php foreach ($data['doctor'] as $val) { ?>
                <option value="<?php echo $val['id']?>"><?php echo $val['full_name']?></option>
            <?php } ?>
        </select><br/>
        <label for="time" class="required">Время</label>
        <input type="text" id="time" name="time" class="username">
        <label for="record" class="required">Запись</label>
        <input type="text" id="record" name="record" class="username">
        <input type="submit" name="login" value="Добавить" class="button fr">
    </form>
    <br/>
</div>
