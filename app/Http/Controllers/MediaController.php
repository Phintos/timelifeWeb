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
    public function store(Request $request)
    {
        $media = $request->isMethod('put') ? Media::findOrFail($request->media_id) : new Media;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = str_slug($request->calendar_id).'-'.str_slug($request->title).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $media->mediaUrl = 'http://timelifeweb.test/uploads/' . $name;
        }

        $media->calendar_id = $request->input('calendar_id');
        $media->mood = $request->input('mood');
        $media->title = $request->input('title');
        $media->body = $request->input('body');
        $media->type = $request->input('type');
        // $media->mediaUrl = $request->input('mediaUrl');
        // $media->mediaUrl = $image_path;

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
