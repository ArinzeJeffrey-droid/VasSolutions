<?php 
namespace Modules\Showtime\Repository;

interface ShowtimeRepositoryInterface 
{
    public function all();

    public function show($id);

}