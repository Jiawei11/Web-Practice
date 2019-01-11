<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="./tools/jquery.js"></script>
    <script src="./tools/jquery-ui.js"></script>
</head>
<body align="center">
    <form action="borrowprocess.php" method="post">
        <p>
            <select name="classid[]" multiple>
                <option value="1">電腦教室1</option>
                <option value="2">電腦教室2</option>
                <option value="3">電腦教室3</option>
                <option value="4">電腦教室4</option>
                <option value="5">電腦教室5</option>
                <option value="6">電腦教室6</option>
                <option value="7">電腦教室7</option>
            </select>
        </p>
        <input type="date" name="date" required>
        <p>
            <select name="slot[]" multiple>
                <option value="第1節">第1節</option>
                <option value="第2節">第2節</option>
                <option value="第3節">第3節</option>
                <option value="第4節">第4節</option>
                <option value="午休時間">午休時間</option>
                <option value="第5節">第5節</option>
                <option value="第6節">第6節</option>
                <option value="第7節">第7節</option>
            </select>
        </p>
        <p>
            <div>填寫借用電腦教室的目的:</div>
            <textarea name="purpose" cols="30" rows="10" required></textarea>
        </p>
        <input type="submit" value="申請">
    </form>
</body>
</html>