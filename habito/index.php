<!-- The Modal -->

<style>
  
</style>
<div id="myModal" class="modal">

  <!-- Modal content -->

  <div class="modal-content">


  <form method="post">

      <label for="username">Username</label>

      <input type="text" name="username" required>

      <label for="password">Password</label>

      <input type="password" name="password" required>

      <input type="submit" name="Submit1" value="Send">

    </form>
  

  </div>
  <a href="signup.php"><button>SIGNUP</button></a>
</div>
<a href="subact.php"><button>submit activity</button></a>
 <?php
 include 'koneksi.php';
 if(isset($_POST["Submit1"]))
{
 $pass = $_POST['password'];
 $username = $_POST['username'];

 
 $sql = "SELECT id_user, email, username, password FROM user WHERE password = '$pass' and username = '$username'";


 $result = mysqli_query($koneksi,$sql);
 $num_rows = mysqli_num_rows($result);
 echo $num_rows;
 if($num_rows > 0){
 while($data = mysqli_fetch_array($result)) {
    if($data['id_user'] != "")
    {
        echo "Welcome, ";
        echo $data['username'];
        header('Location: https://google.com');
    }
    else {
        echo "wrong creds";
        header('Location: https://youtube.com');
    }
 }}

 else {
  header('Location: https://youtube.com');

 }
}
 
 ?>