document.getElementById("notice-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    var noticeInput = document.getElementById("notice-input");
    var noticeText = noticeInput.value.trim();

    if (noticeText !== "") {
      var noticeList = document.getElementById("notice-list");
      var listItem = document.createElement("li");
      listItem.textContent = noticeText;
      noticeList.appendChild(listItem);
      noticeInput.value = "";
    }
  });
