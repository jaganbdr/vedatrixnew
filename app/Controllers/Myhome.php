<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Myhome extends BaseController
{
    public function index()
    {
        $msg="";
        $data=[
            'msg'=>$msg
        ];
        return view('templates/home', $data);
    }

    public function createContact()
    {
        $userModel = new \App\Models\Contact();

        $msg="";

        $data = [
            'name' => $this->request->getVar('name'),
            'email'    => $this->request->getVar('email'),
            'phone'    => $this->request->getVar('phone'),
            'message'    => $this->request->getVar('msg'),
        ];

        try{
            $userModel->insert($data, false);
            
            $msg="your contact details saved successfully. We will contact you soon. Thank you!";
            $data=[
                'msg'=>$msg
            ];
            return redirect()->route('home', $data);
        }
       catch(\Exception $e)
       {
        //echo $e->getMessage();
        $data=[
            'msg'=>"email already exists",
        ];
        exit($e->getMessage());
       }
    }
}
