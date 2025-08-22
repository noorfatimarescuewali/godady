<!-- index.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>GoDaddy Clone - Home</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #f5f7fa, #c3cfe2);
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #111;
      color: white;
      padding: 15px;
      text-align: center;
      font-size: 24px;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    input[type="text"] {
      width: 80%;
      padding: 10px;
      font-size: 18px;
      border-radius: 10px;
      border: 1px solid #ccc;
    }
    button {
      padding: 10px 20px;
      background-color: #0073e6;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
    }
    .ext {
      margin-top: 15px;
      font-size: 18px;
    }
    .promo {
      margin-top: 20px;
      background: #e0f7fa;
      padding: 15px;
      border-radius: 10px;
      font-weight: bold;
      color: #00796b;
    }
  </style>
</head>
<body>
  <header>GoDaddy Clone</header>
  <div class="container">
    <form id="searchForm">
      <h2>Search Your Domain</h2>
      <input type="text" name="domain" id="domain" placeholder="Enter domain name..." required>
      <button type="submit">Search</button>
    </form>
    
    <div class="ext">
      Popular: .com | .net | .org | .pk | .info
    </div>
    <div class="promo">
      🔥 Limited Time Offer: .com only $9.99/year!
    </div>
  </div>

  <script>
    document.getElementById('searchForm').onsubmit = function(e) {
      e.preventDefault();
      const domain = document.getElementById('domain').value;
      if(domain.trim() !== '') {
        window.location.href = 'check.php?domain=' + encodeURIComponent(domain);
      }
    };
  </script>
</body>
</html>
