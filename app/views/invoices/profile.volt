
{{ content() }}

<div class="profile left">
    {{ form('invoices/profile', 'id': 'profileForm', 'onbeforesubmit': 'return false') }}
        <div class="clearfix">
            <label for="name">用户名:</label>
            <div class="input">
                {{ text_field("name", "size": "30", "class": "span6") }}
                <div class="alert" id="name_alert">
                    <strong>警告!</strong>请输入你的全名
                </div>
            </div>
        </div>
        <div class="clearfix">
            <label for="email">邮箱地址:</label>
            <div class="input">
                {{ text_field("email", "size": "30", "class": "span6") }}
                <div class="alert" id="email_alert">
                    <strong>警告!</strong> 请输入你的邮箱
                </div>
            </div>
        </div>
        <div class="clearfix">
            <input type="button" value="更新" class="btn btn-primary btn-large btn-info" onclick="Profile.validate()">
            &nbsp;
            {{ link_to('invoices/index', '取消') }}
        </div>
    </form>
</div>