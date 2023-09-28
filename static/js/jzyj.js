var alertContainer = document.querySelector('.customAlertContainer');

// �����Ҽ��˵�
document.addEventListener('contextmenu', function (e) {
  e.preventDefault();
  showAlert('    �����밴 Ctrl + C');
});

// ����F12
document.addEventListener('keydown', function (e) {
  if (e.key === 'F12') {
    e.preventDefault();
    showAlert('    �����밴 Ctrl + C');
  }
});

// ��ʾ��ʾ��
function showAlert(message) {
  var alertDiv = document.createElement('div');
  alertDiv.className = 'customAlert';
  var titleDiv = document.createElement('div');
  titleDiv.className = 'customAlertTitle';
  titleDiv.innerText = '�٣�û�п�ݲ˵�';
  alertDiv.appendChild(titleDiv);
  var contentDiv = document.createElement('div');
  contentDiv.innerText = message;
  alertDiv.appendChild(contentDiv);
  alertContainer.appendChild(alertDiv);

  setTimeout(function () {
    alertDiv.classList.add('slideUp');
  }, 100);

  setTimeout(function () {
    alertDiv.classList.remove('slideUp');
    alertContainer.removeChild(alertDiv);
  }, 6000);
}
