<form action="loginpost" method="post">
    {{csrf_field()}}
    <input type="text" name="account" placeholder="nhap tk">
    <input type="text" name="password" >
    <input type="checkbox" name="remember" value="1">
    <button type="submit">Dang nhap</button>
</form>