
function test() {

  result = window.confirm("本当に消去してもよろしいですか？")
  if (result) {
    window.location.href = "{{ action('Admin\GuitarController@delete', ['id' => $music->id]) }}"
    // window.location.href = 'home'
  } else {

  }

}








// 末端に追加する方法
function AddCords() {
  
  var Cords = document.getElementById('C#7').value;
  document.getElementById('viewlist').value += Cords + " ";

  var name = document.getElementById('C').value;
  document.getElementById('viewlist').value += name + " ";
  
}

function clickTest() {
  target = document.getElementById("anime_test");
  if (target.className == null || target.className=="") {
    target.className = "active";
  } else {
   target.className = "";
  }
}

