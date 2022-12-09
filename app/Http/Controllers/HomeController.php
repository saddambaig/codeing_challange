<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRequest;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::whereNot('id',Auth::user()->id)->get();
        $usersRequests=UserRequest::where('sender_id',Auth::user()->id)->get();
    //    dd($usersRequests);
        $sentCount=UserRequest::where('sender_id',Auth::user()->id)->where('status','0')->count();
        $receiveCount=UserRequest::where('receiver_id',Auth::user()->id)->where('status','0')->count();
        $connections=UserRequest::whereOr('sender_id',Auth::user()->id)->whereOr('receiver_id',Auth::user()->id)->where('status','1')->count();
        return view('home',compact('users','usersRequests','sentCount','receiveCount','connections'));
    }
    public function getsentRequests(){
        $userRequests=UserRequest::where('sender_id',Auth::user()->id)->where('status','0')->get();
        $view= view('user_requests',compact('userRequests'))->render();
        // dd($view);
        return response()->json(['data'=>$view]);
    }
    public function getConnections(){
        $connections=UserRequest::where('sender_id',Auth::user()->id)->whereOr('receiver_id',Auth::user()->id)->where('status','1')->get();
        $view= view('connections',compact('connections'))->render();
        // dd($view);
        return response()->json(['data'=>$view]);
    }
    public function getReceivedRequests(){
        $userRequests=UserRequest::where('receiver_id',Auth::user()->id)->where('status','0')->get();
        $view= view('receive_request',compact('userRequests'))->render();
        // dd($view);
        return response()->json(['data'=>$view]);
    }
    public function getSuggestions(){
        $users=User::whereNot('id',Auth::user()->id)->get();
        $view= view('suggestions',compact('users'))->render();
        // dd($view);
        return response()->json(['data'=>$view]);
    }
   
    public function sendRequest(Request $request){
        // dd($request->all());
        $create=UserRequest::create([
            'sender_id'=>$request->userId,
            'receiver_id'=>$request->suggestionId,
            'status'=>0
        ]);
        if($create){
            return response()->json(['messsage'=>'Sent Successfully'],200);
        }
    }
    public function deleteRequest(Request $request){
        // dd($request->all());
        $req=UserRequest::find($request->requestId);
        if($req->delete()){
            return response()->json(['messsage'=>'deleted Successfully'],200);
        }
    }
    public function acceptRequest(Request $request){
        // dd($request->all());
        $req=UserRequest::find($request->requestId);
        $req->status=1;
        if($req->save()){
            return response()->json(['messsage'=>'deleted Successfully'],200);
        }
    }
}
