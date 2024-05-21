var btn_student = document.getElementById("btn_student");
var btn_instructor = document.getElementById("btn_instructor");
var btn_attendance_log = document.getElementById("btn_attendance_log");
var logos = document.getElementById("logos");


var college_student = document.getElementById("college_student");
var instructor_form = document.getElementById("instructor");
var attendance_list = document.getElementById("attendance_list");
var logos = document.getElementById("logos");

logos.addEventListener("click", () => {
    logos.style.display = "block";
    college_student.style.display = "none";
    instructor_form.style.display = "none";
    attendance_list.style.display = "none";
});
btn_student.addEventListener("click", () => {
    logos.style.display = "none";
    college_student.style.display = "block";
    instructor_form.style.display = "none";
    attendance_list.style.display = "none";
});
btn_instructor.addEventListener("click", () => {
    logos.style.display = "none";
    college_student.style.display = "none";
    instructor_form.style.display = "block";
    attendance_list.style.display = "none";
});
btn_attendance_log.addEventListener("click", () => {
    logos.style.display = "none";
    college_student.style.display = "none";
    instructor_form.style.display = "none";
    attendance_list.style.display = "block";
});
// signInButton.addEventListener("click", () => {
//     student_form.style.display = "none";
//     instructor_form.style.display = "none";
//     btn_role.style.display = "flex";
// });