function showImage(index) {
    var images = ["image1.jpg", "image2.jpg"]; // List of image paths
    var previewImage = document.getElementById("previewImage");
    previewImage.src = images[index];
}
