var modal = document.getElementById("modal-container");
var modalImg = document.getElementById("img01").src;

function modalImage(image)
{
    document.getElementById("img01").src = image;
    modal.style.display = "block";
}

function closeModal()
{
    modal.style.display = "none";
}


