let fileContent = ""; // 用于存储服务器上的文件内容
let fileLoaded = false; // 文件是否加载完毕

// 读取服务器上的 key.txt 文件
function loadFile() {
    fetch('https://auv699.github.io/ok/J/key.txt')  // 确保路径正确
        .then(response => {
            if (!response.ok) {
                throw new Error('文件加载失败！');
            }
            return response.text();
        })
        .then(data => {
            fileContent = data;  // 存储文件内容
            fileLoaded = true;  // 文件加载成功
            console.log("文件内容已加载:", fileContent); // 打印文件内容
        })
        .catch(error => {
            console.error("错误:", error);
            alert("无法加载文件，请检查服务器路径！");
        });
}

// 转义HTML字符以防止XSS攻击
function escapeHTML(str) {
    return str.replace(/[&<>"']/g, function (char) {
        return {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        }[char];
    });
}

// 查询内容
function search() {
    let query = document.getElementById("query").value.trim();
    let resultElement = document.getElementById("result");

    if (!query) {
        resultElement.innerText = ""; // 清空结果
        return;
    }

    if (!fileLoaded) {
        resultElement.innerText = "文件未加载，请稍后重试！";
        return;
    }

    // 将文件内容按行拆分并检查是否完全匹配
    const lines = fileContent.split("\n");
    const resultMessage = lines.some(line => line.trim() === query) ? "查询结果: 已存在" : "查询结果: 不存在";

    // 只在完全匹配时显示“已存在”
    resultElement.innerText = escapeHTML(resultMessage);

    // 自动隐藏提示信息（1分钟后消失）
    setTimeout(() => {
        resultElement.innerText = "";
    }, 60000); // 设置为 1 分钟（60,000 毫秒）
}

// 获取网速（延迟）
function getNetworkSpeed() {
    const startTime = Date.now();
    fetch('https://auv699.github.io/ok/J/key.txt', { method: 'HEAD' })  // 发起一个只获取头信息的请求
        .then(response => {
            const endTime = Date.now();
            const latency = endTime - startTime;
            document.getElementById("speed").innerText = ` ${latency}ms`;
        })
        .catch(error => {
            document.getElementById("speed").innerText = " 无法获取";
        });
}

// 页面加载时自动读取文件内容
window.onload = () => {
    loadFile();
    getNetworkSpeed();  // 获取网速
};

// 每隔10秒重新检测一次网速
setInterval(getNetworkSpeed, 10000);
