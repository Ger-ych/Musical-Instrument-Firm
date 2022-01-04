let elements = document.querySelectorAll('#phone-input');
let maskOptions = {
    mask: '+7(000)000-00-00',
    lazy: false
} 
for (let e = 0; e < elements.length; e++) {
    const element = elements[e];
    let mask = new IMask(element, maskOptions);   
}
