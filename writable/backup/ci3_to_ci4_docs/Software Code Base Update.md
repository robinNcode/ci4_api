## Software Code Base Update: Transitioning from CI3 to CI4/Laravel
### By [MsM Robin](https://www.linkedin.com/in/robinncode/)

**Introduction:**
CodeIgniter 3 (CI3) is a lightweight framework that, despite its utility, has some limitations in features and architectural support. CI3 does not fully adhere to the Model-View-Controller (MVC) architecture but supports a Hierarchical Model-View-Controller (HMVC) structure. On the other hand, CodeIgniter 4 (CI4) is a modern rewrite of CI3 with full MVC support, enhanced features, and extensive support for package management through Composer. CI4 draws significant inspiration from the Laravel framework, known for its robust architecture and extensive feature set.

Transitioning a project from CI3 to CI4 or Laravel requires careful consideration of various aspects due to the differing architectures and features of these frameworks. This paper discusses the key areas that need attention during this update process, providing practical examples and reasoning to facilitate a smooth transition.
### 1. Configurations

#### 1.1 Base Controller
In CI3, a base controller is often created to house common functionalities shared across multiple controllers. In CI4, the base controller concept is more structured, allowing for enhanced inheritance and method reuse. Laravel further extends this with middleware, enabling even more granular control over request handling.

Example:

CI3 Base Controller:

```php
<?php
class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Common functionalities
    }
}
```

CI4 Base Controller:
```php
<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller {
    public function initController($request, $response, $logger) {
        parent::initController($request, $response, $logger);
        // Common functionalities
    }
}
```

Laravel Base Controller:
```php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // Common functionalities
}
```

#### 1.2 REST Controller

CI3 uses a custom approach for creating RESTful controllers, often requiring manual configuration. CI4 and Laravel offer built-in support for RESTful controllers, simplifying the process of developing REST APIs.

Example:

CI3 REST Controller:

```php
<?php
require APPPATH . 'libraries/REST_Controller.php';

class ApiController extends REST_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function users_get() {
        // Code to fetch users
    }
}
```
CI4 REST Controller:

```php
<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ApiController extends ResourceController {
    public function index() {
        // Code to fetch users
    }
}
```
Laravel REST Controller:

```php
<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller {
    public function index() {
        return User::all();
    }
}
```

#### 1.3 Database Configurations

Database configuration in CI3 is straightforward but limited. CI4 and Laravel offer more advanced database configuration options, including support for multiple environments and more detailed connection settings.

Example:

CI3 Database Configuration:

```php
<?php
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'database_name',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```
CI4 Database Configuration:

```php
<?php
public $default = [
    'DSN'      => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'database_name',
    'DBDriver' => 'MySQLi',
    'DBPrefix' => '',
    'pConnect' => false,
    'DBDebug'  => (ENVIRONMENT !== 'production'),
    'cacheOn'  => false,
    'cacheDir' => '',
    'charset'  => 'utf8',
    'DBCollat' => 'utf8_general_ci',
    'swapPre'  => '',
    'encrypt'  => false,
    'compress' => false,
    'strictOn' => false,
    'failover' => [],
    'port'     => 3306,
];
```
Laravel Database Configuration:

```php
<?php
return [

    'default' => env('DB_CONNECTION', 'mysql'),

    'connections' => [

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'database_name'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

    ],

];
```
#### 1.4 Filters

CI4 introduces filters for request pre-processing, which is a feature not available in CI3. Laravel offers middleware that serves a similar purpose, providing powerful tools for request handling.

Example:

CI4 Filters:

```php
<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        // Check authentication
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        // After request processing
    }
}
```
Laravel Middleware:

```php
<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate {
    public function handle(Request $request, Closure $next) {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
```
#### 1.5 Session and Token Management

Session and token management in CI3 is more basic compared to the advanced session handling and token management capabilities in CI4 and Laravel. CI4 uses a more robust session management system, and Laravel offers extensive session and token management features out of the box.

Example:

CI3 Session Management:

```php
<?php
$this->load->library('session');

$this->session->set_userdata('key', 'value');
$value = $this->session->userdata('key');
```
CI4 Session Management:

