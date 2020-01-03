<?PHP 
$server = "localhost"; 
$name_user = "hacker"; 
$password_user = "hacker"; 
$db_user = "testDB"; 

try 
{ 
$conn = new PDO("mysql:host=$sever;dbname=$SALAMANDRA", $root, $''); 

if(empty($_POST['name'])) 
{ 
exit("Name"); 
} 
if(empty($_POST['content'])) 
{ 
exit("Content"); 
} 

$query = "INSERT INTO message VALUES (NULL,:names,NOW())"; 
$msg = $conn -> prepare($query);
    
$msg -> execute(['names' => $_POST['name']]); 

$msg_id = $conn -> lastInsertId(); 

$query = "INSERT INTO message_content VALUES(NULL , :content , :message_id)"; 
$msg = $conn -> prepare($query); 
$msg -> execute (['content' => $_POST['content'],'message_id' => $msg_id]); 

header("Location:index.php"); 
} 
catch(PDOException $e) 
{ 
echo "Error" . $e -> getMessage(); 
} 
?>




Специальные мощные <span class="profsystem">металлические усилители</span> с <br> интегрированными угловыми соединителями <br> обеспечивают высокую стабильность конструкций. <br>
Геометрия систем обеспечивает применение самого <br> широкого спектра дверных заполнений - и существенно <br> расширяет диапазон<span class="profsystem"> дизайнерских решений</span>. <br> <br>
Пороги с термическим разделением гарантируют <br> превосходную<span class="profsystem"> теплоизоляцию</span>. Двойные уплотнения <br> эффективно препятствуют продуванию и помогают <br> сохранить тепло Вашего дома. <br>
Специальные элементы для повышения <br><span class="profsystem"> водонепроницаемости</span>. Идеальное дополнение к оконным <br> системам программы EUROLINE