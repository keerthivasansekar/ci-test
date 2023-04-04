<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BrandsModel;

class BrandController extends BaseController
{
    private $brandModel, $session;

    public function __construct() {
        $this->brandModel = new BrandsModel;
        $this->session = \Config\Services::session();
    }

    public function index(){
        $data['allBrands'] = $this->brandModel->findAll();
        return view('brand/list', $data);
    }

    public function create()
    {
        if ($this->request->is('post')) {
            $rules = [
                'brand_name' => 'required',
                'brand_logo' => 'required'
            ];
            if ($this->validate($rules)) {
                
                $brand = [
                    'brand_name' => $this->request->getVar('brand_name'),
                    'brand_logo_url' => $this->request->getVar('brand_logo')
                ];

                $result = $this->brandModel->save($brand);
                if ($result) {
                    $this->session->setFlashdata('message', 'Brand Saved successfully');
                    echo $this->session->getFlashdata('message');
                    //redirect('brand');
                }
            } else {
                # code...
            }
            
        } else {
            $data['brand'] = NULL; 
            return view('brand/add', $data);   
        }
    }

    public function update($id = null){
        if ($this->request->is('post')) {
            $rules = [
                'brand_name' => 'required',
                'brand_logo' => 'required'
            ];
            if ($this->validate($rules)) {
                
                $brand = [
                    'id' => $id,
                    'brand_name' => $this->request->getVar('brand_name'),
                    'brand_logo_url' => $this->request->getVar('brand_logo')
                ];

                $result = $this->brandModel->save($brand);
                if ($result) {
                    $this->session->setFlashdata('message', 'Brand Saved successfully');
                    echo $this->session->getFlashdata('message');
                    //redirect('brand');
                }
            } else {
                # code...
            }
            
        } else {
            $data['brand'] = $this->brandModel->where('id', $id)->first();
            
            return view('brand/add', $data);
        }
    }

    public function delete($id = null){

        $this->brandModel->delete($id);

    }
}
