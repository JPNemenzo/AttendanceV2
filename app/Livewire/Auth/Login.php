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
    public $companyId = '';
    public $status = 'active';



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
        $companyId = $userRecord->company_id;
        $empID = $userRecord->employee_id;
        

        
            if(auth()->attempt(['username' => $this->username, 'password' => $this->password,'department_id' => $departmentiId])) {
                $user = auth()->user();

                if($companyId ===1){

                    if($departmentiId === 1){
                        $employee = EmployeeRecords::where('employee_id',$empID)->first();
                        $employee->update([
                            'status' => $this->status,
                          
                        ]);
                        return redirect()->intended('/company')->with('success', 'Welcome back!'); 
 
                    }else{
                        if($departmentiId === 2){
                            $employee = EmployeeRecords::where('employee_id',$empID)->first();
                            $employee->update([
                                'status' => $this->status,
                              
                            ]);
                           
                            return redirect()->intended('/dashboard')->with('success', 'Welcome back!');
                        }else{
                            if( $departmentiId === 3 ){
                                return redirect()->intended('/company/attendance_page');
                            }else
                            {
                                $employee = EmployeeRecords::where('employee_id',$empID)->first();
                                $employee->update([
                                    'status' => $this->status,
                                  
                                ]);
                                return redirect()->intended('/employee/dashboard')->with('success', 'Welcome back!');
                            }
                         
                        }
                    }

                }else{
                    if($departmentiId === 2)
                    {
                        $employee = EmployeeRecords::where('employee_id',$empID)->first();
                        $employee->update([
                            'status' => $this->status,
                          
                        ]);
                        return redirect()->intended('/dashboard')->with('success', 'Welcome back!');
                    }else{
                        if( $departmentiId === 3 ){
                            return redirect()->intended('/company/attendance_page');
                        }else
                        {
                            $employee = EmployeeRecords::where('employee_id',$empID)->first();
                            $employee->update([
                                'status' => $this->status,
                            ]);
                            return redirect()->intended('/employee/dashboard')->with('success', 'Welcome back!');
                        }
                    }
                  

                }
                
            }else{
                return $this->addError('errors', trans('auth.failed')); 
            }

        
       
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
