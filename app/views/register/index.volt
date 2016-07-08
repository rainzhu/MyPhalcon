
{{ content() }}

<div class="page-header">
    <h2>注册</h2>
</div>

{{ form('register', 'id': 'registerForm', 'onbeforesubmit': 'return false') }}

    <fieldset>

        <div class="control-group">
            {{ form.label('name', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('name', ['class': 'form-control']) }}
                <p class="help-block">(必填)</p>
                <div class="alert alert-warning" id="name_alert">
                    <strong>警告!</strong> 请输入全名
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('username', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('username', ['class': 'form-control']) }}
                <p class="help-block">(必填)</p>
                <div class="alert alert-warning" id="username_alert">
                    <strong>警告!</strong> 请输入合法的名字
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('email', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('email', ['class': 'form-control']) }}
                <p class="help-block">(必填)</p>
                <div class="alert alert-warning" id="email_alert">
                    <strong>警告!</strong>请输入邮件名
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('password', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('password', ['class': 'form-control']) }}
                <p class="help-block">(最少8个字母)</p>
                <div class="alert alert-warning" id="password_alert">
                    <strong>警告!</strong> 请输入有效密码
                </div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="repeatPassword">重复密码</label>
            <div class="controls">
                {{ password_field('repeatPassword', 'class': 'input-xlarge') }}
                <div class="alert" id="repeatPassword_alert">
                    <strong>警告</strong>前后密码不一致
                </div>
            </div>
        </div>

        <div class="form-actions">
            {{ submit_button('注册', 'class': 'btn btn-primary', 'onclick': 'return SignUp.validate();') }}
            <p class="help-block">.</p>
        </div>

    </fieldset>
</form>
