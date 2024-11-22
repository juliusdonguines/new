<header>
            <h1>Add Product</h1>
            <link rel="stylesheet" href="add_product.css">
        </header>
        <form id="product-form">
            <label for="product-title">Product Title:</label>
            <input type="text" id="product-title" required>

            <label for="product-description">Product Description:</label>
            <textarea id="product-description" rows="4" required></textarea>

            <label for="price">Price ($):</label>
            <input type="number" id="price" min="0" step="0.01" required>

            <label for="product-image">Product Image (Upload):</label>
            <input type="file" id="product-image" accept="image/*" required>

            <button type="submit">Submit</button>
        </form>
    </main>