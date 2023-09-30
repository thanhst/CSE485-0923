function changeUser() {
  document.getElementById('addUser').addEventListener('input', function() {
    var input = this.value;
    var request = new XMLHttpRequest();
    request.open('POST', '../Connect/add.php', true);
    request.setRequestHeader('Content-Type', 'application/json');
    request.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var response = JSON.parse(this.responseText);
        var errorDiv = $('.error');
        if (response.exists) {
          errorDiv.html('<span class="error-message">Tên người dùng đã tồn tại</span>');
        } else {
          errorDiv.empty();
        }
      }
    };
    request.send(JSON.stringify({ username: input }));
  });
}

document.addEventListener('DOMContentLoaded', function() {
  changeUser();
});
