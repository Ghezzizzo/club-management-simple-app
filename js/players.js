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
      let rows = generateRows(data);
      let table = document.createElement("div");
      table.classList.add("tab");
      tableContainer.appendChild(table);
      table.insertAdjacentHTML("beforeend", rows);

      let deleteBtn = document.querySelectorAll(".delete-person");
      let cards = document.querySelectorAll(".card");

      for (let i = 0; i < cards.length; i++) {
        cards[i].addEventListener("click", statistcs);
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
    let row = `<div class="col-md-4 mt-4">
    		    <div data-val="${person.id}" class="card profile-card">
    		        <div class="card-img-block">
    		            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">${person.name} ${person.surname}</h5>
                    <p class="card-text">${person.team}</p>
                    <button class="delete-person" data-val="${person.id}">elimina</button>
                    
                  </div>
                </div>
 
    		</div>

    `;

    rows += row;
  });
  return rows;
}

const newPerson = document.querySelector("#new-person"); //fotm btn
const insertBtn = document.querySelector("#insert-btn"); // insert btn
const newPersonForm = document.querySelector("#new-person-form");

newPerson.addEventListener("click", showForm);
insertBtn.addEventListener("click", insertPerson);

function statistcs(e) {
  console.log("statistics");
  let id = e.target.getAttribute("data-val");
}

function showForm() {
  if (newPersonForm.style.display === "none") {
    newPersonForm.style.display = "block";
  } else {
    newPersonForm.style.display = "none";
  }
}

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
  let table = document.querySelector(".tab");
  tableContainer.removeChild(table);
  generateTable();
  console.log("entrato");
}
