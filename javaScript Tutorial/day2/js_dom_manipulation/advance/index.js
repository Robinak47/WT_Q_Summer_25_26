
const btn = document.getElementById("btn");
btn.addEventListener("click", () => {

    const mark = document.getElementById("mark").value;
    const name = document.getElementById("name").value;

    const studentTable = document.getElementById("studentTable");
    const row = document.createElement("tr");

    const nameTd = document.createElement("td");
    nameTd.textContent = name;
    row.append(nameTd);
    const markTd = document.createElement("td");
    markTd.textContent = mark;
    row.appendChild(markTd);



    markInt = parseInt(mark);

    if (markInt > 49) {
        row.style.background = "green";

    }

    else {
        row.style.background = "red";
    }

    studentTable.appendChild(row);


})


const field = document.getElementById("in");
field.addEventListener("keydown", (event) => {

    if (event.key.match(/[\!\@\#\$\%\^\&\*\)\(\+\=\.\<\>\{\}\[\]\:\;\'\"\|\~\`\_\-]/g)) {

        field.innerText = ""
        alert("forbidden key");


    }

})