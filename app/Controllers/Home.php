<?php

namespace App\Controllers;

class Home extends BaseController


{
    public function index(): void
    {   
        $data ['titulo'] = 'Pagina Principal';
        
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function quienes_somos(): void
    {
        $data ['titulo'] = 'Quienes Somos';
        echo view('front/head_view', $data);
        echo view(name: 'front/navbar_view');
        echo view(name:'front/quienes_somos');
    }


    public function login(): void
    {
        $data ['titulo'] = 'Login';
        echo view(name: 'front/head_view', data: $data);
        echo view(name: 'front/navbar_view');
        echo view(name:'front/login');

    }
    public function registro(): void
    {
        $data ['titulo'] = 'registro';
        echo view(name:'front/head_view', data: $data);
        echo view(name:'front/navbar_view');
        echo view(name:'front/registro');
    }

    
        public function acercade(): void
    {
        $data ['titulo'] = 'Acerca de';
        echo view(name:'front/head_view', data: $data);
        echo view(name:'front/navbar_view');
        echo view(name:'front/acercade');
    }
}
