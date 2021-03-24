<?php 
namespace Modules\Movie\Repository;

interface MovieRepositoryInterface 
{
    public function all();
    
    public function create(object $data);

    public function show($id);

}