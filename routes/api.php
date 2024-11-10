<?php

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users', function () {
    return response()->json(User::
    select('id', 'name', 'email', 'age')
    ->get());
});

Route::get('/users/{id}', function  ($id)  {
    return response()->json(User::find($id));
});

Route::post('/users', function (Request $request) {
    try {
        $data = $request->validate([
            'name' => 'string',
            'email' => 'email|unique:users,email',
            'age' => 'int|min:0'
        ]);
        $answer = User::create($data);
    } catch (ValidationException $e) {
        return response()->json(['status' => $e->status, 'message' => $e->getMessage()]);
    }

    return response()->json($answer);
});

Route::put('/users/{user_id}', function (User $user_id, Request $request) {
    try {
        $data = $request->validate([
            'name' => 'string',
            'email' => 'email|unique:users,email',
            'age' => 'int|min:0'
        ]);
        $answer = $user_id->update($data);
    } catch (ValidationException $e) {
        return response()->json(['status' => $e->status, 'message' => $e->getMessage()]);
    }

    return response()->json($answer);
});

Route::delete('/users/{user_id}', function (User $user) {
    try {
        $answer = $user->delete();
    } catch (ValidationException $e) {
        return response()->json(['answer' => 'user not found']);
    }

    return response()->json(['answer' => 'is deleted']);
});
