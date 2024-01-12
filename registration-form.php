
    <div class="container w-25">
    <form class="form-control" action="">
        <h4>SignUp</h4>
        <p>it's quick and easy.</p>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <input class="form-control" type="text" name="f_name" placeholder="First name">
            </div>
            <div class="col-lg-6">
            <input class="form-control" type="text" name="l_name" placeholder="Surname">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-2">
            <input class="form-control" type="text" name="m-mail" placeholder="Mobile number or email address">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-2">
            <input class="form-control" type="password" name="password" placeholder="New password">
            </div>
         </div>
           
        <label class="mt-2" for="dob">Date of birth</label>
        <i class="bi bi-question-circle-fill"></i>

        <div class="d-flex gap-2">
        <select name="day" class="form-control" id="">
            <?php
                $i=1;
                while($i<=31)
                {
                    echo "<option value='$i'>$i</option>";
                    $i++;
                }
            ?>
        </select>

        <select class="form-control" name="month" id="">
            <?php
            $months = ['Jan','Feb','Mar','Apr','May','June','July','Aug','Sep','Oct','Nov','Dec',];
            foreach($months as $month){
                echo "<option value='$month'>$month</option>";
            }
            ?>
        </select>

        <select class="form-control" name="year" id="">
            <?php
                $i=1905;
                while($i<=2024){
                    echo "<option value='$i'>$i</option>";
                    $i++;
                }
            ?>
        </select>
        
        </div>
        
        <label for="">Gender</label>
        <i class="bi bi-question-circle-fill"></i>
        <div class="d-flex gap-2" name="gender">
            <div class="male form-control">
            <label for="">Male</label>
            <input type="radio" name="gender" id="">
            </div>

            <div class="female form-control">
            <label for="">Female</label>
            <input type="radio" name="gender" id="">
            </div>
           
        </div>


        <small>People who use our service may have uploaded your contact information to Facebook. <a class="text-decoration-none text-secondary" href="">Learn more.</a></small> 
        <br><br>
        <small>By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may receive SMS notifications from us and can opt out at any time.</small>
        <br><br>
        <button style="background-color:#00A400" class="btn text-white fw-bold rounded-2 text-center w-50 mx-auto d-block ">Sign Up</button>






        </div>
    </form>
    </div>
    