
<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "begemotya";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Извлечение комментариев из базы данных
$sql = "SELECT * FROM comments";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row['name'] . "</strong>: " . $row['comment'] . "</p>";
        echo "<p><small>" . $row['created_at'] . "</small></p>";
        echo "<hr>";
    }
} else {
    echo "Пока нет комментариев.";
}

foreach ($comments as $comment) {
    echo "<div class='comment'>";
    echo "<p>{$comment['name']}: {$comment['comment']}</p>";
    echo "<form action='delete_comment.php' method='post'>";
    echo "<input type='hidden' name='comment_id' value='{$comment['id']}'>";
    echo "<input type='submit' value='Удалить'>";
    echo "</form>";
    echo "</div>";
}


$conn->close();
?>
