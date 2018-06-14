<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use App\Calendar;
use App\Http\Resources\Media as MediaResource;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::paginate(15);

        return MediaResource::collection($media);
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
    public function store(Request $request)
    {
        $media = $request->isMethod('put') ? Media::findOrFail($request->media_id) : new Media;

        //$media->id = $request->input('media_id');
        $media->calendar_id = $request->input('calendar_id');
        $media->mood = $request->input('mood');
        $media->title = $request->input('title');
        $media->body = $request->input('body');
        $media->type = $request->input('type');
        $media->mediaUrl = $request->input('mediaUrl');

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
        //Get media
        $media = Media::findOrFail($id);

        //Return single media as resource
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
         //Get media
        $media = Media::findOrFail($id);

        if($media->delete()) {
            return new MediaResource($media);
        }
    }
}
