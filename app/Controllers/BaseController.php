<?php

namespace App\Controllers;

use App\Modules\Api\Models\UsersModel;
use App\Modules\Web\Models\MediaCategoryModel;
use Modules\Web\Models\MediaModel as ModelsMediaModel;
use Modules\Api\Models\MediaModel;
use Modules\Admin\Models\AdminModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use Modules\Web\Models\PublicityModel;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends ResourceController
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $mediaModel;
    protected $webMediaModel;
    protected $mediaCategoryModel;
    protected $usersModel;
    protected $adminModel;
    protected $publicityModel;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];
    public $session;
    public $data;

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    public function __construct()
    {
        $this->session = $this->data['session'] = \Config\Services::session();
        $this->mediaModel = new MediaModel();
        $this->webMediaModel = new ModelsMediaModel();
        $this->usersModel = new UsersModel();
        $this->mediaCategoryModel = new MediaCategoryModel();
        $this->adminModel = new AdminModel();
        $this->publicityModel=new PublicityModel();
    }

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }
}