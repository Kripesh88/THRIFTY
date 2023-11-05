const likeIcon = document.getElementById("like-icon");

likeIcon.addEventListener("click", function () {
  likeIcon.style.color = "red"; // Change the color to red when clicked
});
let isLiked = false; // Initial state

likeIcon.addEventListener("click", function () {
  if (isLiked) {
    likeIcon.style.color = "#333"; // Change the color back to the initial color
  } else {
    likeIcon.style.color = "red"; // Change the color to the liked color
  }
  isLiked = !isLiked; // Toggle the state
});
