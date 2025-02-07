<?php

        namespace App\Filters;

        use CodeIgniter\HTTP\RequestInterface;
        use CodeIgniter\HTTP\ResponseInterface;
        use CodeIgniter\Filters\FilterInterface;

        class FiltersAdmin implements FilterInterface
        {
                public $session;
                public $uri;

                public function before(RequestInterface $request, $arguments = null)
                {
                        // Initialisation de la librairie
                        $this->session = \Config\Services::session();
                        $this->uri = service('uri');

                        if(empty($_SESSION['userdata']['Id_0'])){

                                $path = explode("/",$this->uri->getPath());
                                if(!in_array("login", $path)){
                                        return redirect()->to(base_url('web/page/login'));
                                }
                        }
                }

                public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
                {
                        // Code exécuté après le contrôleur (optionnel)
                }
        }