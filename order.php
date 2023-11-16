<!DOCTYPE html>
<html>
<head>
    <title>Ice Cream Online Order</title>
    <style>
        body {
            background-color: #000000;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .form-group input[type="submit"] {
            background-color: #ff4d4d;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
          font-weight:700;
          font-size:24px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #ff1a1a;
        }
      .section-3-button{ padding:20px 65px;
  font-size:24px;
  font-weight:700;
  background-color:white;
  border:none;
  border-radius:40px;
}
    </style>
</head>
<body>

    <div class="container"><h2 style="margin:20px 20px 100px 20px; font-size:40px; color:#9EEB47;" >Ice Cream Online Order</h2>
        <h2></h2>
        <?php
        // Check if error message is present in the URL
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            echo '<div class="error">' . $error . '</div>';
        }
        ?>
        <form method="POST" action="process_order.php">
            <div class="form-group">
                <label for="flavor">Flavor:</label>
                <select name="flavor" id="flavor">
                    <option value="vanilla">Vanilla</option>
                    <option value="chocolate">Chocolate</option>
                    <option value="strawberry">Strawberry</option>
                   <option value="strawberry">Mint chocolate chip </option>
                </select>
            </div>
           <div class="form-group">
                <label for="flavor">Cost:</label>
                <select name="cost" id="cost">
                    <option value="vanilla">Large:Rs.200</option>
                    <option value="chocolate">Medium:Rs.150</option>
                    <option value="strawberry">Small:Rs.100</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cost">Name</label>
                <input type="text" name="firstname" id="cost" placeholder="Enter your name"> <label for="cost">
              <br>
              Contact number</label>
                <input type="text" name="phone" id="cost" placeholder="Enter your phone number"><br>
                <label for="cost">Address</label>
                <input type="text" name="Address" id="cost" placeholder="Enter your address"> <label for="cost">
              <br>
              <label for="cost">Pin Code</label>
                <input type="text" name="PinCode" id="cost" placeholder="PinCode"> <label for="cost">
              <br>
            </div>
            <div class="form-group">
                <input  type="submit" value="Place Order">
            </div>
           
        </form>
    </div>

</body>
</html>