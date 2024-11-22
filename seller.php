<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Information Form</title>
    <link rel="stylesheet" href="seller.css">
</head>
<body>
    <header>
        <h1>Shop Information Form</h1>
    </header>
    <main>
        <form id="shop-form" action="verification.php" method="POST" enctype="multipart/form-data">
            <label for="shop-name">Shop Name:</label>
            <input type="text" id="shop-name" name="shop-name" required>

            <label for="pickup-address">Address:</label>
            <input type="text" id="pickup-address" name="pickup-address" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <h2>Business Registration</h2>
            <label for="identity-proof">Identity Proof (Upload):</label>
            <input type="file" id="identity-proof" name="identity-proof" accept="image/*" required>

            <label for="business-license">Business License/Permit (Upload):</label>
            <input type="file" id="business-license" name="business-license" accept="image/*" required>

            <label for="sales-tax-registration">Sales Tax Registration (Upload):</label>
            <input type="file" id="sales-tax-registration" name="sales-tax-registration" accept="image/*" required>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </main>
</body>
</html>
