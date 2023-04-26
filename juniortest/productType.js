const productType = document.getElementById("productType");
const dvdAttributes = document.getElementById("dvdAttributes");
const bookAttributes = document.getElementById("bookAttributes");
const furnitureAttributes = document.getElementById("type-furniture");

const attributeElements = {
  DVD: dvdAttributes,
  Book: bookAttributes,
  Furniture: furnitureAttributes,
};

function updateAttributesDisplay() {
  Object.keys(attributeElements).forEach((key) => {
    attributeElements[key].style.display = "none";
  });

  const selectedAttributes = attributeElements[productType.value];
  selectedAttributes.style.display = "inline-block";
}

productType.addEventListener("change", updateAttributesDisplay);

// Trigger the updateAttributesDisplay function on page load
updateAttributesDisplay();

///save button///
document.getElementById("Save").addEventListener("click", function (event) {
  event.preventDefault();

  const form = document.getElementById("productForm");
  const formData = new FormData(form);

  fetch("insert-data.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      if (response.ok) {
        return response.text();
      } else {
        throw new Error("Error submitting the form");
      }
    })
    .then((text) => {
      console.log("Data saved successfully:", text);
      window.location.href = "index.php"; // Redirect to the main page
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});
