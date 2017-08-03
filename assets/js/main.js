// Function to calculate any inputed value
function calculate(){
    document.calc.output.value = eval(document.calc.output.value);
}

// Function to clear input field
function erase() {
    document.calc.output.value = '';
}

//  Function to replicate any number/character inputed
function entries(input) {
    document.calc.output.value+=input;
}