<?php
namespace Modules\Cinema\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Modules\Cinema\Repository\CinemaRepositoryInterface;

class CinemaRepository implements CinemaRepositoryInterface {
    public $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data){
        return $this->model->create($data);
    }

    public function show($id){
        return $this->model::where("id", $id)->with("moviesPlaying")->first();
    }
}