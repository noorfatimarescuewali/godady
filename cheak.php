<!-- check.php -->
<?php
session_start();
$domain = $_GET['domain'] ?? '';
$available = (strtolower($domain) !== 'taken.com'); // mock logic
?>
<!DOCTYPE html>
<html>
<head>
  <title>Check Domain - <?= htmlspecialchars($domain) ?></title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #fdfdfd;
      text-align: center;
      padding: 50px;
    }
    .box {
      padding: 30px;
      background: #ffffff;
      margin: auto;
      width: 50%;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      border-radius: 10px;
    }
    .available {
      color: green;
      font-size: 24px;
      font-weight: bold;
    }
    .unavailable {
      color: red;
      font-size: 24px;
      font-weight: bold;
    }
    button {
      margin-top: 20px;
      padding: 10px 25px;
      background: #28a745;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 18px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="box">
    <?php if ($available): ?>
      <div class="available"><?= htmlspecialchars($domain) ?> is available!</div>
      <button onclick="addToCart()">Add to Cart</button>
    <?php else: ?>
      <div class="unavailable">Sorry, <?= htmlspecialchars($domain) ?> is already taken.</div>
    <?php endif; ?>
  </div>

  <script>
    function addToCart() {
      window.location.href = 'dashboard.php?add=<?= urlencode($domain) ?>';
    }
  </script>
</body>
</html>
