<?php

namespace App\Livewire\HR;

use Livewire\Component;

use App\Models\AttendanceRecord;
use App\Models\Cutoff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AttendanceRecords extends Component
{


    public $attendance, $cutoffs, $cut_off;

    public function mount()
    {
        $companyId = Auth::user()->company_id;

    
        $this->cut_off = Session::get('selected_cut_off', null);

        $this->cutoffs = Cutoff::where('company_id', $companyId)
            ->orderBy('cutoff_id', 'desc')
            ->get();

  
        if ($this->cut_off) {
            $this->loadAttendance($companyId, $this->cut_off);
        } else {
            $latestCutoff = $this->cutoffs->first();
            $this->cut_off = $latestCutoff ? $latestCutoff->cutoff_id : null;
            if ($this->cut_off) {
                $this->loadAttendance($companyId, $this->cut_off);
            } else {
                $this->attendance = collect(); 
            }
        }
    }

    public function cutoffselect()
    {
        $companyId = Auth::user()->company_id;

        if ($this->cut_off) {

            Session::put('selected_cut_off', $this->cut_off);

            $this->loadAttendance($companyId, $this->cut_off);
            return redirect()->intended('/admin/attendance');
        } else {
            $this->attendance = collect(); 
        }
    }

    private function loadAttendance($companyId, $cutoffId)
    {
        $this->attendance = AttendanceRecord::where('company_id', $companyId)
            ->where('cutoff_id', $cutoffId)
            ->orderBy('attendance_id', 'desc')
            ->get();
    }






    public function render()
    {
        return view('livewire.h-r.attendance-record');
    }
}
