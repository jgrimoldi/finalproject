var run = {
    types: ["100m lisos", "400m lisos", "110m vallas", "1500m lisos"]
};
var throws = {
    types: ["De peso", "De disco", "De jabalina"]
};
var jump = {
    types: ["De longitud", "De altura", "Con pértiga"]
};

const discipline = document.getElementById('discipline');
const typeOf = document.getElementById('typeOf');

discipline.onchange = function () {
    let options = "";
    switch (discipline.value) {
        case 'Carrera':
            run.types.forEach(type => {
                options += `<option value="${type}">${type}</option>`;
            });
            typeOf.innerHTML = options;
            break;
        case 'Lanzamiento':
            throws.types.forEach(type => {
                options += `<option value="${type}">${type}</option>`;
            });
            typeOf.innerHTML = options;
            break;
        case 'Salto':
            jump.types.forEach(type => {
                options += `<option value="${type}">${type}</option>`;
            });
            typeOf.innerHTML = options;
            break;
        default:
            options += `<option disabled>Disabled</option>`
            typeOf.innerHTML = options;
            break;
    }
}


