<!-- <?php
        require_once "helper/database.php";
        // $allName = ['ram', 'mahesh', 'sakin', 'saran', 'charm'];
        if (isset($_GET['search_result'])) {
            // $search_keyword =$_GET['search'];
            $PDO = connectDatabase();
            $select_query = "SELECT username from users where username LIKE'%" . $_GET['search'] . "%'";
            $stmt = $PDO->query($select_query);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
                echo $row['username'], [''];
            }
        }
        ?> -->

<?php
if (isset($_GET['search'])) {
    $pdo = new PDO(
        'mysql:host=localhost;port=3306;dbname=nce-project',
        'root',
        ''
    );
    $select_query = "SELECT username from users where username LIKE '%" . $_GET['search'] . "%'";
    $stmt = $pdo->query($select_query);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        echo $row['username'] . ',';
    }
}


?>