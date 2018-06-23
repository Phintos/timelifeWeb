<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;
use App\Chart;
use App\User;
use App\Media;
use Closure;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    

    public function admin()
    {
        
        //Country Chart
        //Richiamiamo l'user e li cicliamo, se la location non esiste avremo come valore uno. Se già esiste addizioniamo all'uno.
        $users = User::orderBy('id', 'desc')->get();
        
        $arrayLocation = array();
        foreach ($users as $user) {
            if (!array_key_exists($user->location, $arrayLocation)) {
                $arrayLocation[$user->location] = 1;
            } else {
                $arrayLocation[$user->location]++;
            }
        }

        $popularity = Lava::DataTable();
        $popularity->addStringColumn('Country')->addNumberColumn('Popularity');

        foreach ($arrayLocation as $key => $value) {
            $popularity->addRow(array($key, $value));
        }

        Lava::GeoChart('Popularity', $popularity);

        
        
        //Gender chart
        $arrayGender = array();
        foreach ($users as $user) {
            if (!array_key_exists($user->gender, $arrayGender)) {
                $arrayGender[$user->gender] = 1;
            } else {
                $arrayGender[$user->gender]++;
            }
        }

        $reasons = Lava::DataTable();
        $reasons->addStringColumn('Reasons')->addNumberColumn('Percent');

        foreach ($arrayGender as $key => $value) {
            $reasons->addRow(array($key, $value));
        }
        

            Lava::PieChart('IMDB', $reasons, [
                'is3D'   => true,
                'slices' => [
                    ['offset' => 0.2],
                    ['offset' => 0.25],
                    ['offset' => 0.3]
                ]
            ]);


        // Mood Chart
        $medias = Media::all();
        $arrayMood = array();


        foreach ($medias as $media) {
            if (!array_key_exists($media->mood, $arrayMood)) {
                $arrayMood[$media->mood] = 1;
            } else {
                $arrayMood[$media->mood]++;
            }
        }
        $reasons = Lava::DataTable();

            $reasons->addStringColumn('Reasons')->addNumberColumn('Percent');
            
            foreach ($arrayMood as $key => $value) {
            $reasons->addRow(array($key, $value));
            }   

            Lava::DonutChart('IMDB', $reasons, [
                'title' => 'Mood Chart'
            ]);
  

        return view('home', compact('users'));
    }

}
