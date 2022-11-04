<?php

if(isset($_POST['submit'])) {
echo $_POST['name'];
echo $_POST['age'];
}

print_r($_POST['submit']); 

?>
<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=brad&age=45&height=6ft2inch">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
    <label for="name">Name</label>
    <input type="text" name="name">
</div>
<div>
    <label for="age">age</label>
    <input type="text" name="age">
</div>
<input type="submit" value="submit" name="submit">
</form>