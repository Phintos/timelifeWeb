<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use App\Calendar;
//cosè media resources ???
use App\Http\Resources\Media as MediaResource;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //perchè calendar_id
    public function index($calendar_id)
    {
        $media = Media::all();
        $media = Media::where('calendar_id', '=', $calendar_id)->get();

        return response()->json($media);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $calendar_id)
    {
        //???
        $media = $request->isMethod('put') ? Media::findOrFail($request->media_id) : new Media;

        //se la richiesta ha il file immagine
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            //il nome dell'immagine sarà una combinazione del calendar_id, del title del media e dell'estensione del file(jpg,png)
            $name = str_slug($request->calendar_id).'-'.str_slug($request->title).'.'.$image->getClientOriginalExtension();
           
            //salva l'immagine nella cartella uploads
            $destinationPath = public_path('/uploads');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            
            //il mediaUrl è quello che viene salvato nel database, ossia l'url dell'immagine
            $media->mediaUrl = 'http://timelifeweb.test/uploads/' . $name;
        }

<<<<<<< HEAD
        $media->calendar_id = $calendar_id;
=======
        //qui vengono definiti i campi da creare ???
        $media->calendar_id = $request->input('calendar_id');
>>>>>>> 83741468fde93111ea95edf268a6e378ae371d82
        $media->mood = $request->input('mood');
        $media->title = $request->input('title');
        $media->body = $request->input('body');
        $media->type = $request->input('type');
        $media->mediaUrl = $request->input('mediaUrl');
        //$media->mediaUrl = $image_path;

        //???
        $cal = Calendar::findOrFail($media->calendar_id);
        $cal->mood = $cal->mood . $request->input('mood');
        $cal->save();

        if($media->save()) {
            return new MediaResource($media);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $media = Media::findOrFail($id);

        return new MediaResource($media);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id);

        if($media->delete()) {
            return new MediaResource($media);
        }
    }
}
