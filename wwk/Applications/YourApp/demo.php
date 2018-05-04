<body>
    <div id="messages"></div>
    <input type="text" id="said">
    <button onclick="start()">提交</button>
    
</body>
<script type="text/javascript">  
        var webSocket = new WebSocket('ws://localhost:8282');  
        webSocket.onerror = function(event) {  
            alert(event.data);  
        };  
        //与WebSocket建立连接  
        webSocket.onopen = function(event) {  
            document.getElementById('messages').innerHTML = '与服务器端建立连接';  
        };  
        //处理服务器返回的信息  
        webSocket.onmessage = function(event) {  
            document.getElementById('messages').innerHTML += '<br />'+ event.data;  
        };  
        function start() {  
            s =  document.getElementById('said').value;
           
            //向服务器发送请求  
            webSocket.send(s);  
        }  
    </script> 


