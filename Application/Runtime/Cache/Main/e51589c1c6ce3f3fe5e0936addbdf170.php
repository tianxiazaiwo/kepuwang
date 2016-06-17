<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>示例</title>
    <link href="/public/stylesheet/styles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/public/stylesheet/bootstrap.min.css">
    <link href="/public/stylesheet/index.css" rel="stylesheet">
    <link href="/public/stylesheet/duoshuo.css" rel="stylesheet">

</head>

<body>
    <navbar> </navbar>
    <div ng-view>
    </div>
    <foot></foot>
    <script src="/public/js/jquery.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/angular.js"></script>
    <script src="/public/js/angular.route.min.js"></script>
    <script src="/public2/js/jquery.page.js"></script>
    <script src="/public/js/index.js"></script>
    <script src="http://static.duoshuo.com/embed.js"></script>
    <script>
    $(function() {
        $('#ad-carousel').carousel();
        $('#menu-nav .navbar-collapse a').click(function(e) {
            var href = $(this).attr('href');
            var tabId = $(this).attr('data-tab');
            if ('#' !== href) {
                e.preventDefault();
                $(document).scrollTop($(href).offset().top - 70);
                if (tabId) {
                    $('#feature-tab a[href=#' + tabId + ']').tab('show');
                }
            }
        });
    });

    var duoshuoQuery = {
        short_name: "kepuwang"
    };
    </script>
</body>

</html>