// getting input objects
let elements = document.querySelectorAll('#phone-input');

// set mask options
let maskOptions = {
    mask: '+7(000)000-00-00',
    lazy: false
} 

// turning on input mask
for (let e = 0; e < elements.length; e++) {
    const element = elements[e];
    let mask = new IMask(element, maskOptions);   
}
