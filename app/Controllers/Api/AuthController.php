<?php namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Shield\Models\UserModel;
use CodeIgniter\Shield\Entities\User;

class AuthController extends BaseController
{
    use ResponseTrait;

    private UserModel $user_model;

    public function __construct()
    {
        $this->user_model = new UserModel();
    }

    /**
     * Login view...
     * @return string
     * [GET] /login
     */
    public function loginView(): string
    {
        return view('auth/login');
    }

    /**
     * Log the user in...
     * @return ResponseInterface
     * [POST] /login
     */
    public function login(): ResponseInterface
    {
        $credentials = [
           'email' => $this->request->getPost('email'),
              'password' => $this->request->getPost('password')
        ];

        if(auth()->loggedIn()){
            return $this->fail('User is already logged in');
        }

        $loginAttempt = auth()->attempt($credentials);
        if(!$loginAttempt->isOK()){
            return $this->fail('Invalid login credentials');
        }
        else{
            $userData = $this->user_model->find(auth()->id());
            $authToken = $userData->generateAccessToken('default');

            return $this->respond([
                'message' => 'Login successful!',
                'user' => $userData,
                'token' => $authToken->raw_token
            ]);
        }
    }

    /**
     * Log the user out...
     * @return ResponseInterface
     * [GET] /logout
     */
    public function loggedOut()
    {
        return $this->fail('User not logged in. Please log in');
    }

    /**
     * Register a new user view...
     * @return string
     * [GET] /register
     */
    public function registerView()
    {
        return view('auth/register');
    }

    /**
     * Register a new user...
     * @return ResponseInterface
     * [POST] /register
     */
    public function register(): ResponseInterface
    {
        $postedData = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];

        // Create a new user entity
        $user = new User();
        $userData = $user->fill($postedData);

        if($this->user_model->save($userData)){
            return $this->respond([
                'message' => 'User registered successfully!'
            ]);
        }

        // Generate token
        $token = $userData->generateAccessToken('default');

        if (!empty($token)) {
            return $this->respond([
                'message' => 'User registered successfully!',
                'access_token' => $token->raw_token
            ]);
        }

        return $this->fail('Failed to register user');
    }

}
