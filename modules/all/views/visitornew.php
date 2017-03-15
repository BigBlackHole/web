<div class="col-md-6 col-md-offset-3">
    <br/>
    <form action="/visitor/save" method="post">
        <h1>Добавить посетителя</h1>
        <label for="name" class="required">ФИО</label>
        <input type="text" id="name" name="name" class="name">
        <select name="card">
            <?php foreach ($data['card'] as $val) { ?>
                <option value="<?php echo $val['id']?>"><?php echo $val['number']?></option>
            <?php } ?>
        </select><br/><br/>
        <input type="submit" name="login" value="Добавить" class="button fr">
    </form>
    <br/>
</div>