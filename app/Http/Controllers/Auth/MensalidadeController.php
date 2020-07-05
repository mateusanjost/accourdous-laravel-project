<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Mene;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Http\Controllers\MensalidadesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MensalidadeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
 */

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['requerid', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'mensalidade' => ['required', 'string', 'max:255'],
            'filtro' => ['requerid', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Mene
     */
    protected function create(array $data)
    {
        
        
        

      
    }

    public function mensalidade(Request $request)
    {
        
$data = $request->only('name', 'email', 'mensalidade', 'filtro',);

       DB::table('mensalidade')->insert($data);
//return  dd($data);
        return redirect()->route('login');
    }


}