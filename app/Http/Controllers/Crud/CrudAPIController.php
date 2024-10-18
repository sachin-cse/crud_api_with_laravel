<?php

namespace App\Http\Controllers\Crud;


use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Crud\CrudAPIModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CrudAPIController extends Controller
{
    //add method
    public function add(Request $request){
        $model = new CrudAPIModel();

        $rules = [
            'name'=>'required',
            'email'=>'required|unique:laravel_crud_api,email',
        ];
        $validator = Validator::make($request->all(),$rules, [
            'name.required'=>'Please enter your name',
            'email.required'=>'Please enter your email address',
            'email.unique'=>'This email address is already exists',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
        }else{
            $model->fill($request->all());

            if($model->save()){
                return response('Data Added Successfull', 200);
            }else{
                return response('Data Not Added Successfull', 500);
            }

        }
    }
}
