<!DOCTYPE html>
<html>
<head>
  <title>实时显示北京时间</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }

    h1 {
      color: #333;
      margin-top: 50px;
    }

    p {
      font-size: 24px;
      color: #666;
      margin-top: 20px;
    }

    #beijingTime {
      font-size: 36px;
      font-weight: bold;
      color: #FF5851;
    }
  </style>
  <script>
    // 获取北京时间的字符串
    function getBeijingTime() {
      var currentTime = new Date();
      var offset = currentTime.getTimezoneOffset(); // 获取当前时区偏移
      var beijingOffset = 480; // 北京时间偏移为480分钟
      var localOffset = offset + beijingOffset; // 当地时间偏移，单位为分钟
      var beijingTime = new Date(currentTime.getTime() + localOffset * 60 * 1000);
      
      // 格式化时间
      var hours = beijingTime.getHours();
      var minutes = beijingTime.getMinutes();
      var seconds = beijingTime.getSeconds();
      
      return (hours < 10 ? '0' + hours : hours) + ':' +
             (minutes < 10 ? '0' + minutes : minutes) + ':' +
             (seconds < 10 ? '0' + seconds : seconds);
    }

    // 更新时间显示
    function updateTime() {
      var timeElement = document.getElementById('beijingTime');
      timeElement.textContent = getBeijingTime();
    }

    // 在页面加载完成后，启动定时器，每秒更新时间显示
    window.addEventListener('load', function() {
      updateTime();
      setInterval(updateTime, 1000); // 每秒更新一次
    });
  </script>
</head>

<body>
  <h1>实时显示北京时间</h1>

  <p>北京时间: <span id="beijingTime"></span></p>
</body>
</html>