function validateForm() {

    console.log("Version 2 loaded");
    let hasErr = false;
    const name = document.getElementById("name").value.trim();
    const age = document.getElementById("age").value;
    const email = document.getElementById("email").value.trim();
    const pass = document.getElementById("pass").value;
    const conPass = document.getElementById("conPass").value;
    const maleRB = document.getElementById("male");
    const femaleRB = document.getElementById("female");
    const cricketCB = document.getElementById("cricket");
    const footballCB = document.getElementById("football");
    const country = document.getElementById("country").value;
    const proPic = document.getElementById("proPic");
    let fabSports = "";
    let gender = "";



    const nameErr = document.getElementById("nameErr");
    const ageErr = document.getElementById("ageErr");
    const emailErr = document.getElementById("emailErr");
    const passErr = document.getElementById("passErr");
    const conPassErr = document.getElementById("conPassErr");
    const genderErr = document.getElementById("genderErr");
    const fabSportsErr = document.getElementById("fabSportsErr");
    const countryErr = document.getElementById("countryErr");
    const proPicErr = document.getElementById("proPicErr");

    nameErr.innerHTML = "";
    ageErr.innerHTML = "";
    emailErr.innerHTML = "";
    passErr.innerHTML = "";
    conPassErr.innerHTML = "";
    genderErr.innerHTML = "";
    fabSportsErr.innerHTML = "";
    countryErr.innerHTML = "";
    proPicErr.innerHTML = "";


    if (name === "") {
        nameErr.innerHTML = "name cannot be empty";
        hasErr = true;
    }


    if (name.length < 3) {
        nameErr.innerHTML = "name must be grater than 3 char";
        hasErr = true;
    }

    let nameRegex = /^[a-zA-Z]+([a-zA-Z]+)+$/;

    if (!nameRegex.test(name)) {
        nameErr.innerHTML = "name can only contain letters";
        hasErr = true;
    }

    if (age == "") {
        ageErr.innerHTML = "age cannot be empty";
        hasErr = true;
    }

    else {
        if (age < 18) {
            ageErr.innerHTML = "age must be greater than 18";
            hasErr = true;
        }
    }

    let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (email === "") {
        emailErr.innerHTML = "email cannot be empty";
        hasErr = true;
    }

    else {
        if (!emailRegex.test(email)) {
            emailErr.innerHTML = "invalid email format";
            hasErr = true;
        }

    }

    let passPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (pass === "") {
        passErr.innerHTML = "password cannot be empty";
        hasErr = true;
    }

    else {
        if (!passPattern.test(pass)) {
            passErr.innerHTML = "password must be atlest 8 char long, should contain at least one small and one cap letter and one number and one special char";
            hasErr = true;
        }
    }

    if (conPass !== pass) {
        conPassErr.innerHTML = "Confirm Pass should match with pass";
        hasErr = true;

    }

    if (!maleRB.checked && !femaleRB.checked) {
        genderErr.innerHTML = "Gender must be selected";
        hasErr = true;
    }

    else {
        if (maleRB.checked) {
            gender = maleRB.value;
        }
        else {
            gender = femaleRB.value;
        }


        console.log(gender);
    }

    if (!cricketCB.checked && !footballCB.checked) {
        fabSportsErr.innerHTML = "Fab Sports must be selected";
        hasErr = true;
    }

    else {
        if (cricketCB.checked) {
            fabSports += cricketCB.value;
        }
        if (footballCB.checked) {
            fabSports += " " + footballCB.value;
        }

        console.log(fabSports);
    }

    if (country === "") {
        countryErr.innerHTML = "country must be selected";
        hasErr = true;
    }


    if (proPic.files.length == 0) {
        proPicErr.innerHTML = "file must be selected";
        hasErr = true;
    }
    else {
        let file = proPic.files[0];
        let fileSize = file.size;
        let fileType = file.type;
        let allowedType = ["image/jpeg", "image/png", "application/pdf"];
        if (fileSize > 2 * 1024 * 1024) {
            proPicErr.innerHTML = "file size must be less than 2 mb";
            hasErr = true;
        }

        if (!allowedType.includes(fileType)) {
            proPicErr.innerHTML = "only image and pdf allowed";
            hasErr = true;
        }

    }








    if (!hasErr) {
        alert(name + " " + age + " " + email + " " + pass + " " + gender + " " + fabSports + " " + proPic.files[0].name);
        return true;
    }

    else {
        return false;
    }


}