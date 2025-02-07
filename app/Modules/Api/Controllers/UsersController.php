<?php

namespace Modules\Api\Controllers;

use App\Controllers\BaseController;
use App\Utilities\AppUtils;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class UsersController extends BaseController
{
    public function index() {}
    public function register()
    {
        $_POST=$this->request->getJSON(true);

        try {
            AppUtils::control_value($_POST['firstname'], 'Renseignez votre prenom');
            AppUtils::control_value($_POST['lastname'], 'Renseignez votre postnom');
            AppUtils::control_value($_POST['name'], 'Renseignez votre nom');
            AppUtils::control_value($_POST['email'], 'Renseignez votre adresse mail');
            AppUtils::control_value($_POST['phone'], 'Renseignez votre numéro de téléphone');
            AppUtils::control_value($_POST['username'], 'Renseignez votre nom d\'utilisateur');
            AppUtils::control_value($_POST['password'], 'Renseignez votre prenom');
            AppUtils::control_value($_POST['role'], 'Renseignez le role');

            $data['FirstName_1'] = $_POST['firstname'];
            $data['LastName_2'] = $_POST['lastname'];
            $data['Name_3'] = $_POST['name'];
            $data['Email_4'] = $_POST['email'];
            $data['Phone_5'] = $_POST['phone'];
            $data['Username_6'] = $_POST['username'];
            $data['Password_7'] = $_POST['password'];
            $data['Role_8'] = $_POST['role'];

            $success = $this->usersModel->createUser($data);

            if ($success) {
                $this->http_response(200, 'Votre compte a été créé avec succès');
            } else {
                $this->http_response(405, 'l\'opération a échoué lors de la création de votre compte');
            }
        } catch (Exception $ex) {
            $this->http_response(500, $ex->getMessage());
        }
    }
    public function login() {
        $_POST=$this->request->getJSON(true);
        try {
            AppUtils::control_value($_POST['username'], 'Renseignez votre nom d\'utilisateur');
            AppUtils::control_value($_POST['password'], 'Renseignez votre mot de passe');

            $user = $this->usersModel->authentificateUser($_POST['username'],trim($_POST['password']));
     
            if ($user!=null) {
                $this->http_response(200, 'Connexion a réçu',$user);
            } else {
                $this->http_response(404, 'Votre nom d\'utilisateur ou mot de passe est incorrecte');
            }
        } catch (Exception $ex) {
            $this->http_response(500, $ex->getMessage());
        }
    }
    private function http_response($code, $message, $data = null)
    {
        $this->response->setContentType('application/json');
        $response['code'] = $code;
        $response['message'] = $message;
        $response['data'] = $data;
        echo json_encode($response);
    }
}
