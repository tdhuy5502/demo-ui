<?php 

namespace App\Repositories;

use Illuminate\Support\Facades\File;

interface IFaceRepository {
    public function getModel();
    
    // public function getList(array $params, string $query = null);

    public function getAll();

    public function getById(string $id);

    public function save(array $data, string $id);

    public function delete(string $id);

    // public function getByAttribute(array $attribute, string $expression);

    // public function moveTempFile(string $path);

    // public function removeFile(string $path);

    // public function uploadTempFiles(File $files, string $model);

    // public function removeFileStorage(string $pathFIle);
}