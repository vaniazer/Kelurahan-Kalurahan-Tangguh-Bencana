
            <!-- Tampilan Login -->

    <div class="container-fluid">

            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                        <div class="card card-signin my-5">
                            <div class="card-body">
                                <h5 class="card-title text-center">Login</h5>
                                <hr>
                                    <form class="form-signin" method="post" action="<?=base_url('Jadwal')?>">
                                        <div class="form-label-group">
                                            <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                                            <label for="inputEmail">Masukkan Username</label>
                                        </div>

                                        <div class="form-label-group">
                                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                            <label for="inputPassword">Masukkan Password</label>
                                        </div>

                                        <!-- Ingat Password -->

                                        <!-- <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                                        </div> -->

                                    <button class="loginbtn2 btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                                   
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tampilan Lama -->
            
            <!-- <form>
                <h3 class="text-center">Login</h3>
                
                <input placeholder="Masukkan Username" name="username" type="text"/>
                <input placeholder="Masukkan Password" name="password" type="password"/>

                <button class="btn">Log in</button>
            </form> -->

            

        
    </div>
            