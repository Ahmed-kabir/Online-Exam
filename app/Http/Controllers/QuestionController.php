<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function add_question(){
        return view('question.addQuestion');
    }
    public function store_question(Request $request){
        $question=new Question();
        $question->question=$request->question;
        $question->option_a=$request->option_a;
        $question->option_b=$request->option_b;
        $question->option_c=$request->option_c;
        $question->option_d=$request->option_d;
        $question->answer=$request->answer;
        $question->save();
        return back()->with('message','Question added successfully');
    }
    public function manage_question(){
        $question= Question::all();
        return view('question.manageQuestion',['questions'=>$question]);
    }
    public function edit_question($id){
        $editbyid= Question::where('id',$id)->first();
        return view('question.editQuestion',['question'=>$editbyid]);
        
    }
    public function update_question(Request $request){
        $question= Question::find($request->questionId);
        $question->question=$request->question;
        $question->option_a=$request->option_a;
        $question->option_b=$request->option_b;
        $question->option_c=$request->option_c;
        $question->option_d=$request->option_d;
        $question->answer=$request->answer;
        $question->save();
        return back()->with('message','question updated succesfully');
        
    }
    public function delete_question($id){
        $question= Question::where('id',$id);
        $question->delete();
        return back()->with('message','question deleted successfully');
    }
}
