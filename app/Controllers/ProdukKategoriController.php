<?php

namespace App\Controllers;

use App\Models\ProductCategoryModel;

class ProdukKategoriController extends BaseController
{
    protected $product;

    function __construct()
    {
        $this->product = new ProductCategoryModel();
    }

    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_produk_kategori', $data);
    }

    public function create()
    {
        $dataFoto = $this->request->getFile('foto');

        $dataForm = [
            'nama' => $this->request->getPost('nama')
        ];

        $this->product->insert($dataForm);

        return redirect('produk_kategori')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit($id)
    {
        $dataProduk = $this->product->find($id);

        $dataForm = [
            'nama' => $this->request->getPost('nama')
        ];

        $this->product->update($id, $dataForm);

        return redirect('produk_kategori')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $dataProduk = $this->product->find($id);

        $this->product->delete($id);

        return redirect('produk_kategori')->with('success', 'Data Berhasil Dihapus');
    }
}
