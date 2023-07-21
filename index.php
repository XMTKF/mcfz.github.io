<!DOCTYPE html>
<html>
<head>
    <title>我的世界整合包介绍</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        h1 {
            color: #333333;
            font-size: 32px;
            margin-bottom: 0;
        }

        h2 {
            color: #666666;
            font-size: 24px;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        p {
            color: #666666;
            line-height: 1.5;
        }

        ul, ol {
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #999999;
        }

        .download-link {
            text-align: center;
            margin-top: 40px;
        }

        .download-link a {
            text-decoration: none;
            background-color: #333333;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 4px;
            display: inline-block;
            margin-right: 10px;
        }

        .download-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }

        .download-popup a {
            display: block;
            margin-bottom: 10px;
        }
        
        .show-popup {
            display: block !important;
        }
         h1 {
         color: #333;
         margin-top: 50px;
        }
         p {
         font-size: 18px;
         color: #666;
         margin-top: 20px;
        }
    .visit-count {
      font-size: 32px;
      font-weight: bold;
      color: #FF5851;
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
        function togglePopup() {
            var popup = document.getElementById("downloadPopup");
            popup.classList.toggle("show-popup");
        }
          function playAudio() {
          var audio = document.getElementById('bgMusic');
          audio.play();
        }
    </script>
    <link rel="icon" href="../favicon.ico">

<body>
    <div class="container">
        <div class="header">
            <h1>欢迎来到我的整合包的介绍页面</h1>
        </div>
    <div class="download-link">
    <div id="downloadPopup" class="download-dizhi">
    <a onclick="playAudio()">点击播放音乐（一定要先点）</a>
    

    <audio id="bgMusic">
    <source src="https://skdl.oss-cn-hongkong.vzcs.top/oss/dl-mp3/64b7f156bb682.mp3" type="audio/mpeg">
    </audio>

  <script>
    // 清零函数
    function resetVisitCount() {
      localStorage.setItem('visitCount', 0);
    }

    // 定时器：每天凌晨1点清零
    function timer() {
      var currentTime = new Date();
      var hours = currentTime.getHours();

      // 判断是否凌晨1点
      if (hours === 1) {
        resetVisitCount();
      }
    }

    // 检查本地存储中是否已存在访问次数数据
    if (localStorage.getItem('visitCount')) {
      // 如果已存在，将访问次数加1
      var visitCount = parseInt(localStorage.getItem('visitCount')) + 1;
    } else {
      // 如果不存在，设置访问次数为1
      var visitCount = 1;
    }

    // 保存新的访问次数到本地存储
    localStorage.setItem('visitCount', visitCount);

    // 在页面加载完成后，更新显示的访问次数
    window.addEventListener('load', function() {
      var visitCountElement = document.getElementById('visitCount');
      visitCountElement.textContent = visitCount;
    });

    // 启动定时器，定时检查是否到了凌晨1点
    setInterval(timer, 60000); // 每分钟检查一次
  </script>
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
  <p>北京时间: <span id="beijingTime" class="visit-count"></span></p>
        <h2>整合包名称：</h2>
        <p>整合包名称：科技空岛(RxanGrben)</p>
        <img src="down/081225t7179p455v53777o_800x336.png" alt="整合包截图">
        <h2>整合包简介：</h2>
        <p>RxanGrben是一个以植物魔法为核心的魔改空岛整合包。当前整合包版本：1.3.2</p>
        
        <p>虽然说是魔改整合包，有着135kb的魔改，但他的魔改都是为了让生存进行下去，所做的魔改，甚至属于简单的整合包。</p>

        <h2>整合包特点：</h2>
        <ul>
            <li>由植物魔法的附属水晶花园来创建的空岛，而这将是你全新对 Minecraft 的认知。
   </li>
            <li>前期的物资获取来源于植物魔法的产矿，但是由于整合包对植物魔法进行了魔改，
      像热爆花之类的魔力将产出的非常少。这会大大使你游玩整合包的时间增加
    （ps：所以不适合对于植物魔法新手的小白进行游玩，因为你有可能会卡在某个地方）
   </li>
            <li>整合包不会使用老套的无中生有模组，而是使用全新的植物魔法产矿，这会使你得到全新的体验。
   </li>
            <li>整合包使用13K的魔改，来完善你前期的体验，对匠魂2进行了各种魔改，增加了十几种自定义的材料，
      也进行了修改，使其工具更加耐用或者不耐用，比如强化了阿迪特稿在中期的耐久及其挖东西的速度和属性
      爱石的判断方法。</li>
            <li>整合包使用 内存自动清理  和这篇 JAM优化参数 它可以让内存自动清理不会导致客户端卡顿，
      整合包已加上这个优化参数。</li>
            <li>整合包使用存档备份 来保证你的存档不会被因为一些原因导致消失</li>
            <li>整合包使用更好的FPS、苹果核、平滑字体、泡沫修复、区块预加载、更好建筑权杖来进行各种优化。</li>
            <li>整合包使用多线程地形生成、合成辅助、合成扩展、检测器、检测器附加、掉落物自动堆叠、经典状态条、通用bug修复来进行各种优化对玩家的体验。</li>
        </ul>

        <h2>安装说明：</h2>
        <li>下载整合包的ZIP安装文件。</li>
            <li>打开"我的世界"启动器，把ZIP安装文件拖到启动器。</li>
            <li>会自动弹出安装界面，并点击"安装"。</li>
            <li>安装完成，点击启动游戏。</li>

        <h2>注意事项：</h2>
        <p>请前往发布页面查看注意事项（主要由于字数过多）</p> 
        
        <img src="down/im_1000x563_800x450.png" alt="整合包截图">
        
        <div class="download-link">
            <div id="downloadPopup" class="download-dizhi">
                <p>其他发布界面</p>
                <a href="https://www.mcmod.cn/modpack/491.html">MCMOD</a>
                <a href="https://github.com/MCFZ/RxanGrben">Github</a>
                <a href="https://www.mcbbs.net/thread-1293219-1-1.html">MCBBS</a>
                <p>下载链接内容</p>
                <a href="https://pan.baidu.com/s/1CyPLeIIkjW0xjiKJq7C43w?pwd=1969">百度网盘(只到1.3.1)</a>
                <a href="https://share.weiyun.com/4350Hk6N">腾讯微云(只到1.3.1)</a>
                <a href="https://pan.mcfz.vip/s/XaUq">小默网盘(仅最新版本1.3.2)</a>
            </div>
            
        <div class="download-link">
            <div id="downloadPopup" class="download-popup">
                
            </div>
        </div>

        <div class="footer">
            <p>希望您享受"RxanGrben"整合包的同时, 有任何问题，请联系我们。</p>
            <p>联系方式: "Mail：admin@mcfz.vip"___"TG：https://t.me/MCFZ"___"KOOK：MCFZ"</p>
        </div>
        <div class="download-link">
            <div id="downloadPopup" class="download-dizhi">
                <p>推荐的一些网站</p>
                <a href="https://skin.slvvu.cn">SLVVU Skin</a>
                <a href="https://pay.mcfz.vip">小默易支付</a>
                <a href="https://pan.mcfz.vip">小默网盘</a>
    </div>
</body>
<p>总访问次数: <span id="visitCount" class="visit-count"></span></p>
<p>本站由"默空数据"提供高速存储（OSS）服务</p><img src="down/img-1.png" alt="整合包截图">
    <div style="height:70px"></div>
    <footer class="mdui-typo">
        <!-- 2022-1-6 -->
        <p>Copyright © 2021 - 2023 <a style="font-weight:600" href="https://blog.mcfz.vip/" target="_blank">小默博客</a></p>
        <!-- 2022-1-6 -->
    <script>
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "af12fd2a-f866-4ff8-a41c-b2801d59e933";

        var DocumentVar = document;
        var JavaScript = DocumentVar.createElement("script");
        JavaScript.src = "https://client.crisp.chat/l.js";
        JavaScript.async = 1;

        DocumentVar.getElementsByTagName("head")[0].appendChild(JavaScript);
    </script>
</html>