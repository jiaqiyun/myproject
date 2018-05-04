<!DOCTYPE html>
<title></title>
<h2></h2>
<div id="output"></div>
<input type="xx">
<button id="sub" >发送</button>
<script>
//初始化一个 WebSocket 对象
var ws = new WebSocket("ws://127.0.0.1:8282/echo");

// 建立 web socket 连接成功触发事件
ws.onopen = function () {
  // 使用 send() 方法发送数据
  ws.send("发送数据");
  
};

// 接收服务端数据时触发事件
ws.onmessage = function (evt) {
  
  alert(evt.data);
};

// 断开 web socket 连接成功触发事件
ws.onclose = function () {
  alert("连接已关闭...");
}; 

</script>
</html>