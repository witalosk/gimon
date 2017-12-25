<?php
function autoloader($name)
{
  if(strstr($name, 'Abraham'))
  {
    // project-specific namespace prefix
    $prefix = 'Abraham\\TwitterOAuth\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/classes/oauth/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $name, $len) !== 0) {
      // no, move to the next registered autoloader
      return;
    }

    // get the relative class name
    $relative_class = substr($name, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
      require $file;
    }

  }
  else
  {
    //'\'で分割
    $arrToken = explode('\\', $name);
    //'app'部分を'/classes'に置換
    $arrToken[0] = '/classes';
    //ファイル名を作成
    $filename = BASE_DIR . implode("/", $arrToken) . '.class.php';
    //ファイルが存在するならrequireする
    if (file_exists($filename)) {
      require_once($filename);
    }
  }
}
