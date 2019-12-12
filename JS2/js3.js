function addErrorClass(elementId) {
    var firstName = document.getElementById('first-name');
    var lastName = document.getElementById('last-name');
    var address = document.getElementById('address');

}

function addErrorClass(elementId) {
    var element = document.getElementById(elementId);
    element.className = 'error-input';
    
}

function addErrorClassToAllInput() {
    addErrorClass('first-name');
    addErrorClass('last-name');
    addErrorClass('address');

}




addErrorClassToAllInput();

