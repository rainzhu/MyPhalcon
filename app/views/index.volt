<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {{ get_title() }}
        {{ stylesheet_link('css/bootstrap.min.css') }}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
    </head>
    <body>
        {{ content() }}
        <p>你喜欢下面那些信息？</p>
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
        {{ javascript_include('js/jquery.min.js') }}
        {{ javascript_include('js/bootstrap.min.js') }}
        {{ javascript_include('js/utils.js') }}
    </body>
</html>