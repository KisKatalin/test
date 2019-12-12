function alertFirstNameValues() {
    console.log(firstNameEl.value);
    console.log(firstNameEl.className);
    
}

function alertLastNameValues() {
    console.log(lastNameEl.value);
    console.log(lastNameEl.className);

}

function alertAddressValues() {
    console.log(addressEl.value);
    console.log(addressEl.className);

}

function alertHobbiesValues() {
    console.log(hobbiesEl.value);
    console.log(hobbiesEl.className);

}
function alertValues(elementParameter) {
    //console.log(elementParameter.value);
    //console.log(elementParameter.className);
   // window.alert('kkkkkk');
    //window.alert('llllll');
}

function getEl(id) {
    console.log('somebody wants find element by id');
    var el = document.getElementById(id);
    return el;
    
}

var firstNameId = 'first-name';
var firstNameEl = getEl(firstNameId);
alertValues(firstNameEl);
//alertFirstNameValues();


var lastNameId = 'last-name';
var lastNameEl = getEl(lastNameId);
alertValues(lastNameEl);
//alertLastNameValues();

var addressId = 'address';
var addressEl = getEl(addressId);
alertValues(addressEl);
//alertAddressValues();

var hobbiesId = 'hobbies';
var hobbiesEl = getEl(hobbiesId);
alertValues(hobbiesEl);
//alertHobbiesValues();

var citiesId = 'cities';
var citiesEl = getEl(citiesId);
alertValues(citiesEl);





var avatarWrapperId = 'avatar-wrapper';
var avatarWrapperEl = document.getElementById(avatarWrapperId);
var avatarId = 'avatar';
var avatarEl = document.getElementById(avatarId);



firstNameEl.value = 'Roma';
console.log(firstNameEl.value);
console.log(firstNameEl.className);

firstNameEl.className = 'new-class';
console.log(firstNameEl.value);
console.log(firstNameEl.className);


lastNameEl.className = 'last-name-input default-input error-input';
console.log(lastNameEl.value);
console.log(lastNameEl.className);

//alertValue();


lastNameEl.title = 'Wrong last name';
console.log(lastNameEl.value);
console.log(lastNameEl.className);

//alertValue();


avatarEl.src = 'IMG_4367.JPG';
//alertValue();


avatarEl.title = 'I am avatar';
//alertValue();


citiesEl.value = 'Minsk';
//alertValue();


hobbiesEl.value = 'i have not interests';



firstNameEl.value = 'Roma';
lastNameEl.value = 'Kis';
avatarWrapperEl.innerHTML = '<ul id=\'list\'><li>1</li><li>2</li><li>3</li></ul>';
var listId = 'list';
var numberList = document.getElementById(listId);

//console.log(numberList.innerHTML);
