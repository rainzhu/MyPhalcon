
{{ content() }}

<div class="page-header">
    <h2>联系我们</h2>
</div>

<p>给我们反馈信息，让我们知道我们如何帮助。.</p>

{{ form('contact/send', 'role': 'form') }}
    <fieldset>
        <div class="form-group">
            {{ form.label('name') }}
            {{ form.render('name', ['class': 'form-control']) }}
        </div>
        <div class="form-group">
            {{ form.label('email') }}
            {{ form.render('email', ['class': 'form-control']) }}
        </div>
        <div class="form-group">
            {{ form.label('comments') }}
            {{ form.render('comments', ['class': 'form-control']) }}
        </div>
        <div class="form-group">
            {{ submit_button('提交', 'class': 'btn btn-primary btn-large') }}
        </div>
    </fieldset>
</form>
