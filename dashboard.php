<!-- dashboard.php -->
<?php
session_start();
if (!isset($_SESSION['domains'])) {
  $_SESSION['domains'] = [];
}
if (isset($_GET['add'])) {
  $domain = $_GET['add'];
  $_SESSION['domains'][] = [
    'name' => $domain,
    'expires' => date('Y-m-d', strtotime('+1 year'))
  ];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>
  <style>
    body {
      font-family: sans-serif;
      padding: 30px;
      background: #f0f0f5;
    }
    h2 {
      text-align: center;
    }
    table {
      width: 90%;
      margin: auto;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: center;
    }
    th {
      background-color: #0073e6;
      color: white;
    }
    button {
      padding: 6px 12px;
      background: #ff7043;
      border: none;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h2>My Domains</h2>
  <table>
    <tr>
      <th>Domain</th>
      <th>Expiration Date</th>
      <th>Actions</th>
    </tr>
    <?php foreach ($_SESSION['domains'] as $d): ?>
      <tr>
        <td><?= htmlspecialchars($d['name']) ?></td>
        <td><?= $d['expires'] ?></td>
        <td>
          <button onclick="alert('Renewed!')">Renew</button>
          <button onclick="alert('Transfer feature coming soon')">Transfer</button>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
