window.addEventListener("load", () => {

    document.querySelector("#field").onkeyup = function(e) {
        if(e.which == 13) {
            updateElements();
        }

    }
})

const updateElements = () => {
    let inputNode = document.getElementById("field");
    let val = inputNode.value;

    let formData = new FormData();
    formData.append("txt", val);

    fetch("ajax-process.php", {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("match-picture").innerHTML = data.picture; //forgot how put picture
        document.getElementById("match-name").innerText = data.name;
    })
}