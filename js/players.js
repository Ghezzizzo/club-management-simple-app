let person;
let tableContainer = document.querySelector("#table-conatiner");

generateTable();
function generateTable() {
  fetch("./php/select.php", {
    method: "POST",
    header: {
      "Content-type": "application/json",
    },
  })
    .then((response) => response.json())
    .then((data) => {
      person = data;
      console.log("Dati ricevuti: ", data);
      let table = `
              <table class="table table-dark table-striped">
                  <thead>
                      <tr>
                          <th scope="col">id</th>
                          <th scope="col">nome</th>
                          <th scope="col">cognome</th>
                          <th scope="col">età</th>
                          <th scope="col">squadra</th>
                          <td></td>
                      </tr>
                  </thead>
                  <tbody>
                      ${generateRows(data)}
                  </tbody>
              </table>
          `;

      tableContainer.insertAdjacentHTML("beforeend", table);
      let modifyBtn = document.querySelectorAll(".modify-person");
      let deleteBtn = document.querySelectorAll(".delete-person");

      for (let i = 0; i < modifyBtn.length; i++) {
        modifyBtn[i].addEventListener("click", showUpdateForm);
      }
      for (let i = 0; i < deleteBtn.length; i++) {
        deleteBtn[i].addEventListener("click", deletePerson);
      }
    })
    .catch((error) => {
      console.error("Errore: ", error);
    });
}

function generateRows(people) {
  let rows = "";
  people.forEach((person) => {
    let row = `
        <tr>
            <th scope="row">${person.id}</th>
            <td>${person.name}</td>
            <td>${person.surname}</td>
            <td>${person.age}</td>
            <td>${person.team}</td>
            <td>
                <button class="modify-person" data-val="${person.id}">modifica</button>
                <button class="delete-person" data-val="${person.id}">elimina</button>
            </td>
        </tr>
    `;

    rows += row;
  });
  return rows;
}

const newPerson = document.querySelector("#new-person");
const insertBtn = document.querySelector("#insert-btn");
const newPersonForm = document.querySelector("#new-person-form");
const updatePersonForm = document.querySelector("#update-person-form");
newPerson.addEventListener("click", showForm);
insertBtn.addEventListener("click", insertPerson);

function showForm() {
  if (newPersonForm.style.display === "none") {
    newPersonForm.style.display = "block";
  } else {
    newPersonForm.style.display = "none";
  }
}

function showUpdateForm(e) {
  if (updatePersonForm.style.display === "none") {
    let id = e.target.getAttribute("data-val");
    const nameForm = document.querySelector("#name");
    const surnameForm = document.querySelector("#surname");
    const ageForm = document.querySelector("#age");
    const teamForm = document.querySelector("#team");

    for (let i = 0; i < person.length; i++) {
      if (person[i].id === id) {
        console.log(person[i]);
        nameForm.value = person[i].name;
        surnameForm.value = person[i].surname;
        ageForm.value = person[i].age;
        teamForm.value = person[i].team;
      }
    }
    updatePersonForm.style.display = "block";
  } else {
    updatePersonForm.style.display = "none";
  }
}

function showFormUpdate(e) {}

function insertPerson() {
  console.log("nuovo atleta inserito");
  const nameForm = document.querySelector("#name");
  const surnameForm = document.querySelector("#surname");
  const ageForm = document.querySelector("#age");
  const teamForm = document.querySelector("#team");
  const formData = new FormData();
  formData.append("name", nameForm.value),
    formData.append("surname", surnameForm.value),
    formData.append("age", ageForm.value),
    formData.append("team", teamForm.value),
    fetch("./php/insert.php", {
      method: "POST",
      header: {
        "Content-type": "application/json",
      },
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        if (data.response === 1) {
          showResponse(data.message);
          recreateTable();
        }
      })
      .catch((error) => {
        console.error("Errore: ", error);
      });

  showForm();
}
let classes = result.classList;
function showResponse(msg) {
  classes.add("alert-success");

  classes.replace("invisible", "visible");
  result.innerHTML = msg;
  window.setTimeout(() => {
    classes.replace("visible", "invisible");
  }, 5000);
}

function modifyPerson(e) {
  //   const nameForm = document.querySelector("#name");
  //   const surnameForm = document.querySelector("#surname");
  //   const ageForm = document.querySelector("#age");
  //   const teamForm = document.querySelector("#team");
  const formData = new FormData();
  formData.append("id", id),
    fetch("./php/update.php", {
      method: "POST",
      header: {
        "Content-type": "application/json",
      },
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        if (data.response === 1) {
          showResponse(data.message);
          recreateTable();
        }
      })
      .catch((error) => {
        console.error("Errore: ", error);
      });

  // showForm(updatePersonForm);
}
function deletePerson(e) {
  console.log("elimino persona: ", e.target.getAttribute("data-val"));

  let id = e.target.getAttribute("data-val");

  const formData = new FormData();
  formData.append("id", id),
    fetch("./php/delete.php", {
      method: "POST",
      header: {
        "Content-type": "application/json",
      },
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        if (data.response === 1) {
          showResponse(data.message);
          recreateTable();
        }
      })
      .catch((error) => {
        console.error("Errore: ", error);
      });
}

function recreateTable() {
  let table = document.querySelector("table");
  tableContainer.removeChild(table);
  generateTable();
}
