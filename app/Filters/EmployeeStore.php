<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\Config\Services;

class EmployeeStore implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //Validator Instants
        $validator = Services::validation();

        //Validation Rules
        $validator->setRules([
            'branch_id' => [
                'label' => 'Branch ID',
                'rules' => 'required|numeric',
            ],
            'designation_id' => [
                'label' => 'Designation ID',
                'rules' => 'required|numeric',
            ],
            'name' => [
                'label' => 'Employee Name',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'code' => [
                'label' => 'Employee Code',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'fathers_name' => [
                'label' => 'Father\'s Name',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'mothers_name' => [
                'label' => 'Mother\'s Name',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'spouse_name' => [
                'label' => 'Spouse\'s Name',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'permanent_address' => [
                'label' => 'Permanent Address',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'present_address' => [
                'label' => 'Present Address',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'last_achieved_degree' => [
                'label' => 'Last Achieved Degree',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'date_of_birth' => [
                'label' => 'Date of Birth',
                'rules' => 'required|valid_date',
            ],
            'date_of_joining' => [
                'label' => 'Date of Joining',
                'rules' => 'required|valid_date',
            ],
            'date_of_discontinue' => [
                'label' => 'Date of Discontinue',
                'rules' => 'valid_date',
            ],
            'secuirity_money' => [
                'label' => 'Security Money',
                'rules' => 'required|numeric',
            ],
            'starting_salary' => [
                'label' => 'Starting Salary',
                'rules' => 'required|numeric',
            ],
            'current_salary' => [
                'label' => 'Current Salary',
                'rules' => 'required|numeric',
            ],
            'national_id' => [
                'label' => 'National ID',
                'rules' => 'required|numeric',
            ],
            'smart_id' => [
                'label' => 'Smart ID',
                'rules' => 'required|numeric',
            ],
            'blood_group' => [
                'label' => 'Blood Group',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'refence_info_1' => [
                'label' => 'Reference Info 1',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'refence_info_2' => [
                'label' => 'Reference Info 2',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'attached_documents' => [
                'label' => 'Attached Documents',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
            'is_field_officer' => [
                'label' => 'Is Field Officer',
                'rules' => 'required|numeric',
            ],
            'is_manager' => [
                'label' => 'Is Manager',
                'rules' => 'required|numeric',
            ],
            'id_sequence_no' => [
                'label' => 'ID Sequence No',
                'rules' => 'required|numeric',
            ],
            'nominee_info' => [
                'label' => 'Nominee Info',
                'rules' => 'required|min_length[3]|max_length[255]',
            ],
        ]);

        //Validation run
        if (!$validator->withRequest($request)->run()) {
            $responseData = [
                'status' => 400,
                'message' => 'Invalid Employee Data!',
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
