<?php
include('connect.php');
$result = $db->prepare("SELECT * FROM failed");
$result->execute();
for ($i = 0; $row = $result->fetch(); $i++) {
    $gcvgvc = $row['attempt'];
    $tttt = $row['time'];
}
$kjkjk = date('H:i:s');
$time1 = strtotime($kjkjk);
$time2 = strtotime($tttt);
$diff = $time1 - $time2;
if ($diff > 59) {
    $mm = 0;
    $sql = "UPDATE failed SET attempt=?";
    $q = $db->prepare($sql);
    $q->execute(array($mm));
}
if ($gcvgvc <= 2) {
    ?>
    <form action="login.php" method="post">
        <dl style="margin-left: 10px;">
            <dd>
                <span>Username</span>
                <input type="text" name="uname" />
            </dd><dd>
                <span>Password:</span>
                <input type="password" name="pword" />
            </dd><dd>
                <span>&nbsp;</span>
                <input type="submit" value="Login" />
            </dd>
        </dl>
    </form>
    <?php
}
if ($gcvgvc >= 3) {
    echo '<span style="color: #ffffff; font-weight: bold; padding-left: 20px;width: 287px;display: inline-block;">You Have Reach The Maximum Login Attempts, Pls. Try after 30mins, <a href="loginform.php">Refresh</a> the page to try again.<span>';
}
?>