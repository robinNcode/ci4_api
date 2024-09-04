<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\Config\Services;

class EmployeeDepartmentStore implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //Validator Instants
        $validator = Services::validation();

        //Validation Rules
        $validator->setRules([
            'name' => [
                'label' => 'Department Name',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'code' => [
                'label' => 'Department Code',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'mnemonic' => [
                'label' => 'Department Short Name',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
        ]);

        //Validation run
        if (!$validator->withRequest($request)->run()) {
            $responseData = [
                'status' => 400,
                'message' => 'Invalid Department Data',
                'errors' => $validator->getErrors()
            ];

            return Services::response()->setJSON($responseData)->setStatusCode(400);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null): void
    {
        // Do something here
    }
}
