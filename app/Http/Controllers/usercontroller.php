<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use App\Models\video;
use App\Models\Instricteur_tech;
use App\Models\result;
use App\Models\Test_technique;
use App\Models\test_tech_video;
use App\Models\Arbitre;
use App\Models\profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class usercontroller extends Controller
{
    function show()
    {
        $data = question::all();
        return view('InsTech.questions',['members'=>$data]);
    }
    //qcm
    function show_test()
    {
        $data = Test_technique::where([
            ['is_selected','=','1'],
            ['niveau','=',Auth::guard('arbitre')->user()->niv]
        ])
        ->first();
        if($data == NULL)
            return view('arbitre/arbitre_dashboard');
        $questions_arr = explode(",",$data->questions);
        $level = $data->niveau;
        $questions = question::whereIn('id', $questions_arr)->get();
        return view('InsTech/quiz',['questions'=>$questions]);
    }
    function create_test(Request $req)
    {
        $test_tech = new Test_technique();
        $test_tech->niveau = $req->input("test_type");
        $test_tech->is_selected = 0;
        $test_tech->questions = implode(",",$req->input("selected_questions"));
        $test_tech->save();
        return response()->json();
    }
    function showdata3($id)
    {
        $data = test_technique::find($id);
        $questions_arr = explode(',',$data->questions);
        $questions = question::whereIn('id',$questions_arr)->get();
        return view('view_qst',['members'=>$questions]);
    }
    
    //video
    function showdata6($id)
    {
        $data = test_tech_video::find($id);
        $videos_arr = explode(',',$data->videos);
        $videos = video::whereIn('id',$videos_arr)->get();
        return view('view_vid',['members'=>$videos]);
    }
    function show_test2()
    {
        $data = test_tech_video::where([
            ['is_selected','=','1'],
            ['niveau','=',Auth::guard('arbitre')->user()->niv],
        ])->whereNotIn('id',result::where('arbitre_id' ,'=' ,Auth::guard('arbitre')->user()->id)->pluck('test_id')->toArray())
        ->first();
        if($data == NULL)
            return view('arbitre/arbitre_dashboard');
        $videos_arr = explode(",",$data->videos);
        $level = $data->niveau;
        $videos = video::whereIn('id', $videos_arr)->get();
        return view('InsTech/quiz_vid',['videos'=>$videos,'test_id'=>$data->id,'arbitre_id'=>Auth::guard('arbitre')->user()->id]);
    }


    function create_test2(Request $req)
    {
        $test_tech_vid = new test_tech_video();
        $test_tech_vid->niveau = $req->input("test_type");
        $test_tech_vid->is_selected = 0;
        $test_tech_vid->videos = implode(",",$req->input("selected_videos"));
        $test_tech_vid->save();
        return response()->json();
    }
    function set_selected_test(Request $req){
        $toSelect = Test_technique::find($req->input("test_id"));
        $donnees = Test_technique::where([
            ['is_selected','=','1'],
            ['niveau', '=', $toSelect->niveau],
        ])->get();
        // Parcourez chaque ligne et mettez à jour la valeur de la colonne
        $donnees->each(function ($item) {
            $item->is_selected = 0;
            $item->save();
        });
       
        $toSelect->is_selected = 1;
        $toSelect->save();
        return response()->json();
    }
    function set_selected_test_video(Request $req){
        $toSelect = test_tech_video::find($req->input("test_id"));
        $donnees = test_tech_video::where([
            ['is_selected','=','1'],
            ['niveau', '=', $toSelect->niveau],
        ])->get();
        // Parcourez chaque ligne et mettez à jour la valeur de la colonne
        $donnees->each(function ($item) {
            $item->is_selected = 0;
            $item->save();
        });
       
        $toSelect->is_selected = 1;
        $toSelect->save();
        return response()->json();
    }


    function add(Request $req)
    {
        $questions = new question();
        $questions->question = $req->question;
        $questions->level = $req->level;
        $questions->a = $req->a;
        $questions->b = $req->b;
        $questions->c = $req->c;
        $questions->d = $req->d;
        $questions->ans = $req->ans;
        $questions->save();
        return redirect('site_arbi/questions');
    }

    function delete($id)
    {
        $data = question::find($id);
        $data->delete();
        return redirect('site_arbi/questions');
    }

    function showdata($id)
    {
        $data = question::find($id);
        return view('update',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data = question::find($req->id);
        $data->question = $req->question;
        $data->level = $req->level;
        $data->a = $req->a;
        $data->b = $req->b;
        $data->c = $req->c;
        $data->d = $req->d;
        $data->ans = $req->ans;
        $data->save();
        return redirect('site_arbi/questions');
    }

    function show2()
    {
        $data = video::all();
        return view('InsTech.videos',['members'=>$data]);
    }


    function add2(Request $req)
    {
        $videos = new video();
        $videos->title = $req->title;
        $videos->description = $req->description;
        $videos->video = $req->video;
        $videos->type = $req->type;
        $videos->save();
        return redirect('site_arbi/videos');
    }
    function insert(Request $req)
    {
       $req->validate([
           'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
       ]);
    }
    function delete2($id)
    {
        $data = video::find($id);
        $data->delete();
        return redirect('site_arbi/videos');
    }

    function showdata2($id)
    {
        $data = video::find($id);
        return view('update2',['data'=>$data]);
    }

    function update2(Request $req)
    {
        $data = video::find($req->id);
        $data->level = $req->level;
       // $data->question = $req->question;
        $data->a = $req->a;
        $data->b = $req->b;
        $data->c = $req->c;
        $data->d = $req->d;
        $data->ans = $req->ans;
        $data->save();
        return redirect('site_arbi/videos');
    }

    function view($id)
    {
        $data = video::find($id);
        return view('viewvideo',['data'=>$data]);
    }


    function show3()
    {
        $data = question::where([
            ['level','=','Beginners']
        ])
        ->get();
        return view('InsTech.ptqb',['members'=>$data]);
    }

    function show4()
    {
        $data = question::where([
            ['level','=','Advanceds']
        ])
        ->get();
        return view('InsTech.ptqa',['members'=>$data]);
    }

   /* function show5()
    {
        $data = result::all();
        return view('InsTech.results',['members'=>$data]);
    }

    function show5()
    {
        $data =Test_technique::first();
        $questions_arr = explode(",",$data->questions);
        $level = $data->niveau;
        $questions = question::whereIn('id', $questions_arr)->get();
        return view('InsTech/quiz',['questions'=>$questions]);
        
    }
    function show5()
    {
        $data =result::all();
        $results_arr =explode($data->note);
        $results = Arbitre::whereIn('id', $results_arr)->get();
        return view('InsTech.results',['members'=>$data]);
        
    }
    public function show5()
{
    $results = result::all();
    $results_arr = $results->pluck('note')->flatten()->toArray();
    $arbitres = Arbitre::whereIn('id', $results_arr)->get();
    return view('InsTech.results', ['members' => $results]);
}*/
function show_results(Request $req)
    {
        $users = DB::table('arbitres')
        ->join('results',function($join){
        $join->on('arbitres.id', '=' , 'results.arbitre_id');
        })
        ->distinct()
        ->get();
        return view('InsTech.results',['members'=>$users]);
    }



    function show6()
    {
        $data = video::where([
            ['level','=','Beginners']
        ])
        ->get();
        return view('InsTech.ptvb',['members'=>$data]);
    }

    function show7()
    {
        $data = video::where([
            ['level','=','Advanceds']
        ])
        ->get();
        return view('InsTech.ptva',['members'=>$data]);
    }

    function show8()
    {
        $data = Test_technique::where([
            ['niveau','=','Beginners']
        ])
        ->get();
        return view('InsTech.test_mcq_beg',['members'=>$data]);
    }

    function show9()
    {
        $data = test_tech_video::where([
            ['niveau','=','Beginners']
        ])
        ->get();
        return view('InsTech.test_vid',['members'=>$data]);
    }
    function show10()
    {
        $data = Test_technique::where([
            ['niveau','=','Advanceds']
        ])
        ->get();
        return view('InsTech.test_mcq_adv',['members'=>$data]);
    }
    function show13()
    {
        $data = test_tech_video::where([
            ['niveau','=','Advanceds']
        ])
        ->get();
        return view('InsTech.test_vid_adv',['members'=>$data]);
    }
    function add_note(Request $req){
        $result = new Result();
        $result->test_id = $req->input("test_id");
        $result->arbitre_id = $req->input("arbitre_id");
        $result->note = $req->input("note");
        $result->time = $req->input("time");
        $result->save();
    }
    function create_password(Request $req){
        dump(bcrypt("sabouha"));
    }
    
  
        public function show_prfl(){
            $profile = Instricteur_tech::where('id' ,'=' ,Auth::guard('instricteur_tech')->user()->id)->get();
            return view('InsTech.prflinstech',['members'=>$profile]);
        }

        public function show_ins(){
            $profile = Instricteur_tech::where('id' ,'=' ,Auth::guard('instricteur_tech')->user()->id)->get();
            return view('InsTech.techins',['members'=>$profile]);
        }

    
}

