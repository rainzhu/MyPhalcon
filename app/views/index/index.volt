
{{ content() }}

<div class="jumbotron">
    <h1>欢迎来到xx信息推荐</h1>
    <p>这是一个简单的推荐</p>
    <p>{{ link_to('register', 'Try it for Free &raquo;', 'class': 'btn btn-primary btn-large btn-success') }}</p>
</div>

<div class="row">
    <div class="col-md-4">
        <h2>最新游戏资讯</h2>
        <p>
        <?php
            foreach ($onlines as $online) {
            echo "<a href='http://www.doyo.cn/.$online->url.'> $online->hotTitle.<br></a>";
           }
        ?>
        </p>
    </div>
    <div class="col-md-4">
        <h2>单机游戏</h2>
        <p>
          <?php
                     foreach ($offlines as $offline) {
                     echo "<a href='http://www.doyo.cn/.$offline->url.'> $offline->hotTitle.<br></a>";
                    }
                 ?></p>
    </div>
    <div class="col-md-4">
        <h2>手机游戏</h2>
        <p> <?php
                       foreach ($phones as $phone) {
                       echo "<a href='http://www.doyo.cn/.$phone->url.'> $phone->hotTitle.<br></a>";
                      }
                   ?> </p>
    </div>
</div>
