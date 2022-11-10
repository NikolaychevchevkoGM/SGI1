
const button = document.querySelector('.btn'),
    serialNumber = document.querySelector('.randomSerial');
const digits = "0123456789"
const alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"

let serial = []

button.addEventListener('click',()=>{
    serial = []
    
    for(let i = 0; i < 5; i++){
        let rand = Math.floor(Math.random() * digits.length);
        serial += digits[rand];
    }
    serialNumber.textContent = serial;
});
