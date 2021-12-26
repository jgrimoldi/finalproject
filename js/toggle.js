var run = {
    types: ["100m lisos", "400m lisos", "110m vallas", "1500m lisos"]
};
var throws = {
    types: ["De peso", "De disco", "De jabalina"]
};
var jump = {
    types: ["De longitud", "De altura", "Con pértiga"]
};

const radios = document.querySelectorAll(".participants-radio");
const tests = document.getElementById('tests');

radios.forEach(radio => {
    radio.addEventListener("click", function (event) {
        let options = "";
        switch (event.target.value) {
            case 'Carrera':
                for (let i = 0; i < run.types.length; i++) {
                    options += `<label class="label-test" for="test-${i + 1}"><input class="test" type="radio" name="test" id="test-${i + 1}" checked>${run.types[i]}</label>`;
                }
                tests.innerHTML = options;
                break;
            case 'Lanzamiento':
                for (let i = 0; i < throws.types.length; i++) {
                    options += `<label class="label-test" for="test-${i + 1}"><input class="test" type="radio" name="test" id="test-${i + 1}" checked>${throws.types[i]}</label>`;
                }
                tests.innerHTML = options;
                break;
            case 'Salto':
                for (let i = 0; i < jump.types.length; i++) {
                    options += `<label class="label-test" for="test-${i + 1}"><input class="test" type="radio" name="test" id="test-${i + 1}" checked>${jump.types[i]}</label>`;
                }
                tests.innerHTML = options;
                break;
            default:
                options += `<label class="label-test" for="test-1"><input class="test" type="hidden" name="test" id="test-1" checked></label>`
                tests.innerHTML = options;
                break;
        }
    })
});