<?php
namespace Modules\Movie\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Modules\Movie\Entities\Movie;
use Modules\Movie\Repository\MovieRepositoryInterface;
use Modules\Showtime\Entities\Showtime;

class MovieRepository implements MovieRepositoryInterface {

    public function all()
    {
        return Movie::all();
    }

    public function create(object $data){
        $movie = new Movie;
        // $imageName = "";
        if($data->movieImage == null) {
            $imageName = "movie.jpg";
        }else{
            $imageName = time() . '.' . $data->movieImage->extension();
            //Moving the image to the folder in the project
            $data->movieImage->move(public_path('images'), $imageName);
        }
        $movie->movieName = $data["movieName"];
        $movie->releaseDate = $data['releaseDate'];
        $movie->movieImage = $imageName;
        $movie->cinema_id = $data['cinemaId'];
        $movie->genre = $data["genre"];
        $movie->save();
        return Showtime::create([
            "cinemaId" => $data["cinemaId"],
            "movieId" => $movie->id,
            "showtimeMorning" => $data["showtimeMorning"],
            "showtimeNoon" => $data["showtimeNoon"],
            "showtimeEvening" => $data["showtimeEvening"]
        ]);
    }

    public function show($id){
        return Movie::where("id", $id)->first();
    }

}