<!DOCTYPE html>
<html lang="en" data-ng-app="app">
<head>
    <meta charset="utf-8" />
    <title>Be Angular | Bootstrap Admin Web App with AngularJS</title>
    <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <style>
    /* Fix for Bootstrap 3 with Angular UI Bootstrap */

    .modal {
    	display: block;
    }

    /* Custom dialog/modal headers */

    .dialog-header-error { background-color: #d2322d; }
    .dialog-header-wait { background-color: #428bca; }
    .dialog-header-notify { background-color: #eeeeee; }
    .dialog-header-confirm { background-color: #333333; }
    	.dialog-header-error span, .dialog-header-error h4,
    	.dialog-header-wait span, .dialog-header-wait h4,
    	.dialog-header-confirm span, .dialog-header-confirm h4 { color: #ffffff; }

    /* Ease Display */

    .pad { padding: 25px; }
    </style>
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/animate.css') }}
    {{ Html::style('css/font-awesome.min.css') }}
    {{ Html::style('css/simple-line-icons.css') }}
    {{ Html::style('css/font.css') }}

    {{ Html::style('css/app.css') }}
    {{ Html::style('css/newcss.css') }}
{{--    {{ Html::style('vendor/angular/angular-datatables/dist/plugins/bootstrap/datatables.bootstrap.css') }}--}}

</head>
<body ng-controller="AppCtrl">
<div class="app" id="app" ng-class="{'app-header-fixed':app.settings.headerFixed, 'app-aside-fixed':app.settings.asideFixed, 'app-aside-folded':false, 'app-aside-dock':app.settings.asideDock, 'container':app.settings.container}" ui-view>

</div>

{{ Html::script('vendor/datatable.js'); }}
<!-- jQuery -->
{{ Html::script('vendor/jquery/jquery.min.js'); }}

<!-- Angular -->
{{ Html::script('vendor/angular/angular.js'); }}


{{ Html::script('vendor/angular/angular-animate/angular-animate.js'); }}
{{ Html::script('vendor/angular/angular-cookies/angular-cookies.js'); }}
{{ Html::script('vendor/angular/angular-resource/angular-resource.js'); }}
{{ Html::script('vendor/angular/angular-sanitize/angular-sanitize.js'); }}
{{ Html::script('vendor/angular/angular-touch/angular-touch.js'); }}
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/ng-csv/0.3.2/ng-csv.min.js'); }}
<script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.6.0.js" type="text/javascript"></script>
<script src="http://m-e-conroy.github.io/angular-dialog-service/javascripts/dialogs.min.js" type="text/javascript"></script>


{{ Html::script('vendor/jquery/datatables/jquery.dataTables.min.js'); }}
{{ Html::script('vendor/angular/angular-datatables/dist/angular-datatables.min.js'); }}


<!-- Vendor -->
{{ Html::script('vendor/angular/angular-ui-router/angular-ui-router.js'); }}
{{ Html::script('vendor/angular/ngstorage/ngStorage.js'); }}

<!-- bootstrap -->
{{ Html::script('vendor/angular/angular-bootstrap/ui-bootstrap-tpls.js'); }}
<!-- lazyload -->
{{ Html::script('vendor/angular/oclazyload/ocLazyLoad.js'); }}
<!-- translate -->
{{ Html::script('vendor/angular/angular-translate/angular-translate.js'); }}
{{ Html::script('vendor/angular/angular-translate/loader-static-files.js'); }}
{{ Html::script('vendor/angular/angular-translate/storage-cookie.js'); }}
{{ Html::script('vendor/angular/angular-translate/storage-local.js'); }}

<!-- App -->
{{ Html::script('js/app.js'); }}
{{ Html::script('js/config.js'); }}
{{ Html::script('js/config.lazyload.js'); }}
{{ Html::script('js/config.router.js'); }}
{{ Html::script('js/main.js'); }}
{{ Html::script('js/services/ui-load.js'); }}
{{ Html::script('js/filters/fromNow.js'); }}
{{ Html::script('js/directives/setnganimate.js'); }}
{{ Html::script('js/directives/ui-butterbar.js'); }}
{{ Html::script('js/directives/ui-focus.js'); }}
{{ Html::script('js/directives/ui-fullscreen.js'); }}
{{ Html::script('js/directives/ui-jq.js'); }}
{{ Html::script('js/directives/ui-module.js'); }}
{{ Html::script('js/directives/ui-nav.js'); }}
{{ Html::script('js/directives/ui-scroll.js'); }}
{{ Html::script('js/directives/ui-shift.js'); }}
{{ Html::script('js/directives/ui-toggleclass.js'); }}
{{ Html::script('js/directives/ui-validate.js'); }}
{{ Html::script('js/angular-flash.js'); }}
{{ Html::script('js/controllers/bootstrap.js'); }}
<!-- Lazy loading -->
</body>
</html>