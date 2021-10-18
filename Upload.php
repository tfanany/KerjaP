<?php 

namespace App\Controllers;
 
// Tambahkan Upload Model di sini
use App\Models\Uploadfile;

class Upload extends BaseController
{
 
    protected $model_upload;
 
    public function __construct() {
 
        // Memanggil form helper
        helper('form');
        // Menyiapkan variabel untuk menampung upload model
        $this->model_upload = new Uploadfile();
    }
 
    public function index()
    { 
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['uploadpict'] = $this->model_upload->get_uploads();
            echo view('uploadfile', $data);
        }
    }
  
    public function process()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('uploadfile'));
        }

        $validated = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validated == FALSE) {
            // Kembali ke function index supaya membawa data uploads dan validasi
            return $this->index();
 
        } else {
            $avatar = $this->request->getFile('file_upload');
            $avatar->move(ROOTPATH . 'public/img');
 
            $data = [
                'form_name' => $this->request->getVar('id_form'),
                'id_user' => $this->request->getVar('id_user'),
                'nama_file' => $avatar->getName()
            ];
     
            $this->model_upload->insert_gambar($data);
            return redirect()->to(base_url('uploadfile'))->with('success', 'Upload successfully'); 
        }
 
    }
 
}