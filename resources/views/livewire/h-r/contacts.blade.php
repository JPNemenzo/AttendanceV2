<div id="layout-wrapper">
<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">ADMIN</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Contacts</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                         
                        <div class="row">
                        <div class="col-4"></div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
        
                                  
                                        <div class="col-md-12">
                                                <!-- chat  -->
                        <div class="d-lg-flex">
                        <div class="chat col-12">
                                <div class="">
                                    <div class="py-4 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 align-self-center me-3">
                                         
                <div class="avatar-md profile-user-wid mb-4 img-thumbnail rounded-circle">
                                                <span class="avatar-title rounded-circle bg-primary fs-5 fw-bold" >
                                                {{ strtoupper(substr(\Illuminate\Support\Facades\Auth::user()->first_name, 0, 1)) }}
                 
                  
             </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15 mb-1">{{ \Illuminate\Support\Facades\Auth::user()->first_name  }} {{ \Illuminate\Support\Facades\Auth::user()->last_name  }}</h5>
                                                <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active</p>
                                            </div>

                                            <div>
                                                <!-- <div class="dropdown chat-noti-dropdown active">
                                                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-bell bx-tada"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="search-box chat-search-box py-4">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <i class="bx bx-search-alt search-icon"></i>
                                        </div>
                                    </div>

                                    <div class="chat-leftsidebar-nav">
                                        <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                                <a href="#contacts" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    <i class="bx bx-book-content font-size-20 d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link ">
                                                    <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Chat</span>
                                                </a>
                                            </li>
                                           
                                           
                                        </ul>
                                        <div class="tab-content py-4">
                                            <div class="tab-pane " id="chat">
                                                <div>
                                                    <h5 class="font-size-14 mb-3">Recent</h5>
                                                    <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">
                                                    @foreach($messages as $message)
                                                        <li class="{{ $loop->first ? 'active' : '' }}">
                                                            <a href="javascript: void(0);">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 align-self-center me-3">
                                                                        <i class="mdi mdi-circle {{ $message->status ? 'text-success' : 'text-warning' }} font-size-10"></i>
                                                                    </div>
                                                                    <div class="flex-shrink-0 align-self-center me-3">
                                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="rounded-circle avatar-xs" alt="">
                                                                    </div>
                                                                    
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate font-size-14 mb-1">{{ $message->employee->first_name }}  {{ $message->employee->last_name }}</h5>
                                                                        <p class="text-truncate mb-0">{{ $message->chatmessage }}</p>
                                                                    </div>
                                                                    <div class="font-size-11">{{ $message->created_at->diffForHumans() }}</div>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>

                                            

                                            <div class="tab-pane show active" id="contacts">
                                                <h5 class="font-size-14 mb-3">Contacts</h5>

                                                <div  data-simplebar style="max-height: 410px;">
                                                @foreach ($groupedContacts as $letter => $contacts)
            <!-- Display the letter group -->
            <div class="mt-4">
                <div class="avatar-xs mb-3">
                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                        {{ $letter }}
                    </span>
                </div>

                <!-- Display contacts in this group -->
                <ul class="list-unstyled chat-list">
                    @foreach ($contacts as $contact)
                        <li>
                                               @php
                                                     $encrypteempID = Crypt::encrypt($contact->employee_id);
                                               @endphp
                        <a  wire:navigate href="{{ route('chats', ['empID' => $encrypteempID]) }}" >
                        <h5 class="font-size-14 mb-0">
                        <i class="mdi mdi-circle {{ $contact->status === 'active' ? 'text-success' : 'text-secondary' }} font-size-10"></i>
                            {{ $contact->first_name }} {{ $contact->last_name }}
                           
                        </h5>
                    </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
        
        @if(\Illuminate\Support\Facades\Auth::user()->company_id !== 1)
        <div class="mt-4">
                <div class="col-4 fs-5">
                    <strong>Contact Us</strong>
                </div>
        @foreach ($groupedsupers as $letter => $supers)
            <!-- Display the letter group -->
          

                <!-- Display contacts in this group -->
                <ul class="list-unstyled chat-list">
                    @foreach ($supers as $super)
                        <li>
                                               @php
                                                     $encrypteempID = Crypt::encrypt($super->employee_id);
                                               @endphp
                        <a  wire:navigate href="{{ route('chats', ['empID' => $encrypteempID]) }}" >
                        <h5 class="font-size-14 mb-0">
                        <i class="mdi mdi-circle {{ $super->status === 'active' ? 'text-success' : 'text-secondary' }} font-size-10"></i>
                            {{ $super->first_name }} {{ $super->last_name }}
                            
                        </h5>
                    </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach

        @endif


                                                    

                                                    

                                                    
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            
                            

            


           
                                                   <!-- chat end  -->
                                            </div>

                                        
                                        
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        
                    </div>
                    <!-- container-fluid -->
                    <div class="col-4"></div>
                </div>
                <!-- End Page-content -->

                

        </div>
        <!-- END layout-wrapper -->


