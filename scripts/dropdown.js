function toggleDropdown() {
  var dropdownContent = document.getElementById("dropdownContent");
  dropdownContent.style.display =
    dropdownContent.style.display === "block" ? "none" : "block";
}

function selectItem(item) {
  var dropdownBtn = document.querySelector(".dropdown-btn");
  dropdownBtn.textContent = item.textContent;
  var dropdownContent = document.getElementById("dropdownContent");
  dropdownContent.style.display = "none";
}

function toggleDropdownSection() {
  var dropdownContent = document.getElementById("dropdownContentSection");
  dropdownContent.style.display =
    dropdownContent.style.display === "block" ? "none" : "block";
}

function toggleDropdownCourse() {
  var dropdownContent = document.getElementById("dropdownContentCourse");
  dropdownContent.style.display =
    dropdownContent.style.display === "block" ? "none" : "block";
}

function selectItemSec(item) {
  var dropdownBtn = document.querySelector(".dropdown-btn-section");
  dropdownBtn.textContent = item.textContent;
  var dropdownContent = document.getElementById("dropdownContentSection");
  dropdownContent.style.display = "none";
}
