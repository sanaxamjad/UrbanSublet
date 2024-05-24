// JavaScript function to handle category filtering
function filterByCategory() {
    var category = document.getElementById("category-filter").value;
    var listings = document.querySelectorAll(".listing");

    listings.forEach(function (listing) {
        if (category === "all" || listing.dataset.category === category) {
            listing.style.display = "block";
        } else {
            listing.style.display = "none";
        }
    });
}

// Event listener for category filter change
document.getElementById("category-filter").addEventListener("change", filterByCategory);
