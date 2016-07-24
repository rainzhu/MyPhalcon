
    {{ content() }}

        <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">

           <?php
                 foreach ($rands as $rand) {
                  echo "<a href='http://www.doyo.cn/.$rand->url.'> $rand->hotTitle.<br></a>";
                  }
                ?></div>
        <div class="col-md-4"></div>
        </div>
