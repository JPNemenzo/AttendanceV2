<div id="layout-wrapper">
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Company</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Company</a></li>
                            <li class="breadcrumb-item active">Add Department</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
         
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Department</h4>
                        <div class="col-md-12">
                            <div class="row">

                            <livewire:add-department/>
                            
                                <div class="col-md-8">
                                    <table id="akontable" class="table table-bordered dt-responsive all-users-datatable_length  nowrap w-100">
                                        <!-- <div id="dataTables_length" id="all-users-datatable_length"></div> -->
                                            <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Department Description</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            @foreach ($department as $departments)
                                           
                                            @php
                                                     $encryptedepartmentID = Crypt::encrypt($departments->department_id);
                                               @endphp

                                            <tr>
                                             <td>
                                             {{ $departments->company->description ?? 'N/A'}}
                                            </td>
                                                <td> 

                                                {{ ucfirst($departments->description) }}
                                                </td>
                                                <td class="text-center">
                                                    <style>
                             .modal-backdrop {
                                   background-color: transparent !important; /* No background for the backdrop */
                                }
                                .modal-content {
                                   box-shadow: 0 4px 15px rgba(0, 0, 0, 0.8); /* Smooth and subtle shadow */
                                }
                                                    </style>
                                                  <a class="btn btn-outline-secondary btn-sm edit" title="View" data-bs-toggle="modal" data-bs-target=".ViewDepartment{{ $departments->department_id }}">
                                                    <i class="fas fa-eye"></i>
                                                  </a>
                                                  <a wire:navigate href="{{ route('department-Edit', ['departmentID' => $encryptedepartmentID]) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                  </a>
                                                  <a class="btn btn-outline-secondary btn-sm edit" title="Delete" data-bs-toggle="modal" data-bs-target=".DeleteDepartment{{ $departments->department_id }}">
                                                    <i class="fas fa-trash"></i>
                                                  </a>
                                                  <div class="dropdown d-inline">
                                                  <a class="btn btn-outline-secondary btn-sm more dropdown-toggle" title="More" id="moreActions" data-bs-toggle="dropdown" aria-expanded="false">
                                                  <i class="fas fa-ellipsis-h"></i>
                                                  </a>
                                                   
                                                   <ul class="dropdown-menu" aria-labelledby="moreActions">
                                                     <li><a class="dropdown-item" href="#">Details</a></li>
                                                     <li><a class="dropdown-item" href="#">Archive</a></li>
                                                     <li><a class="dropdown-item" href="#">Share</a></li>
                                                   </ul>
                                                 </div>
                                                </td>

                                                 

                                                <!-- view Modal -->
                <div class="modal fade ViewDepartment{{ $departments->department_id }}" tabindex="-1" role="dialog" aria-labelledby="ViewDepartmentLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ViewDepartmentLabel">Department</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-2">Company : <span class="text-primary fw-bold">   {{ $departments->company->description ?? 'N/A'}}</span></p>
                                <p class="mb-4">Department : <span class="text-primary fw-bold">{{ ucfirst($departments->description) }}</span></p>

                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- modal para delete sa department  -->
<div wire:ignore.self class="modal fade DeleteDepartment{{ $departments->department_id }}" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transaction-detailModalLabel">Delete Department?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>  
            <div class="modal-body">
                <strong class="mb-2 fs-6">Are you sure you want to delete this department?</strong>
            </div>
            <div class="modal-footer">
                <button type="submit" wire:click="deleteDepartment({{ $departments->department_id }})" class="btn btn-danger fw-bold" data-bs-dismiss="modal">Delete</button>
                <button type="button" class="btn text-white fw-bold" style="background-color:#3085d6;" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
             <!-- modal para delete sa department end -->

            </div>
            <!-- end main content-->
           
           
                                            </tr>
                                            @endforeach
                                            
                                            </tbody>
                                        </table>

   
                                </div>
                            </div>
                        </div>
                        
                        

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        
    </div>
    <!-- container-fluid -->
</div>
</div>
@push('scripts')
@if (session('department-deleted'))
<script>
      Swal.fire({
                    title: '<strong style="color:#000; font-size:15px;" class="text-center">Department</strong><br><span style="color:#000; font-size:13px;"  class="text-center" > Deleted Successfully!</span> ',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true,
                    width: '300px', 
                    height: '100px',
                    backdrop: true,
                    position: 'top-end',
                    toast: true,
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp',
                    }
                });
    </script>

    
@endif
@endpush
@push('scripts')
@if (session('department-add'))
<script>
      Swal.fire({
                    title: '<strong style="color:#000; font-size:15px;" class="text-center">Department</strong><br><span style="color:#000; font-size:13px;"  class="text-center" > Add Successfully!</span> ',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true,
                    width: '300px', 
                    height: '100px',
                    backdrop: true,
                    position: 'top-end',
                    toast: true,
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp',
                    }
                });
    </script>

    
@endif
@endpush