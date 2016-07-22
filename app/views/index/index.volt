
{{ content() }}

<div class="jumbotron">
    <h1>欢迎来到xx信息推荐</h1>
    <p>这是一个简单的推荐</p>
    <p>{{ link_to('register', 'Try it for Free &raquo;', 'class': 'btn btn-primary btn-large btn-success') }}</p>
</div>

<div class="row">
    <div class="col-md-4">
        <h2>网络游戏</h2>
        <p>
        <?php
            foreach ($posts as $post) {
            echo "<a href='http://www.doyo.cn/.$post->url.'> $post->hotTitle.<br></a>";
           }
        ?>
        </p>
    </div>
    <div class="col-md-4">
        <h2>单机游戏</h2>
        <p> </p>
    </div>
    <div class="col-md-4">
        <h2>手机游戏</h2>
        <p> </p>
    </div>
</div>
