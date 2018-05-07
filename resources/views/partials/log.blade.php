@include('partials.head')
        <div class="box">
            <form method="post"  action="login.php">
                <h2 class="text-center">Log In</h2>
                @include('partials.errors')
                <div class="inputBox">
                    <input type="text" name="uname" value="" required>
                    <label for="">Username</label>
                </div>

                <div class="inputBox">
                    <input type="password" name="pass" value="" required>
                    <label for="" >Password</label>
                </div>

<!--                 <div class="head">
                    <a href="signin.php">Sign In</a>
                    <a href="login.php" class="active">Login</a>
                </div>
 -->
                <div class="head2">
                    <p class="text_link">Don't have an Account? <a href="{{url('/register')}}">Register Now</a>
                    
                </div>
                <input type="submit" name="login" value="LOG IN">
            </form>
        </div>
    </body>
</html>