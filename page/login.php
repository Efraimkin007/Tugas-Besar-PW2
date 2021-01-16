<?php
$userDao= new UserDAOimpl();
$signInPressed = filter_input(INPUT_POST,'btnSignIn');
if ($signInPressed) {
    $username = filter_input(INPUT_POST,'txtUsername');
    $password = filter_input(INPUT_POST,'txtPassword');
    $md5Password = md5($password);
    $user=new User();
    $user->setUsername($username);
    $user->setPassword($md5Password);
    
    $result=$userDao->login($user);

    if ($result !=null && $result->getUsername()) {
        $_SESSION['my_session'] = true;
        $_SESSION['session_username'] = $result->getUsername();
        $_SESSION['session_iduser'] = $result->getIduser();
        header("location:index.php");
    } else {
        
        echo '<div class="bg-error">Invalid username or password</div>';
    }
}

?>
<form method="post" class="form-sign-in">
    <h1>Please sign in</h1>
    <label for="txtUsername" class="label">Username</label>
    <input type="text" id="txtUsername" name="txtUsername" autofocus required
    placeholder="Username" class="input--style-4">
    <label for="txtPassword" class="label">Password</label>
    <input type="password" id="txtPassword" name="txtPassword" required placeholder="Password"
    class="input--style-4">
    <input type="submit" class="btn btn--radius-2 btn--blue" value="Sign In"
    name="btnSignIn">
</form>
