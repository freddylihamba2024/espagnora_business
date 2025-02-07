<?php

namespace Modules\Api\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MediaController extends BaseController
{
    public function index()
    {
        //
    }
    public function get_request($type, $param_1 = null)
    {
        $this->response->setContentType("application/json");
        if ($type == "media_list") {
            if (!isset($param_1) && $param_1 == null) {
                $media_list = $this->mediaModel->get_media_list();
                if (!empty($media_list)) {
                    $this->http_response(200, count($media_list) . " média(s) trouvé(s)", $media_list);
                } else {
                    $this->http_response(404, "Aucun donnée trouvé");
                }
            } else {

                $media_list = $this->mediaModel->get_media_list_by_category($param_1);
                if (!empty($media_list)) {
                    $this->http_response(200, count($media_list) . " média(s) trouvé(s)", $media_list);
                } else {
                    $this->http_response(404, "Aucun donnée trouvé");
                }
            }
        } elseif ($type == "single_media") {

            $check = $this->check_request($param_1);
            if ($check) {
                $media = $this->mediaModel->get_media_by_id($param_1);
                if (!empty($media)) {
                    $this->http_response(200, count($media) . " média trouvé", $media);
                } else {
                    $this->http_response(404, "Aucun donnée trouvé");
                }
            } else {
                $this->http_response(405, "Failed to read the request");
            }
        } elseif ($type == "media_category_list") {
            $categorie_list = $this->mediaModel->get_media_category_list();
            if (!empty($categorie_list)) {
                $this->http_response(200, count($categorie_list) . " catégorie(s) trouvée(s)", $categorie_list);
            } else {
                $this->http_response(404, "Aucun donnée trouvé");
            }
        } elseif ($type == "media_direct") {
            $media_direct = $this->mediaModel->get_media_direct();
            if (!empty($media_direct)) {
                $direct_tv = $media_direct[0];
                $this->http_response(200, " Direct trouvé", $direct_tv);
            } else {
                $this->http_response(404, "Aucun donnée trouvé");
            }
        } elseif ($type == "media_direct_list") {
            $media_directs = $this->mediaModel->get_media_direct_list();
            if (!empty($media_directs)) {
                $this->http_response(200, count($media_directs) . " Direct(s) trouvé(s)", $media_directs);
            } else {
                $this->http_response(404, "Aucun donnée trouvé");
            }
        } elseif ($type == "podcast_list") {
            $podcasts = $this->mediaModel->get_podcasts_list();
            if (!empty($podcasts)) {
                $this->http_response(200, count($podcasts) . " Podcast(s) trouvé(s)", $podcasts);
            } else {
                $this->http_response(404, "Aucun donnée trouvé");
            }
        } elseif ($type == "magazines") {
            $magazines = $this->mediaModel->get_magazine_list();
            if (!empty($magazines)) {
                $this->http_response(200, count($magazines) . " Magazine(s) trouvé(s)", $magazines);
            } else {
                $this->http_response(404, "Aucun donnée trouvé");
            }
        } elseif ($type == "replays") {
            $replays = $this->mediaModel->get_replays_list();
            if (!empty($replays)) {
                $this->http_response(200, count($replays) . " Replay(s) trouvé(s)",  $replays);
            } else {
                $this->http_response(404, "Aucun donnée trouvé");
            }
        }
    }

    private function check_request($request)
    {
        if (isset($request) && $request != null) {
            return true;
        } else {
            return false;
        }
    }

    private function http_response($code, $message, $data = null)
    {
        $response['code'] = $code;
        $response['message'] = $message;
        $response['data'] = $data;
        echo json_encode($response);
    }
}
