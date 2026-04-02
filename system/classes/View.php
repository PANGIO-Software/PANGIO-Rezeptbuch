<?php
namespace System\Classes;

/**
 * @author Julius Derigs
 * @version 1.0.0
 */

class View {
    /**
     * @param string $view
     * @param array $params
     * @return $this
     */
    public function render(string $view, array $params = []) :self {
        $viewDirectory = dirname(__DIR__, 2) . '/views';
        $viewPath = "$viewDirectory/$view.php";
        extract($params);

        ob_start();

        include $viewPath;

        echo ob_get_clean();

        return $this;
    }

    public function renderHeader(array $params = []) :self {
        $viewDirectory = dirname(__DIR__, 2) . '/views/templates';
        $viewPath = "$viewDirectory/header.php";
        extract($params);

        ob_start();

        include $viewPath;

        echo ob_get_clean();

        return $this;
    }

    public function renderFooter(array $params = []) :self {
        $viewDirectory = dirname(__DIR__, 2) . '/views/templates';
        $viewPath = "$viewDirectory/footer.php";
        extract($params);

        ob_start();

        include $viewPath;

        echo ob_get_clean();

        return $this;
    }
}