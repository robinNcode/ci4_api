<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;
use Predis\Client;

class AuthTokenFilter implements FilterInterface
{
    /**
     * Validates the authentication token in the header by communicating with Redis.
     * Blocks the request if the token is invalid, expired, or missing.
     *
     * @param RequestInterface $request
     * @param array|null $arguments
     * @return ResponseInterface|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $token = $request->getHeaderLine('Authorization');

        dd($token);

        if (!$token) {
            return Services::response()
                ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED)
                ->setJSON(['error' => 'Authorization token missing.']);
        }

        // Initialize Redis client
        $redis = new Client();

        // Check if the token exists and validate its integrity in Redis
        $storedTokenData = $redis->get($token);

        if (!$storedTokenData) {
            return Services::response()
                ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED)
                ->setJSON(['error' => 'Invalid or expired token.']);
        }

        // Decode token data if necessary (e.g., JWT or other format)
        $tokenData = json_decode($storedTokenData, true);
        
        // Perform additional validation, such as checking expiration
        if (isset($tokenData['expires_at']) && time() > $tokenData['expires_at']) {
            // Token has expired; delete it from Redis if you want to clean up
            $redis->del($token);

            return Services::response()
                ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED)
                ->setJSON(['error' => 'Token has expired.']);
        }

        // Optionally, refresh token expiration in Redis (if implementing a sliding session expiration)
        $redis->expire($token, 3600); // Set TTL as needed
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No after-processing required for this filter
    }
}
