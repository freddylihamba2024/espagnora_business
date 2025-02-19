<?php

namespace Modules\Web\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        $data['active_data']['categories'] = $this->mediaCategoryModel->get_menu_categorie_list();
        return view('layouts/layout_web', $data);
    }
    public function homepage()
    {
        $data['latest_news'] = $this->webMediaModel->get_latest_news(6);
        $data['latest_videos'] = $this->webMediaModel->get_latest_news_by_media_type('Videos', 8);
        $data['lat_videos'] = $this->webMediaModel->get_latest_news_by_media_type('Videos', 4);
        $data['direct_tv'] = $this->webMediaModel->get_latest_news_by_media_type('Direct TV', 1);
        $data['latest_podcasts'] = $this->webMediaModel->get_latest_news_by_media_type('Audios', 10);

        //Sports news
        $data['featured_sport_news'] = $this->webMediaModel->get_latest_news_by_media_type('Actualites', 1, 3);
        $data['sports_news'] = $this->webMediaModel->get_latest_news_by_media_type('Actualites', 3, 3);

        //Politique News
        $data['featured_politique_news'] = $this->webMediaModel->get_latest_news_by_media_type('Actualites', 1, 2);
        $data['politique_news'] = $this->webMediaModel->get_latest_news_by_media_type('Actualites', 3, 2);
        //Societe News
        $data['featured_societe_news'] = $this->webMediaModel->get_latest_news_by_media_type('Actualites', 1, 8);
        $data['societe_news'] = $this->webMediaModel->get_latest_news_by_media_type('Actualites', 3, 8);

        //slides news
        $data['slides_news'] = $this->webMediaModel->get_latest_news_by_media_type('Actualites', 3);

        //latest podcasts
        $data['podcasts'] = $this->webMediaModel->get_latest_news_by_media_type('Audios', 3);

        //marquee news
        $data['marquee_news'] = $this->webMediaModel->get_latest_news_by_media_type('Actualites', 8);

        $data['active_data']['active_status'] = "home";
        $data['active_data']['categories'] = $this->mediaCategoryModel->get_menu_categorie_list();

        $economie=$this->mediaCategoryModel->get_media_category_id_by_slug('economie');
        $sport=$this->mediaCategoryModel->get_media_category_id_by_slug('sport');
        $international=$this->mediaCategoryModel->get_media_category_id_by_slug('international');

        $media_types="'Actualites','Videos'";
        $data['featured_economie']=$this->webMediaModel->get_media_list_by_media_type($media_types,isset($economie[0]['Id_0'])?$economie[0]['Id_0']:"",3);
        $data['featured_sport']=$this->webMediaModel->get_media_list_by_media_type($media_types,isset($sport[0]['Id_0'])?$sport[0]['Id_0']:"",3);
        $data['featured_international']=$this->webMediaModel->get_media_list_by_media_type($media_types,isset($international[0]['Id_0'])?$international[0]['Id_0']:"",3);
        $data['news_list'] = $this->webMediaModel->get_latest_news_by_media_type('Actualites', 20);
        //capture media category slug by category id
        $category_slugs = $this->mediaCategoryModel->get_media_category_slug_list();
        $data['category_slugs'] = $category_slugs;
        $data['publicity'] = $this->adminModel->get_all_publicity();

        return view('Modules\Web\Views\home', $data);
    }
    public function page($obj = null, $param = null)
    {
        $data['active_data']['active_status'] = ($param == null) ? "actualites" : $param;
        $data['active_data']['categories'] = $this->mediaCategoryModel->get_menu_categorie_list();
        $data['publicity'] = $this->adminModel->get_all_publicity();
        if ($obj == 'direct-tv') {
            $media_types = "'Videos'";
            $data['media'] = $this->mediaModel->get_media_direct();
            $data['last_videos'] = $this->webMediaModel->get_media_list_by_media_type($media_types, null, 8);
            return view('Modules\Web\Views\direct_tv', $data);
        } elseif ($obj == 'login') {
            return view('Modules\Web\Views\login', $this->data);
        } elseif ($obj == 'logout') {
            $this->session->destroy();
            return redirect()->to(base_url("web/login"));
        } elseif ($obj == "podcasts") {
            if($param!=null){
                $data['podcasts'] = $this->webMediaModel->get_media_by_slug($param);
                $data['similar_podcasts'] = $this->webMediaModel->get_latest_news_by_media_type('Audios', 8,$data['podcasts'][0]['Media_Category_7']);
                return view('Modules\Web\Views\single_podcast',$data);
            }else{
                $data['caroussel_podcasts'] = $this->webMediaModel->get_latest_news_by_media_type('Audios', 8);
                $data['original_podcasts'] = $this->webMediaModel->get_latest_news_by_media_type('Audios');
                return view('Modules\Web\Views\podcasts', $data);
            }

        } elseif ($obj == "magazines") {
            $data['active_data']['active_status'] = ($param == null) ? "magazines" : $param;
            $data['magazines'] = $this->webMediaModel->get_latest_news_by_media_type('Magazines');
            return view('Modules\Web\Views\magazines', $data);
        } elseif ($obj == "replays") {
            $data['replays'] = $this->webMediaModel->get_latest_news_by_media_type('Replays');
            return view('Modules\Web\Views\replays', $data);
        } elseif ($obj == "videos") {
            if ($param != null) {
                $data['video'] = $this->webMediaModel->get_media_by_slug($param);
                $data['similar_videos']=$this->webMediaModel->get_latest_news_by_media_category($data['video'][0]['Media_Category_7'],12,"Videos");
                return view('Modules\Web\Views\single_video', $data);
            } else {
                $data['videos'] = $this->webMediaModel->get_latest_news_by_media_type('Videos');
                return view('Modules\Web\Views\videos', $data);
            }
        } elseif ($obj == 'article') {
            $data['active_data']['active_status'] = ($param == null) ? "actualites" : $param;
            $data['active_data']['categories'] = $this->mediaCategoryModel->get_menu_categorie_list();

            $data['media'] = $this->webMediaModel->get_media_by_slug($param);
            $data['similar_medias'] = $this->webMediaModel->get_latest_news_by_media_category($data['media'][0]['Media_Category_7']);
            $data['similar_podcasts'] = $this->webMediaModel->get_latest_news_by_media_type('Audios');
            return view('Modules\Web\Views\single_post', $data);
        } elseif ($obj == "actualites") {

            $page_param = $this->request->getVar('page');

            $data['active_data']['active_status'] = ($param == null) ? "actualites" : $param;
            $data['active_data']['categories'] = $this->mediaCategoryModel->get_menu_categorie_list();
            $data['replays'] = $this->webMediaModel->get_latest_news_by_media_type('Direct TV', 10);
            // $data['active_data']['active_page']=($data['active_data']['active_status']!=null)?$param:"";

            // Define how many results you want per page
            $limit = 12; // Number of results per page

            // Get the current page number from the URL (if not set, default to 1)
            $page = isset($page_param) ? (int)$page_param : 1;

            // Calculate the starting point for the query
            $start = ($page - 1) * $limit;
            $media_types = "'Actualites','Videos'";
            $media_list = array();

            //capture media category Id from the description
            $media_category_id = $this->mediaCategoryModel->get_media_category_id_by_slug($param);
            $cat_id = (!empty($media_category_id)) ? $media_category_id[0]['Id_0'] : null;

            $medias = $this->webMediaModel->get_media_list_by_media_type($media_types, $cat_id);

            $media_data = $this->webMediaModel->get_media_list_by_media_type($media_types, $cat_id, $limit, $start);
            $data_length = count($medias);

            foreach ($media_data as $media) {
                $media_category = $this->mediaCategoryModel->get_media_category_by_id($media['Media_Category_7']);
                $newMedia['title'] = $media['Title_2'];
                $newMedia['image'] = $media['Media_Image_4'];
                $newMedia['category'] = $media_category[0]['Description_1'];
                $newMedia['description'] = $media['Description_3'];
                $newMedia['date_creation'] = $media['DateCreat_8'];
                $newMedia['media_slug'] = $media['Media_Id_1'];
                $newMedia['media_type'] = $media['Media_type_10'];
                $newMedia['video_link'] = $media['Media_Link_5'];

                array_push($media_list, $newMedia);
            }
            $data['medias'] = $media_list;
            $data['total_pages'] = ceil($data_length / $limit);
            $data['current_page'] = $page_param;
            $data['param'] = $param;

            $data['direct'] = $this->mediaModel->get_media_direct();

            return view('Modules\Web\Views\all-news', $data);
        } else {
            return redirect()->to(base_url("404"));
        }
    }
}
