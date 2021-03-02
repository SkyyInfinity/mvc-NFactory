<?php

namespace Vendor\Controller;

class Controller
{
  public function encodeChars($data)
  {
    $encoded = [];
    foreach ($data as $key => $element) {

      $encoded[$key] = htmlspecialchars($element);
    }
    return $encoded;
  }

  /**
   * Display views with Database informations
   *
   * @param string $view
   * @param array $params
   */
  public function render($view, $params = [])
  {
    $pathView = str_replace(".", "/", $view);

    ob_start();
    extract($params);
    require ROOT . '/App/Views/' . $pathView . '.php';
    $content = ob_get_clean();
    require ROOT . '/App/Views/default.php';
  }
}
