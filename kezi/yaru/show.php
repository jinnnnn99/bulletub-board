<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>授業一覧</title>
    <style>
       
    </style>
</head>

<body>
    <div class="courses">
        <div class="admin-link">
            <a href="https://gms.gdl.jp/~kang/yaru/password.php" target="_blank">Admin</a>
        </div>
        <h2>授業一覧</h2>
        <?php
        $sql = "SELECT id, course_name FROM courses";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $name = $row['course_name'];
        ?>
                <div class="course">
                    <a href="#" onclick="showPasswordForm('<?= $id ?>')"><?= $name ?></a>
                    <form id="<?= $id ?>" method="post" action="password_check.php" style="display: none;">
                        <input type="hidden" name="course_name" value="<?= $name ?>">
                        <label for="password_<?= $id ?>">パスワード：</label>
                        <input type="password" id="password_<?= $id ?>" name="password" required>
                        <br>
                        <input type="submit" value="確認">
                    </form>
                </div>
        <?php
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <script>
        function showPasswordForm(id) {
            var forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.style.display = 'none';
            });

            var selectedForm = document.getElementById(id);
            selectedForm.style.display = 'block';
        }
    </script>
</body>

</html>
