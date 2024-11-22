<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="account.css">
</head>
<body>
    <header>
        <div class="header-content">
            <h1 id="displayName">My Profile</h1>
            <p id="displayPosition">Julius</p>
            <button class="edit-profile-button" onclick="editProfile()">Edit Profile</button>
            <a href="terms_condition.php"><button class="Log-in as Seller">Login as Seller</button></a>
        </div>
    </header>


        <section class="profile-section">
            <h2>Contact Information</h2>
            <p>Email: <span id="displayEmail">Julius@gmail.com</span></p>
            <p>Phone: <span id="displayPhone">+123 456 7890</span></p>
            <p>Gender: <span id="displayGender">Male</span></p>
            <a href="changepass.php">Change password?</a>
        </section>

        <section class="profile-section">
            <a href="homepage.php">
                <button class="edit-profile-button" onclick="back()">Back</button>
            </a>
        </section>
    </div>

    <!-- Edit Form (Hidden by Default) -->
    <div id="edit-form" style="display: none;">
        <section class="profile-section">
            <h2>Edit Profile</h2>
            <form action="home.html" id="profileForm">
                <label for="name">Name:</label>
                <input type="text" id="name" value="John Doe">
                
                <label for="position">Position:</label>
                <input type="text" id="position" value="Graphic Designer at XYZ Corp.">

                <label for="about">About Me:</label>
                <textarea id="about">Creative and passionate graphic designer with over 3 years of experience in the esports industry.</textarea>
                
                <label for="email">Email:</label>
                <input type="email" id="email" value="johndoe@example.com">

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" value="+123 456 7890">
                
                <label for="location">Location:</label>
                <input type="text" id="location" value="New York, USA">
                
                <button type="button" onclick="saveProfile()">Save</button>
                <button type="button" onclick="cancelEdit()">Cancel</button>
            </form>
        </section>
    </div>

    <script src="setting.js"></script>
</body>
</html>