<div class="col-md-6 col-md-offset-3">
    <br/>
    <form action="/doctor/save" method="post">
        <h1>Добавить врача</h1>
        <label for="specialty" class="required">Специализация</label>
        <select name="specialty">
            <?php foreach ($data['specialty'] as $val) { ?>
                <option value="<?php echo $val['id']?>"><?php echo $val['name']?></option>
            <?php } ?>
        </select><br/>
        <label for="gender" class="required">Пол</label>
        <select name="gender">
            <?php foreach ($data['gender'] as $val) { ?>
                <option value="<?php echo $val['id']?>"><?php echo $val['name']?></option>
            <?php } ?>
        </select><br/>
        <label for="full_name" class="required">ФИО</label>
        <input type="text" id="full_name" name="full_name" class="username">  
        <label for="worktime" class="required">Время работы</label>
        <input type="text" id="worktime" name="worktime" class="username">
        <label for="passport" class="required">Паспорт</label>
        <input type="text" id="passport" name="passport" class="username"> 
        <label for="address" class="required">Адрес</label>
        <input type="text" id="address" name="address" class="username"> 
        <label for="experience" class="required">Опыт</label>
        <input type="text" id="experience" name="experience" class="username"> 
        <input type="submit" name="login" value="Добавить" class="button fr">
    </form>
    <br/>
</div>