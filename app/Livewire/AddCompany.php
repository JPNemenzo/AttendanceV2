<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Company;

class AddCompany extends Component
{
    use WithFileUploads;
    public $description='';
    public $image='';
    public $company;
    public $companyId;
 
    protected $rules = [
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
    ];
    public function mount()
    {
      
                $this->loadCompanies();
           

    }
    public function loadCompanies()
{
    $this->company = Company::all();
}
    public function add_company()
    {
        $this->validate();
        $imagePath = $this->image->store('assets', 'public');

        Company::create([
            'description' => $this->description,
            'image' => $imagePath,
         
        ]);
        $this->loadCompanies();

        $this->reset(['description','image']);
    }


    public function confirmDelete($id)
{
    $this->companyId = $id; 
}

public function deleteCompany()
{
    if ($this->companyId) {
        
        Company::find($this->companyId)->delete();
      
        $this->companyId = null;
        $this->loadCompanies();

        $this->dispatch('refreshTable');

        $this->dispatch('company-deleted', ['message' => 'Company Deleted successfully!']);
       
    }
}
    public function render()
    {
        return view('livewire.add-company');
    }
}
