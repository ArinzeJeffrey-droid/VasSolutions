<?php 
namespace Modules\Cinema\Repository;

interface CinemaRepositoryInterface 
{
    public function all();
    
    public function create(array $data);

    public function show($id);
}