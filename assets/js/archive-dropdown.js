/******************************* 
// ARCHIVE DROPDOWN
********************************/
const archive = document.querySelector(".archive-button");
const projects = document.querySelector(".archive-projects");
archive.addEventListener("click", function() {
  if (projects.style.maxHeight) {
    projects.style.maxHeight = null;
    archive.classList.remove("archive-active");
  } else {
    projects.style.maxHeight = projects.scrollHeight + "px";
    console.log(projects.style.maxHeight);
    archive.classList.add("archive-active");
  }
});
/******************************* 
// ARCHIVE DROPDOWN ENDS
********************************/
