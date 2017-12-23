<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{$WEB}css/uikit.min.css" />
  <link rel="stylesheet" href="{$WEB}css/master.css" />
  <script src="{$WEB}js/uikit.min.js"></script>
  <script src="{$WEB}js/uikit-icons.min.js"></script>
</head>
<body>
  <header class="">
    <nav class="default-primary-color primary-text-color uk-padding" uk-navbar>
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
          <a class="text-primary-color" href="#" onclick="javascript:window.history.back(-1);return false;" uk-icon="icon:chevron-left; ratio: 1.2"></a>
        </ul>
      </div>
      <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
          <li class="uk-logo text-primary-color">{$title}</li>
        </ul>
      </div>
      <!--
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="#">Active</a></li>
          <li><a href="#">Item</a></li>
        </ul>
      </div>
    -->
    </nav>
  </header>
