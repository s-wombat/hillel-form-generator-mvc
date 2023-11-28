<?php

namespace App\Controllers;

use App\Core\Application;
use App\Model\ContactModel;

class ContactController
{
    public function contact()
    {
        $response = ['status' => false];
        return Application::$app->view->render('contact', $response);
    }

    public function contactSave()
    {
        $response = ['status' => false];
        $data = Application::$app->request->getBody();

        $contactModel = new ContactModel();
        $contactModel->loadData($data);

        if ($contactModel->validate()) {
            $response = [
                'status' => true,
                'name' => $contactModel->name,
                'email' => $contactModel->email,
            ];
        }

        return Application::$app->view->render('contact', $response);
    }
}