(function addSearchIcon() {
  const searchButton = Array.from(
    document.getElementsByClassName("wp-element-button")
  )[0];

  if (searchButton) {
    searchButton.innerHTML =
      "<i class='bi bi-search' style='color: white; position:absolute; top:2px; right: 40px'></i>";
  }
})();
