<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lesson-7";

$conn = mysqli_connect ($servername, $username, $password, $dbname);
if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error ());
}

// if (!$conn){
//     die ("connection failes: " . mysqli_connect_error ()) ;
// }
// echo "yeaaa";
// $sql = "INSERT INTO for_fun (firstname, lastname, email)
// VALUES ('John', 'some', 'sometext@mail.ru'); ";
// $sql.= "INSERT INTO for_fun (firstname, lastname, email)
// VALUES ('John', 'some1', 'dasassda@mail.ru');";

// 1.

// $sql = "SELECT firstname, lastname FROM for_fun WHERE email = 'john@example.com'";

// $result = mysqli_query ($conn, $sql);
// if (mysqli_num_rows($result ) > 0) {
//     while ($row = mysqli_fetch_assoc($result)){
//         echo 'name: ' . $row['firstname'] . "<br>" . ' lastname: ' . $row['lastname'];
//     }
// }else {
//     $sql = "INSERT INTO for_fun (firstname, lastname, email)
//     VALUES ('John', 'Smithdas', 'john@example.com'); ";
//     if (mysqli_query ($conn, $sql)){
//         echo 'success created';
//     }else {
//         echo 'error', $sql;
//         }
//       }
//    mysqli_close ($conn);

//2.

// $sql = "SELECT id FROM for_fun WHERE email = 'john@example.com'";
// $result = mysqli_query ($conn, $sql);
// if (mysqli_num_rows ($result) > 0){
//     while ($row = mysqli_fetch_assoc ($result)){
//         $id = $row['id'];
//        $sql_Delete = "DELETE FROM for_fun WHERE id = $id";
//        if (mysqli_query($conn, $sql_Delete)){
//         echo 'Deleted';
//        }
//     }
    
// }else {
//     echo "0 results";
// }
//    mysqli_close ($conn);


//3.

// $sql = "SELECT Name, Population FROM country ORDER BY Population DESC LIMIT 0, 10";
// $result = mysqli_query ($conn, $sql);

// if (mysqli_num_rows ($result) > 0){
//     while ($row = mysqli_fetch_assoc($result)){
//         echo 'Name: ' . $row['Name'] . '<br>' . 'Population: ' . $row['Population'] . '<br>';
//     }
// }else {
//     echo "0 results"; 
// }


//3.1

// $sql = "SELECT Name, SurfaceArea FROM country ORDER BY SurfaceArea ASC LIMIT 0, 10";
// $result = mysqli_query ($conn, $sql);

// if (mysqli_num_rows($result) > 0){
//     while ($row = mysqli_fetch_assoc($result)){
//         echo 'Name: ' . $row['Name'] . '<br>' . 'Area: ' . $row['SurfaceArea'] . '<br>';
//     }
// }else {
//     echo '0 results';
// }


//3.2

// $sql = "SELECT Name FROM country ORDER BY Name ASC LIMIT 100, 100";
// $result = mysqli_query ($conn, $sql);

// if (mysqli_num_rows($result) > 0){
//     while ($row = mysqli_fetch_assoc ($result)){
//         echo "Name: " . $row['Name'] . '<br>';
//     }
// }else {
//     echo "0 results";
// }


//3.3

// $sql = "SELECT Name, IndepYear FROM country WHERE IndepYear IS NOT NULL ORDER BY IndepYear ASC LIMIT 0, 1";
// $result = mysqli_query ($conn, $sql);

// if (mysqli_num_rows ($result) > 0){
//     while ($row = mysqli_fetch_assoc ($result)){
//         echo 'Name: ' . $row['Name'] . '<br>' . 'IndepYear a: ' . $row['IndepYear'] . '<br>';
//     }
// }else {
//     echo "0 results";
// }

?>
