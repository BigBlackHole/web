<div class="col-md-4 col-md-offset-4">
    <div class="form form_center margin_center">
        <form action="/registration_check" method="post" id="registration">
            <h1>Регистрация</h1>
            <label for="username" class="required">E-mail</label>
            <input type="email" id="username" name="email" value="" class="username">           
            <label for="password" class="required">Пароль</label>
            <input type="password" id="password" name="password" placeholder="*******" class="password">
            <p class="error"></p>
            <input type="submit" name="login" value="Регистрация" class="button fr">
        </form>
        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript" src="/static/js/registration.js"></script>