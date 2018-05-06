@include('partials.head')

<body>
    <div class="box">
        <form method="post" action="signin.php">
            <h2 class="text-center">Sign Up</h2>
            <?php @include('partials.errors');

                 ?>
                <div class="inputBox">
                    <input type="text" name="uname" value="" required>
                    <label for="">Username</label>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" value="" required>
                    <label for="">Email</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="pass" value="" required>
                    <label for="">Password</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="cpass" value="" required>
                    <label for="">Confirm Password</label>
                </div>
                <div class="head2">
                    <p class="text_link">Already a Member? <a href="{{url('login')}}">Login</a> Here</p>                    
                </div>
                <input type="submit" name="signin" value="SIGN UP"><a href="login.php">
        </form>
    </div>
</body>

</html>