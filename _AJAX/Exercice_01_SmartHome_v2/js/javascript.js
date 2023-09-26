window.addEventListener("load", () => {
    updateLights();
})

const updateLights = () => {

    fetch("ajax.php")
    .then(response => response.json())
    .then(data => {
        //console.log(data);
        data.forEach(light => {
            if (light.status == 1) {
                document.getElementById(light.name).src = "img/light-on.png"  
            } else {
                document.getElementById(light.name).src = "img/light-off.png"  
            }
        });
    })

    setTimeout(updateLights, 5000)
} 