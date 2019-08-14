<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Registers;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class CourseController extends Controller
{
    public function create(Request $request){

      //Contola błędów
      $rules = [
  			'title'=>'required',
        'subtitle'=>'required',
        'description'=>'required',
        'place'=>'required',
        'slots'=>'required',
        'image'=>'required',
        'points'=>'required',
        'price'=>'required',
        'image'
  		];

  		$messeges = [
  			'title.required' => "Pole Nazwa kursu nie moze byc puste.",
        'subtitle.required' => "Pole Podtytuł kursu nie moze byc puste.",
  			'description.required' => "Pole Opis nie moze byc puste.",
  			'place.required' => "Pole Miejsce kursu nie moze byc puste.",
  			'slots.required' => "Pole Ilość miejsc nie moze byc puste.",
  			'img.required' => "Musisz dodać zdjęciu do kursu. Zdjęcie, max: 2MB, wymiary: 600x600",
  			'points.required' => "Wybierz ile jest kurs jest wart punktów. Jak ma być zero to napisz 0",
        'price.required' => "Pole Cena nie może być puste"

  		];

      $this->validate($request, $rules, $messeges);



        $course = new Course;
        $course->title=$request->input('title');
        $course->subtitle=$request->input('subtitle');
        $course->description=$request->input('description');
        $course->place=$request->input('place');
        $course->day=$request->input('day');
        $course->time=$request->input('time');
        $course->timeEnd=$request->input('timeEnd');
        $course->price=$request->input('price');
        $course->points=$request->input('points');
        $course->slots=$request->input('slots');
        $course->status=true;
        $course->toLearn1=$request->input('toLearn1');
        $course->toLearn2=$request->input('toLearn2');
        $course->toLearn3=$request->input('toLearn3');
        $course->toLearn4=$request->input('toLearn4');
        $course->toLearn5=$request->input('toLearn5');
        $course->registered =0;
        $course->discount=0;
        $course->img=$request->input('image');
        $course->type=$request->input('type');
        $course->save();

        return app('App\Http\Controllers\PagesControler')->panel();
    }




    public function update(Request $request){

        $id = $request->input('id');
        $course =Course::find($id);
        $course->title=$request->input('title');
        $course->subtitle=$request->input('subtitle');
        $course->description=$request->input('description');
        $course->place=$request->input('place');
        $course->day=$request->input('day');
        $course->time=$request->input('time');
        $course->timeEnd=$request->input('timeEnd');
        $course->price=$request->input('price');
        $course->points=$request->input('points');
        $course->discount=$request->input('discount');
        $course->slots=$request->input('slots');
        $course->toLearn1=$request->input('toLearn1');
        $course->toLearn2=$request->input('toLearn2');
        $course->toLearn3=$request->input('toLearn3');
        $course->toLearn4=$request->input('toLearn4');
        $course->toLearn5=$request->input('toLearn5');
        $course->img=$request->input('image');
        $course->type=$request->input('type');
        $course->status=true;
        $course->registered = $course->registered;

        $course->save();
        $courses = Course::all()->where('status', true);
        return view('admin.panel')->with('courses', $courses);

    }

    public function delete(Request $request){
      $id = $request->input('id');
      $course =Course::find($id);
      if($course!=null){
        if($course->status==true){
          $course ->status=false;
          $course->save();
        }else{
          $course->delete();
          return app('App\Http\Controllers\PagesControler')->deleted();
        }
      }

      return app('App\Http\Controllers\PagesControler')->panel();
    }
}
