<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Models\EmployeeRecords;

class Login extends Component
{

    public $username = '';
    public $password = '';
    public $department_id = '';



    public function login() {

        $credentials = $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $userRecord = EmployeeRecords::where('username', $this->username)->first();

        if (!$userRecord) {
            
            return $this->addError('errors', trans('auth.failed'));
        }
        $departmentiId = $userRecord->department_id;
        

        
            if(auth()->attempt(['username' => $this->username, 'password' => $this->password,'department_id' => $departmentiId])) {
                if($departmentiId === 1){

                $user = EmployeeRecords::where(['username' => $this->username ,'department_id' => $this->department_id])->first();
             
                return redirect()->intended('/dashboard')->with('success', 'Welcome back!'); 
            }
            else{
                $user = EmployeeRecords::where(['username' => $this->username ,'department_id' => $this->department_id])->first();
              
                return redirect()->intended('hr/dashboard')->with('success', 'Welcome back!');
                
            }
            }
            else{
                return $this->addError('errors', trans('auth.failed')); 
            }

        
       
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
