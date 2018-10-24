<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
  <?php
  $url = 'https://jsonplaceholder.typicode.com/todos'; // path to your JSON file
  $data = file_get_contents($url); // put the contents of the file into a variable
  $characters = json_decode($data, true);
  ?>
<h2>Todo List</h2>
<p>I am pulling the information from this json file <a href="https://jsonplaceholder.typicode.com/todos">https://jsonplaceholder.typicode.com/todos</a> using php</p>
<table>
  <tr>
    <th>Name</th>
    <th>Completed?</th>
  </tr>
  <?php
    foreach ($characters as $character) {
   ?>
  <tr>
    <td><?php echo $character['title']; ?></td>
    <td><?php if ($character['completed'] == true){ echo "yes";} else {echo "no";}; ?></td>
  </tr>
<?php } ?>
</table>

</body>
</html>
