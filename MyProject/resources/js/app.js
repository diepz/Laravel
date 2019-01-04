

document.getElementById("select-city").onchange = function () {

    ChooseCity()

};

function ChooseCity() {

    var time_zone = document.getElementById("select-city");

    window.location.href = time_zone.value;

}

