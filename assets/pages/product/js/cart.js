const binding = document.querySelectorAll(".text__item-name");
const dropdown= document.querySelectorAll(".dropdown-item");
let input =  document.querySelector(".binding__hidden");
for (let index = 0; index < dropdown.length; index++) {
    dropdown[index].addEventListener("click", ()=>{
        // console.log(binding[index-1].textContent);
        input.value=binding[index-1].textContent.replace( /\s/g, "")
    })
}
