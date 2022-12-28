<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemController extends Controller
{
    //

    public function index(Request $request) {
        // print_r($request);

        // echo $request;
        return Item::all();
    }

    public function destroy(Item $item) {
        $item->delete();
        return response('Delete',200);
    }

    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
        return response('Update',200);
    }

    public function show(Question $question)
    {
        return new QuestionResource($question);
    }

    public function store(Request $request)
    {
        //para auto ang user id
        // auth()->user()->question()->create($request->all());
        
        Item::create($request->all());

        // $question =  new Question();
        // $question->title = $request->title;
        // $question->slug = $request->slug;
        // $question->body = $request->body;
        // $question->save();

        return response('Created',200);
    }
}
