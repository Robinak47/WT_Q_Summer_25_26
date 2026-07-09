
function changeStyle() {
    const div = document.getElementById("container");
    div.style.background = "red";
    div.style.height = "200px";
    div.style.width = "400px";
    div.style.border = "4px solid black";
    //div.style.display = "inline";

    const elements = document.getElementsByClassName("first-class-ele");
    console.log(elements);
    //console.log(div);

    const ele = document.getElementsByTagName("p");
    console.log(ele);


}

const btn = document.getElementById("btn");
btn.addEventListener("click", changeStyle);


const div2 = document.getElementById("container");
div2.addEventListener("mouseover", function () {

    div2.style.background = "green";
})

div2.addEventListener("mouseout", function () {

    div2.style.background = "white";
})


const body = document.body;
console.log(body);

const btn2 = document.getElementById("createElemet");
btn2.addEventListener("click", () => {

    const newDiv = document.createElement("div");
    newDiv.textContent = "Meow";
    newDiv.setAttribute("id", "div2");
    console.log(newDiv.getAttribute("id"));
    newDiv.classList.add("wtQ");
    newDiv.classList.add("Aiub");
    newDiv.classList.remove("Aiub");

    const image = document.createElement("img");
    image.setAttribute("src", "https://imgs.search.brave.com/Ph44W0e3hYl_LBTnDZzz_zitssvlScGh_3OQa-xkX54/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93MC5w/ZWFrcHguY29tL3dh/bGxwYXBlci80MDAv/NzAxL0hELXdhbGxw/YXBlci1hcHBsZS1p/bi1ibGFjay1hcHBs/ZS1ibGFjay1sb2dv/LXRodW1ibmFpbC5q/cGc")
    // body.append(newDiv, "this is bangladesh");
    newDiv.appendChild(image);
    body.appendChild(newDiv);

    const btn3 = document.getElementById("btn");
    //btn3.remove();

    body.removeChild(btn3);
})
