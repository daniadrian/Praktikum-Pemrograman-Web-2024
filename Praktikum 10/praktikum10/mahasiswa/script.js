let students = [];
let editIndex = -1;

function openForm() {
  document.getElementById("studentForm").style.display = "block";
  document.getElementById("form").reset();
  editIndex = -1;
}

function closeForm() {
  document.getElementById("studentForm").style.display = "none";
}

function saveStudent(event) {
  event.preventDefault();

  let firstName = document.getElementById("firstName").value;
  let lastName = document.getElementById("lastName").value;
  let age = document.getElementById("age").value;

  if (editIndex === -1) {
    students.push({ firstName, lastName, age });
  } else {
    students[editIndex] = { firstName, lastName, age };
  }

  renderStudents();
  closeForm();
}

function renderStudents() {
  let tbody = document.querySelector("#studentsTable tbody");
  tbody.innerHTML = "";

  students.forEach((student, index) => {
    let row = `<tr>
            <td>${index + 1}</td>
            <td>${student.firstName}</td>
            <td>${student.lastName}</td>
            <td>${student.age}</td>
            <td>
                <button class="btn show" onclick="showStudent(${index})">Show</button>
                <button class="btn edit" onclick="editStudent(${index})">Edit</button>
                <button class="btn delete" onclick="deleteStudent(${index})">Delete</button>
            </td>
        </tr>`;
    tbody.innerHTML += row;
  });
}

function showStudent(index) {
  let student = students[index];
  alert(
    `First Name: ${student.firstName}\nLast Name: ${student.lastName}\nAge: ${student.age}`
  );
}

function editStudent(index) {
  let student = students[index];
  document.getElementById("firstName").value = student.firstName;
  document.getElementById("lastName").value = student.lastName;
  document.getElementById("age").value = student.age;
  document.getElementById("studentForm").style.display = "block";
  editIndex = index;
}

function deleteStudent(index) {
  students.splice(index, 1);
  renderStudents();
}
