const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

var btn_student = document.getElementById("student");
var btn_instructor = document.getElementById("instructor");
var btn_role = document.getElementById("btn");
var student_form = document.getElementById("student_form");
var instructor_form = document.getElementById("instructor_form");
btn_student.addEventListener("click", () => {
    student_form.style.display = "block";
    instructor_form.style.display = "none";
    btn_role.style.display = "none";
});
btn_instructor.addEventListener("click", () => {
    student_form.style.display = "none";
    instructor_form.style.display = "block";
    btn_role.style.display = "none";
});
signInButton.addEventListener("click", () => {
    student_form.style.display = "none";
    instructor_form.style.display = "none";
    btn_role.style.display = "flex";
});
