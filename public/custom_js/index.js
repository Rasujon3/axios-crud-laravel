function AddStudent() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var dept = document.getElementById('dept').value;
    var url = "/OnInsert";
    var data = {
        name:name,
        email:email,
        dept:dept
    }
    axios.post(url,data)
    .then(function (response) {
        // handle success
        // console.log(response.data);
        if (response.status == 200) {
            OnShow();
        }
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
}

window.addEventListener('load',()=>{
    var url = "/OnSelect";

    axios.get(url)
    .then(function (response) {
        // handle success
        document.getElementById("output").innerHTML = response.data;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
});

function OnShow() {
    var url = "/OnSelect";

    axios.get(url)
    .then(function (response) {
        // handle success
        document.getElementById("output").innerHTML = response.data;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
}

function DeleteData(id) {
    var url = "/delete/"+id;
    axios.get(url)
    .then(function (response) {
        // handle success
        // console.log(response.status);
        if (response.status == 200) {
            OnShow();
        }
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
}

function EditData(id) {
    var hiddenId = $("#hiddenId").val(id);
    $("#EditModal").modal("show");
    var url = "/edit/"+id;
    axios.get(url)
    .then(function (response) {
        // handle success
        var myData = response.data;
        $("#name1").val(myData.name);
        $("#email1").val(myData.email);
        $("#dept1").val(myData.dept);
    })
    .catch(function (error) {
        // handle error
    })
}

function update() {
    var hiddenId = $("#hiddenId").val();
    var name = document.getElementById('name1').value;
    var email = document.getElementById('email1').value;
    var dept = document.getElementById('dept1').value;
    var url = "/update/"+hiddenId;
    var data = {
        name:name,
        email:email,
        dept:dept
    }
    axios.post(url,data)
    .then(function (response) {
        // handle success
        console.log(response.status);
        // if (response.status == 201) {
            OnShow();
        // }
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
}
