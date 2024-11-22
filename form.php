<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout Form</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="checkout-wrapper">
        <div class="checkout-form">
            <h2>CHECKOUT FORM</h2>
            <form id="checkoutForm" action="notif.php" method="post" onsubmit="return validateForm(event)">
                <label for="email">Email</label>
                <input type="email" id="email" required placeholder="Enter your email">
                
                <label for="recipientName">Recipient Name</label>
                <input type="text" id="recipientName" required placeholder="Enter recipient name">

                <label for="address">Address</label>
                <input type="text" id="address" required placeholder="Enter address">

                <label for="barangay">Barangay</label>
                <input type="text" id="barangay" required placeholder="Enter barangay">

                <div class="row">
                    <div>
                        <label for="city">City</label>
                        <input type="text" id="city" required placeholder="Enter city">
                    </div>
                    <div>
                        <label for="province">Province</label>
                        <input type="text" id="province" required placeholder="Enter province">
                    </div>
                </div>

                <div class="row">
                    <div>
                        <label for="month">Month</label>
                        <input type="text" id="month" required placeholder="MM" maxlength="2" pattern="\d{1,2}">
                    </div>
                    <div>
                        <label for="day">Day</label>
                        <input type="text" id="day" required placeholder="DD" maxlength="2" pattern="\d{1,2}">
                    </div>
                    <div>
                        <label for="year">Year</label>
                        <input type="text" id="year" required placeholder="YYYY" maxlength="4" pattern="\d{4}">
                    </div>
                </div>

                <label for="phoneNumber">Recipient Phone Number</label>
                <input type="tel" id="phoneNumber" required placeholder="Enter phone number" pattern="^\d{10,15}$">

                <label for="instructions">Sender Delivery Instructions</label>
                <input type="text" id="instructions" placeholder="Enter any special instructions">

                <div class="terms">
                    <input type="checkbox" id="agree" onchange="togglePlaceOrderButton()">
                    <label for="agree">I agree to the terms and conditions.</label>
                </div>
                
                <!-- Buttons -->
                <div class="buttons">
                    <a href="cart.php" class="button">Back</a>
                    <button type="submit" id="placeOrderButton" disabled>Place Order</button>
                </div>
            </form>
        </div>
        
        <div class="order-summary">
    <img src="https://via.placeholder.com/150" alt="Product Image">
    <div class="summary-details">
        <p>Product Name</p>
        <p>Subtotal: <span>P 0</span></p>
        <p>Shipping: <span>P 50.00</span></p>
        <p>Total: <span>P 0</span></p>
    </div>
</div>


    <script>
        function togglePlaceOrderButton() {
            const checkbox = document.getElementById('agree');
            const placeOrderButton = document.getElementById('placeOrderButton');
            placeOrderButton.disabled = !checkbox.checked;
        }

        function validateForm(event) {
            // Validate date fields for valid month, day, and year
            const month = parseInt(document.getElementById('month').value, 10);
            const day = parseInt(document.getElementById('day').value, 10);
            const year = parseInt(document.getElementById('year').value, 10);

            if (month < 1 || month > 12) {
                alert('Please enter a valid month (1-12).');
                return false;
            }

            if (day < 1 || day > 31) {
                alert('Please enter a valid day (1-31).');
                return false;
            }

            if (year < 1900 || year > new Date().getFullYear()) {
                alert('Please enter a valid year.');
                return false;
            }

            // If all validations pass, allow form submission
            return true;
        }

        
    // On page load, check if there is a product stored for checkout
    document.addEventListener('DOMContentLoaded', () => {
        const product = JSON.parse(localStorage.getItem('checkoutProduct'));

        if (product) {
            // Populate the order summary with the product details
            document.querySelector('.order-summary p:first-child').textContent = product.name;
            document.querySelector('.order-summary p:nth-child(2) span').textContent = `P ${product.price.toFixed(2)}`;
            document.querySelector('.order-summary p:nth-child(4) span').textContent = `P ${(product.price + 50).toFixed(2)}`; // Assuming a fixed shipping cost of 50
        }
    });
</script>

    </script>
</body>
</html>
