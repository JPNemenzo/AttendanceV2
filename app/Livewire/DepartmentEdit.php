<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Department;
use App\Models\Company;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
class DepartmentEdit extends Component
{
    public $description='';
    public $company_id='';
    public $department_id='';
    public $company;
    protected $rules = [
        'company_id' => 'required',
        'description' => 'required',
    ];
       
            
          
        
    
        public function mount($departmentID)
        {
            
            $decrypteddepartmentID = Crypt::decrypt($departmentID);
            $depap = Department::findOrFail($decrypteddepartmentID);

            $this->description = $depap->description;
            $this->department_id = $depap->department_id;
            $this->company_id = $depap->company_id;
            $this->loadDropdownData();
           
        }
    
        public function loadDropdownData()
        {
            $this->company = Company::all();
        
        }
    
        public function editDepartment()
        {
            $this->validate();
            $employee = Department::findOrFail($this->department_id);
            $employee->update([
                'description' => $this->description,
                'company_id' => $this->company_id,
                
            ]);
    
            session()->flash('message', 'Employee updated successfully!');
            return redirect()->intended('/company/department')->with('updateDepartment', 'Successfull');
        }
      
    public function render()
    {
        return view('livewire.department-edit');
    }
}
