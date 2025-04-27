<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Universal CORS Filter
 *
 * Dynamically handles CORS policies based on the environment.
 * Supports preflight (OPTIONS) and normal requests.
 */
class CorsFilter implements FilterInterface
{
    /**
     * List of allowed origins per environment.
     *
     * @var array
     */
    protected array $allowedOrigins = [
        'development' => [
            '*', // Allow everything during local development
        ],
        'production' => [
            'https://your-production-domain.com',
            'https://subdomain.your-production-domain.com',
        ],
        'staging' => [
            'https://staging.your-domain.com',
        ],
    ];

    /**
     * @inheritDoc
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $origin = $request->getHeaderLine('Origin');
        $allowedOrigin = $this->validateOrigin($origin);

        if ($allowedOrigin) {
            header('Access-Control-Allow-Origin: ' . $allowedOrigin);
            header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
            header('Access-Control-Allow-Headers: Authorization, Content-Type, X-Requested-With, Accept, Origin');
            header('Access-Control-Allow-Credentials: true');
            header('Vary: Origin');

            if (strtoupper($request->getMethod()) === 'OPTIONS') {
                // Respond to preflight immediately
                http_response_code(204); // No Content
                exit();
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null): ?ResponseInterface
    {
        return $response;
    }

    /**
     * Validates the request Origin against allowed origins.
     *
     * @param string|null $origin
     * @return string|null
     */
    private function validateOrigin(?string $origin): ?string
    {
        if ($origin === null) {
            return null;
        }

        $env = env('CI_ENVIRONMENT'); // development, production, staging
        $allowed = $this->allowedOrigins[$env] ?? [];

        if (in_array('*', $allowed, true)) {
            return '*';
        }

        if (in_array($origin, $allowed, true)) {
            return $origin;
        }

        return null;
    }
}
