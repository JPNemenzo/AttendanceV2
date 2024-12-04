
@push('styles')
<style>
    .password-container {
    position: relative;
    
}



.toggle-password {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



.background-image {
    background-image: url('https://preview.redd.it/snow-capped-4k-3840x2160-by-a-i-v0-npeh96ogvkea1.jpg?width=1080&crop=smart&auto=webp&s=a29fc17ba5671e1788319a763ed492f1c2afa2cf'); /* Replace with your image URL */
    background-size: cover; /* Cover the entire div */
    background-position: center; /* Center the image */
    height: 100vh; /* Full height of the viewport */
    width: 100%; /* Full width */
    display: flex; /* Center content */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
  
    
}


.transparent-card {
        background-color: rgba(255, 255, 255, 0.5); /* White background with 50% opacity */
        border: none; /* Remove default border */
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Optional: Add a subtle shadow */
        backdrop-filter: blur(5px); /* Optional: Apply a blur effect to the background */
    }

    .card-body {
        color: #000; /* Set text color for better visibility */
    }
</style>


@endpush

<div class="background-image">
       <div class="account-pages  pt-sm-4 ">
            <div class="container ">
                <div class="row justify-content-center ">
                    <div class="col-md-8 col-lg-6 col-xl-5 ">
                        <div class="card overflow-hidden transparent-card ">
                            <div >
                                <div class="row">
                                    <!-- <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue to Skote.</p>
                                        </div>
                                    </div> -->
                                    <div class="col-12 align-self-end py-3 px-5">
                                        <img  src="https://app.enopolyautomation.com/assets/images/enopoly.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                            @if ($step === 1)
                            <style>
                                input[type="password"],
input[type="text"] {
    width: 100%;
    padding: 10px;
    padding-right: 40px; 
    box-sizing: border-box;
}
                            </style>
                                <div class="p-2">
                                @if ($showFailureNotification)
                             
                                <div wire:model.live="showFailureNotification"  class="rounded-2 alert bg-danger text-center mb-3 " role="alert">
                                        
                                                
                                     
                                       <span class=" text-white fw-bold">  Invalid email </span>
                                
                                 
                        </div>
                                @else
                                <div class=" border border-danger rounded-2 alert bg-white text-center mb-3" role="alert">
                                        
                                                
                                                    <i class="bx bxs-right-arrow-circle bx-fade-right fs-4 float-start me-2"></i>
                                                   <span class=" text-dark"> Enter your Email and OTP will be sent to you!</span>
                                            
                                             
                                    </div>
                                   
                               
                            @endif
                                
                                  
                                    <form wire:submit.prevent="sendOtpforRepass" action="#" method="POST" role="form text-left">
                                    @error('errors') <span class="text-danger error fw-bold" style="font-size: 14px;">{{ $message }}</span> @enderror
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <div class=" @error('errors')border border-danger rounded-3 @enderror @error('email')border border-danger rounded-3 @enderror">
                                            <input  wire:model.live="email" id="email" type="text" class="form-control bg-white border-white "  style="color:#000;" placeholder="Enter email">
                                        </div>
                                        @error('email') <span class="text-danger error fw-bold" style="font-size: 12px;">{{ $message }}</span> @enderror
                                        </div>
                
                                        

                                       
                                        
                                        <div class="align-item-center d-flex justify-content-center">
                                          <button type="submit" class="btn btn-primary w-sm mt-3 me-2 rounded-pill">Send OTP</button>
                                          <a wire:navigate href="{{ route('login') }}" class="btn btn-secondary w-sm mt-3 rounded-pill">Close</a>
                                        </div>

                                        <div class="mt-5 text-center">
                            
                            
                                
                                <p wire:ignore.self>© {{ now()->year }} Design & Develop <i class="mdi mdi-heart text-danger"></i> by Enopoly Team </p>
                           
                        </div>
            
                     
                                    </form>
                        </div>
                                    
                                    @endif

                                    @if($step === 2)
                            <div class="p-2">
                                <div class="text-center">

                                    
                                    <div class="p-2 ">

                                        <h4>Verify your email</h4>
                                        <p class="mb-5">Please enter the 4 digit code sent to <span
                                                class="fw-semibold">{{ $email }} </span></p>

                                        <form wire:submit.prevent ="verifyOtp">
                                            <div class="row " >
                                            @foreach (range(0, 3) as $index)
    <div class="col-3">
        <div class="mb-3">
            <label for="digit.{{ $index }}-input" class="visually-hidden">Digit {{ $index + 1 }}</label>
            <div class="@error('otpInput.' . $index) border border-danger rounded-3 @enderror">
                <input 
                    type="text" 
                    class="form-control form-control-lg text-center two-step" 
                    maxlength="1" 
                    wire:model="otpInput.{{ $index }}" 
                    id="digit.{{ $index }}-input">
            </div>
           
        </div>
    </div>
@endforeach

                                              
                                                
                                            </div>
                                            <div class="align-item-center d-flex justify-content-center">
                                          <button type="submit" class="btn btn-success w-sm mt-3 me-2 rounded-pill w-50">Confirm</button>
                                          
                                        </div>

                                        <div class="mt-5 text-center">
                            
                            
                                
                                <p wire:ignore.self>© {{ now()->year }} Design & Develop <i class="mdi mdi-heart text-danger"></i> by Enopoly Team </p>
                           
                        </div>
                    

                                        </form>

                                        
                                    </div>

                                </div>
                                </div>
                            
                                    @endif

                                @if($step === 3)

                                <style>
                                input[type="password"],
input[type="text"] {
    width: 100%;
    padding: 10px;
    padding-right: 40px; 
    box-sizing: border-box;
}
                            </style>
                                <div class="p-2">
                               
                                  
                                    <form wire:submit.prevent="resetPassword"  method="POST" role="form text-left">
                                    @error('errors') <span class="text-danger error fw-bold" style="font-size: 14px;">{{ $message }}</span> @enderror
                                        <div class="mb-3">
                                            <label for="newpassword" class="form-label">Password</label>
                                            <div class=" @error('errors')border border-danger rounded-3 @enderror @error('newpassword')border border-danger rounded-3 @enderror">
                                            <input  wire:model.live="newpassword" id="newpassword" type="text" class="form-control bg-white border-white "  style="color:#000;" placeholder="Enter newpassword">
                                        </div>
                                        @error('newpassword') <span class="text-danger error fw-bold" style="font-size: 12px;">{{ $message }}</span> @enderror
                                        </div>
                                        
                                        <div class="align-item-center d-flex justify-content-center">
                                          <button type="submit" class="btn btn-primary w-sm mt-3 me-2 rounded-pill w-50">Change newpassword</button>
                                         
                                        </div>

                                        <div class="mt-5 text-center">
                            
                            
                                
                                <p wire:ignore.self>© {{ now()->year }} Design & Develop <i class="mdi mdi-heart text-danger"></i> by Enopoly Team </p>
                           
                        </div>
            
                     
                                    </form>
                        </div>
                                @endif
                                </div>
            
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
</div>


