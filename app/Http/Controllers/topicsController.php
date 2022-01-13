<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topic;

class topicsController extends Controller
{
    function topic_list(){
        $data = topic::paginate(20);
        return view ('topiclist',['members'=>$data]);
    }
    function add_topic(){
        return view ('addtopic');
    }
    function save_topic(Request $request){
        $data = new topic;
        $data->t_name = $request->t_name;
        $data->t_diss = $request->t_diss;
        $data->save();
        return redirect('topic-list');
    }
    function topic_edit_form($id){
        $data = topic::find($id);
        return view ('topiceditform',['data'=>$data]);
    }
    function topic_edited(Request $request)
    {       
        $data = topic::find($request->id);
        //  dd($data);
        if($data)
        {
        $data->t_name = $request->t_name;
        $data->t_diss = $request->t_diss;
        $data->save();
        return redirect('topic-list');
        }else
        {
            echo "nothing";
        }
    }
    function delete_topic($id){
        $data = topic::find($id);
        $data->delete();
        return redirect('topic-list');
    }
}
