// Open the popup
function openPopup(imgSrc) {
    const popup = document.getElementById("image-popup");
    const popupImg = document.getElementById("popup-img");
    popup.style.display = "flex"; // Show popup
    popupImg.src = imgSrc; // Set the image source
}

// Close the popup
function closePopup() {
    const popup = document.getElementById("image-popup");
    popup.style.display = "none"; // Hide popup
}

// Ensure clicking outside the popup also closes it
document.getElementById("image-popup").addEventListener("click", function (e) {
    if (e.target === this) {
        closePopup();
    }
});
