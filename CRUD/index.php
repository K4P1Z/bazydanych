<?php
include 'db.php'; // Polaczenie z baza danych
$sql = "SELECT id, name, email, created_at FROM users" ;
$result = $conn->query ($sql) ;
?>
<!DOCTYPE html> 
<html> 
<head>
    <title>Lista uzytkowników</title>
</head>
<body>
<h2>Lista uzytkowników</h2>
<table border="1">
<tr>
<th>ID</th>
<th> Imie</th>
<th>Email</th>
<th>Data utworzenia</th>
<th>Akcje</th>
</tr> 
<?php
if ($result->num_rows > 0)
while ($row = $result->fetch_assoc ()) {
echo "<tr>";
echo "<td>" . $row["id"] . "</td>" ; 
echo "<td>" . $row ["name"] . "</td>" ;
echo "<td>" . $row["email"] . "</td>";
echo "<td>" . $row["created_at"] . "</td>";
echo "<td>
        <a href='edit.php?id=".$row["id"]."' >Edytuj</a> | 
        <a href='delete.php?id=".$row["id"]." '>Usun</a>
    </td>"; 
echo "</tr>";
} else {
echo
"<tr><td colspan='5'>Brak uzytkowników</td></tr>";
}
?>
</table>
<br>
<a href="create.php">Dodaj nowego uzytkownika</a>
</body>
</html>
<?php
$conn->close();
?>