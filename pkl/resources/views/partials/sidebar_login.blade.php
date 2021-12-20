 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
     <div class="content">
         <div class="container fluid">
             <form action="login" method="POST">
                 @csrf

                 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                 <div class="mt-5 form-group mx-4">
                     <div class="d-flex justify-content-center">
                         <label>LOGIN</label>
                     </div>
                     <div class="form-floating">
                         <label>Username: </label>
                         <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" >
                         @error('username')
                         <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label>Password:</label>
                         <input type="password" class="form-control">
                     </div>
                     <div class="d-flex justify-content-center">
                        <button type="submit" class="form-control mx-5">Login</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </aside>
