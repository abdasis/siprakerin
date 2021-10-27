<x-guest-layout>
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-4">
               <div class="card border border-primary" style="margin-top: 150px">
                   <div class="card-body text-center">
                       <img height="150px" src="{{asset('logo-smk.png')}}" alt="">
                   </div>
                   <div class="card-body">
                       <x-jet-validation-errors class="mb-4" />
                       @if (session('status'))
                           <div class="mb-4 font-medium text-sm text-green-600">
                               {{ session('status') }}
                           </div>
                       @endif

                       <form method="POST" action="{{ route('login') }}">
                           @csrf

                           <div>
                               <x-jet-label for="email" class="form-label" value="{{ __('Nama Lengkap') }}" />
                               <x-jet-input id="email" class="form-control shadow-none" type="text" name="name" :value="old('name')" required autofocus />
                           </div>

                           <div class="mt-4">
                               <x-jet-label for="password" class="form-check-label" value="{{ __('Password') }}" />
                               <x-jet-input id="password" class="form-control shadow-none" type="password" name="password" required autocomplete="current-password" />
                           </div>

                           <div class="flex items-center justify-end mt-4">


                               <x-jet-button class="mt-2 btn btn-success btn-block">
                                   {{ __('Log in') }}
                               </x-jet-button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</x-guest-layout>