```php
<?php
$session = \Config\Services::session();

$session->set('key', 'value');
$value = $session->get('key');
```
Laravel Session Management:

```php
<?php
session(['key' => 'value']);
$value = session('key');
```
#### 1.6 Usage of Constants

CI3 uses a simple constants.php file for defining constants. CI4 and Laravel offer more structured ways to manage constants, often through configuration files or environment variables.

Example:

CI3 Constants:

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('SITE_NAME', 'My Site');
```
CI4 Constants:

```php
<?php
namespace Config;

class Constants {
    const SITE_NAME = 'My Site';
}
```
Laravel Constants (Environment Variables):

```env

SITE_NAME=My Site
```
```php
<?php
$siteName = env('SITE_NAME', 'Default Site Name');
```
### 2. Routes

Routing in CI3 is rudimentary, primarily relying on auto-routing. CI4 and Laravel provide more advanced routing capabilities, including named routes, route groups, and middleware integration.

Example:

CI3 Routes:

```php
<?php
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
```
CI4 Routes:

```php
<?php
$routes->get('/', 'Home::index');
$routes->get('users', 'Users::index');
```
Laravel Routes:

```php
<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('users', [UserController::class, 'index']);
```

### 3. Magic Methods to Constructors
CI3 relies heavily on magic methods for loading controllers and models, which can be less intuitive and harder to debug. CI4 and Laravel use more explicit and structured ways to handle these operations.

#### 3.1 Calling/Invoking Another Controller
In CI3, calling another controller involves loading the controller as a library. CI4 and Laravel allow direct invocation using namespacing and dependency injection.

Example:

CI3 Calling Another Controller:

```php
<?php
$this->load->library('../controllers/AnotherController');
$this->anothercontroller->someMethod();
```
CI4 Calling Another Controller:

```php
<?php
use App\Controllers\AnotherController;

$controller = new AnotherController();
$controller->someMethod();
```
Laravel Calling Another Controller:

```php
<?php
use App\Http\Controllers\AnotherController;

$controller = new AnotherController();
$controller->someMethod();
```

#### 3.2 Calling/Invoking Another Model
CI3 uses the $this->load->model method to load models, while CI4 and Laravel use more structured methods involving namespaces and dependency injection.
Example:
CI3 Calling Another Model:

```php
<?php
$this->load->model('UserModel');
$this->UserModel->someMethod();
```
CI4 Calling Another Model:

```php
<?php
use App\Models\UserModel;

$model = new UserModel();
$model->someMethod();
```
Laravel Calling Another Model:

```php
<?php
use App\Models\User;

$user = User::find(1);
```

### 4. Query Builder Methods
CI3 provides basic query-builder methods, while CI4 and Laravel offer more advanced query-building capabilities, including fluent interfaces and more expressive syntax.

Example:

CI3 Query Builder:

```php
<?php
$query = $this->db->select('*')
                  ->from('users')
                  ->where('id', 1)
                  ->get();
$result = $query->result();
```
CI4 Query Builder:

```php
<?php
$db = \Config\Database::connect();

$query = $db->table('users')
            ->select('*')
            ->where('id', 1)
            ->get();
$result = $query->getResult();
```
Laravel Query Builder:

```php
<?php
$result = DB::table('users')
            ->select('*')
            ->where('id', 1)
            ->get();
```
### 5. Helpers, Libraries to Services

CI3 uses helpers and libraries for common tasks. CI4 introduces services, which provide a more modular and maintainable approach. Laravel uses a combination of facades and service providers for similar purposes.

Example:

CI3 Helper:

```php
<?php
$this->load->helper('url');
echo base_url();
```
CI4 Service:

```php
<?php
use CodeIgniter\Config\Services;

$uri = Services::uri();
echo $uri->getSegment(1);
```
Laravel Facade:

```php
<?php
use Illuminate\Support\Facades\URL;

echo URL::to('/');
```
### Conclusion

Updating a CodeIgniter 3 code base to CodeIgniter 4 or Laravel requires a comprehensive understanding of these frameworks' architectural differences and feature enhancements. Developers can ensure a smooth transition by addressing configurations, routing, method invocation, query building, and the use of helpers and services. This update not only modernizes the code base but also leverages the powerful features and improved performance offered by CI4 and Laravel.