<?php
ob_start();
require 'config.php';

$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);
?>
<?php if ($result->num_rows > 0) : ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom d'utilisateur</th>
            <th>Email</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td>
                    <a href="form_update.php?id=" <?= $row["username"]; ?>>
                </a>
                </td>
                <td><?php echo $row["email"]; ?></td>
                <td>
                <button>
                    <a href="delete.php?id=<?= $row['id']; ?>" class=" font-medium text-white-600 dark:text-blue-500 hover:underline">
                        Edit
                    </a>
                </button>
            </td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php else : ?>
    <p>Pas de résultats</p>
<?php 
endif;

$title ='Listes des utilisateurs';
$content = ob_get_clean();
require 'layout.php';
require 'delete.php';
