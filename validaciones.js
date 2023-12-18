// validaciones.js
function validarEntradaConversion(valor) {
    let expresionRegular = /^\d+(\.\d{1,10})?$/;
    const expr = new RegExp(expresionRegular);
    let resultado = expr.test(valor);
    
    // Obtén el elemento input
    let inputElement = document.querySelector('input[name="cantidad"]');
    
    if (!resultado) {
        // Si la validación falla, agrega la clase 'is-invalid' y quita 'is-valid'
        inputElement.classList.add('is-invalid');
        inputElement.classList.remove('is-valid');
    } else {
        // Si la validación es exitosa, agrega la clase 'is-valid' y quita 'is-invalid'
        inputElement.classList.remove('is-invalid');
        inputElement.classList.add('is-valid');
    }
    
    return resultado;
}

