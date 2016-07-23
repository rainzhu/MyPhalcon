
{{ content() }}

<div class="jumbotron">
    <h1>欢迎来到GRec游戏信息推荐</h1>
    <p>这是一个个性化的推荐</p>
    <p>{{ link_to('register', '免费体验一下吧 &raquo;', 'class': 'btn btn-primary btn-large btn-success') }}</p>
</div>

<div class="row">
    <div class="col-md-3">
        <h2>网络游戏</h2>
        <p>
        <?php
            foreach ($onlines as $online) {
            echo "<a href='http://www.doyo.cn/.$online->url.'> $online->hotTitle.<br></a>";
           }
        ?>
        </p>
    </div>
    <div class="col-md-3">
        <h2>单机游戏</h2>
        <p>
          <?php
                     foreach ($offlines as $offline) {
                     echo "<a href='http://www.doyo.cn/.$offline->url.'> $offline->hotTitle.<br></a>";
                    }
                 ?></p>
    </div>
    <div class="col-md-3">
        <h2>手机游戏</h2>
        <p> <?php
                       foreach ($phones as $phone) {
                       echo "<a href='http://www.doyo.cn/.$phone->url.'> $phone->hotTitle.<br></a>";
                      }
        ?> </p>
    </div>
        <div class="col-md-3">
            <h2>其他游戏</h2>
            <p> <?php
                           foreach ($others as $other) {
                           echo "<a href='http://www.doyo.cn/.$other->url.'> $other->hotTitle.<br></a>";
                          }
              ?> </p>
        </div>
</div>
