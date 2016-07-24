
{{ content() }}

<div class="row">

    <div class="col-md-6">
        <div class="page-header">
            <h2>登录</h2>
        </div>
        {{ form('session/start', 'role': 'form') }}
            <fieldset>
                <div class="form-group">
                    <label for="email">用户名/邮箱</label>
                    <div class="controls">
                        {{ text_field('email', 'class': "form-control") }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">密码</label>
                    <div class="controls">
                        {{ password_field('password', 'class': "form-control") }}
                    </div>
                </div>
                <div class="form-group">
                    {{ submit_button('登录', 'class': 'btn btn-primary btn-large') }}
                </div>
            </fieldset>
        </form>
    </div>

    <div class="col-md-6">

        <div class="page-header">
            <h2>还没有帐户吗？</h2>
        </div>

        <p>创建一个帐户提供以下优点:</p>
        <ul>
            <li>可以获得个性化的推荐</li>
            <li>可以帮助我们完善数据收集</li>
            <li>可以在这个过程中发现惊喜</li>
        </ul>

        <div class="clearfix center">
            {{ link_to('register', '注册', 'class': 'btn btn-primary btn-large btn-success') }}
        </div>
    </div>

</div>
