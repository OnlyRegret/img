var alertContainer = document.querySelector('.customAlertContainer');

// 禁用右键菜单
document.addEventListener('contextmenu', function (e) {
  e.preventDefault();
  showAlert('    复制请按 Ctrl + C');
});

// 禁用F12
document.addEventListener('keydown', function (e) {
  if (e.key === 'F12') {
    e.preventDefault();
    showAlert('    复制请按 Ctrl + C');
  }
});

// 显示提示框
function showAlert(message) {
  var alertDiv = document.createElement('div');
  alertDiv.className = 'customAlert';
  var titleDiv = document.createElement('div');
  titleDiv.className = 'customAlertTitle';
  titleDiv.innerText = '嘿！没有快捷菜单';
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
