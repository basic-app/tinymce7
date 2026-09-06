<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\TinyMce7\Controllers\Admin;

use App\Controllers\Admin\BaseController;
use BasicApp\TinyMce7\Settings\TinyMce7Settings;

class TinyMce7SettingsController extends BaseController
{
    public function index()
    {
        $data = new TinyMce7Settings;

        if ($this->request->is('post')) 
        {
            if ($this->validateData($this->request->getPost(), $data->rules())) 
            {
                $data->fill($this->validator->getValidated());

                $data->save();

                $this->session->setFlashdata('success', lang($this->messageSaved));
                    
                return redirect()->to('admin/tinymce7-settings');
            }
            else
            {
                $errors = $this->validator->getErrors();
            }
        }

        return view('BasicApp\TinyMce7\admin/tinymce7-settings', [
            'data' => $data,
            'labels' => $data->labels(),
            'errors' => $errors ?? []
        ]);
    }
}