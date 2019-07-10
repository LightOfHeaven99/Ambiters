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
        $course->description=$request->input('description');
        $course->place=$request->input('place');
        $course->day=$request->input('day');
        $course->time=$request->input('time');
        $course->price=$request->input('price');
        $course->points=$request->input('points');
        $course->slots=$request->input('slots');
        $course->status=true;
        $course->toLearn1=$request->input('toLearn1');
        $course->toLearn2=$request->input('toLearn2');
        $course->toLearn3=$request->input('toLearn3');
        $course->registered =0;
        $course->discount=0;



        $image = $request->file('image');
        $imageName = $request->input('title') . '.' . $image->getClientOriginalExtension();
        $course->img=$imageName;
        $destinationPath = public_path('/img/courses/');
        Image::make($image)->fit('400', '300')->encode('jpg', 80)->save( $destinationPath . $imageName);

        $course->save();

        return app('App\Http\Controllers\PagesControler')->panel();
    }


    public function edit(Request $request){
        $id = $request->input('id');
        $course =Course::find($id);
        return view('admin.edit')->with('course', $course);
    }

    public function show(Request $request){
        $id = $request->input('id');
        $course = Course::find($id);
        $registers = Registers::all()->where('courseID', $id);
        return view('admin.show', ['course'=> $course,
                                    'registers'=> $registers
                                  ]);
    }


    public function update(Request $request){

        $id = $request->input('id');
        $course =Course::find($id);
        $course->title=$request->input('title');
        $course->description=$request->input('description');
        $course->place=$request->input('place');
        $course->day=$request->input('day');
        $course->time=$request->input('time');
        $course->price=$request->input('price');
        $course->points=$request->input('points');
        $course->discount=$request->input('discount');
        $course->slots=$request->input('slots');
        $course->toLearn1=$request->input('toLearn1');
        $course->toLearn2=$request->input('toLearn2');
        $course->toLearn3=$request->input('toLearn3');
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
