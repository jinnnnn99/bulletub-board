
<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>授業登録</title>
    <style>
       
        
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        form {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    
    </style>
</head>

<body>
    <form method="post" action="save_course.php">
        <label for="course_name">授業名：</label>
        <input type="text" id="course_name" name="course_name" required>
        <br>
        <label for="password">パスワード：</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="登録">
    </form>
</body>

</html>
오류를 수정해줘
ChatGPT
코드를 확인해보니 오류를 발견할 수 없었습니다. 하지만 오류가 발생하는 부분을 찾고자 한다면 오류 메시지나 예기치 않은 동작이 어떤 형태인지 알려주시면 더 도움을 드릴 수 있을 것입니다. 가능한 해결책을 제시해 드리고 싶습니다.

User
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワード確認</title>
    <style>
        
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        form {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form method="post" action="">
        <label for="course_name">授業名：</label>
        <input type="text" id="course_name" name="course_name" required>
        <br>
        <label for="password">パスワード：</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="登録">
    </form>
</body>

</html>