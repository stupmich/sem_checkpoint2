<?php
namespace App;
session_start();
if (isset($_SESSION['expire'])) {
    $now = time();
    if ($now > $_SESSION['expire']) {
        $_SESSION = array();

        if(ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '' , time()-42000, $params["path"], $params["domain"],
                $params["secure"],$params["httponly"]);
        }
        session_destroy();
    }
}
$now = time(); // Checking the time now when home page starts.


use App\Core\Router;

/**
 * Class App
 * Main Application class
 * @package App
 */
class App
{

    /**
     * @var Router
     */
    private $router;

    /**
     * @var Config\Configuration|null
     */
    private static $config;

    /**
     * App constructor
     */
    public function __construct()
    {
        self::$config = Config\Configuration::getInstance();
        $this->router = new Router();
    }

    /**
     * Runs the application
     * @throws \Exception
     */
    public function run()
    {
        ob_start();

        $route = $this->router->processURL();

        $data = call_user_func([$route['controller'], $route['action']]);

        require "App" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . $route['controller']->getName() . DIRECTORY_SEPARATOR . $route['action'] . ".view.php";

        $contentHTML = ob_get_clean();

        require "App" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "root.layout.view.php";
    }

    /**
     * @return Config\Configuration|null
     */
    public static function getConfig(): ?Config\Configuration
    {
        return self::$config;
    }

}