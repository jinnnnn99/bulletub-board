<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<!-- ... -->
<body>
    <form method="post" action="save_course.php">
        <label for="course_name">授業名：</label> <!-- 授業名: -->
        <input type="text" id="course_name" name="course_name" required>
        <br>
        <label for="password">パスワード：</label> <!-- パスワード： -->
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="登録"> <!-- 登録-->
    </form>
</body>
</html>
