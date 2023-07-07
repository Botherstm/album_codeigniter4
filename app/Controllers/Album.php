<?php

namespace App\Controllers;

use App\Models\AlbumModel;

class Album extends BaseController
{
    protected $AlbumModel;
    public function __construct(){
        $this->AlbumModel = new AlbumModel();
    }
    public function index()
    {
        
        $album = $this->AlbumModel->getAlbum();
        return view('admin/pages/album/index',[
            'title' => 'album',
            'active'=> 'album',
            'albums' => $album,
        ]);

    }

    public function add()
    {
        
        return view('admin/pages/album/create',[
            'title' => 'album',
            'active'=> 'album',
            'validation' => \Config\Services::validation(),
        ]);

    }

    public function detail($name)
    {
        $album = $this->AlbumModel->getAlbum($name);

        return view('admin/pages/album/detail',[
            'title' => 'album',
            'active'=> 'album',
            'album' => $album,

        ]);
        // $album = $this->AlbumModel->findAll();
        // return view('admin/pages/album/index',[
        //     'title' => 'album',
        //     'albums' => $album,
        // ]);

    }

    public function save()
    {
         // Validasi input form
         $validationRules = [
            'name' => 'required',
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/png]',
                'max_size[image,4096]'
            ],
            'description' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Upload gambar
        $image = $this->request->getFile('image');
        $newName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/assets/image', $newName);

        // Simpan data album ke basis data
        $data = [
            'name' => $this->request->getPost('name'),
            'image' =>$newName,
            'description' => $this->request->getPost('description')
        ];

        $this->AlbumModel->insert($data);

        session()->setFlashdata('message','data has successfully.');

        return redirect()->to('admin/pages/album');

    }


    public function edit($name){

        $album = $this->AlbumModel->getAlbum($name);

        return view('admin/pages/album/update',[
            'title' => 'album',
            'active'=> 'album',
            'album' => $album,
            'validation' => \Config\Services::validation(),
        ]);
    }
    public function update($id)
    {
        // Validasi input form
        $validationRules = [
            'name' => 'required',
            'image' => [
                'mime_in[image,image/jpg,image/jpeg,image/png]',
                'max_size[image,4096]'
            ],
            'description' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Upload gambar
        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/assets/image', $newName);
        }

        // Simpan data album ke basis data
        $data = [
            'name' => $this->request->getPost('name'),
            'image'=> $newName,
            'description' => $this->request->getPost('description')
        ];

        $this->AlbumModel->update($id, $data);

        return redirect()->to('admin/pages/album')->with('success', 'Album updated successfully.');
    }

    public function delete($id)
    {
        // Cari data album berdasarkan ID
        $album = $this->AlbumModel->find($id);

        if ($album) {
            // Hapus file gambar dari storage jika ada
            if (!empty($album['image'])) {
                $imagePath = ROOTPATH . 'public/assets/image/' . $album['image'];
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Hapus data album dari basis data
            $this->AlbumModel->delete($id);

            return redirect()->to('admin/pages/album')->with('success', 'Album deleted successfully.');
        } else {
            return redirect()->to('admin/pages/album')->with('error', 'Album not found.');
        }
    }

}