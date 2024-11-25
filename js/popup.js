// Open the popup
function openPopup(imgSrc) {
    const popup = document.getElementById("image-popup");
    const popupImg = document.getElementById("popup-img");
    popup.style.display = "flex"; // Use flex for centering
    popupImg.src = imgSrc;
}

// Close the popup
function closePopup() {
    const popup = document.getElementById("image-popup");
    popup.style.display = "none";
}

// Add click event to all images
document.querySelectorAll(".popup-image").forEach((image) => {
    image.addEventListener("click", function () {
        openPopup(this.src);
    });
});
