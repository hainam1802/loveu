
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hi!</title>
    <meta name="description" content="Embecuato">
    <meta name="keywords" content="Embecuato">
    <meta property="og:site_name" content="Embecuato">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Embecuato">
    <meta property="og:description" content="Embecuato">
    <meta property="og:image" content="/assets/image/love.png">
    <meta property="og:image:url" content="/assets/image/love.png">
    <meta property="og:image:secure_url" content="/assets/image/haidua.jpg">
    <meta name="format-detection" content="telephone=no">
    <link href="/assets/css/love.css?v={{ time() }}" rel="stylesheet">
</head>

<body id="home">
<div id="wrapper" style="text-align: center">
    <h2 id="question">Bạn sẵn sàng chưa? <br> <small>(Thử nhấn vào "Hmm..." xem🤭)</small> </h2>
    <img
            id="gif"
            alt="gif"
            src="/assets/image/image1.webp"
    />
    <div id="btn-group">
        <button id="yes-btn">Sẵn sàng</button>
        <button id="no-btn">Hmm...</button>
    </div>
</div>
</div>


<script>
    const wrapper = document.getElementById("wrapper");
    const question = document.getElementById("question");
    const gif = document.getElementById("gif");
    const yesBtn = document.getElementById("yes-btn");
    const noBtn = document.getElementById("no-btn");

    yesBtn.addEventListener("click", () => {
        question.innerHTML = "Yay, vậy tìm mình diiiii </br> 🥰🥰🥰";
        gif.src = "/assets/image/image2.webp";
        yesBtn.style.display = "none";
        noBtn.style.display = "none";
    });

    noBtn.addEventListener("mouseover", () => {
        const noBtnRect = noBtn.getBoundingClientRect();
        const maxX = window.innerWidth - noBtnRect.width;
        const maxY = window.innerHeight - noBtnRect.height;

        const randomX = Math.floor(Math.random() * maxX);
        const randomY = Math.floor(Math.random() * maxY);

        noBtn.style.left = randomX + "px";
        noBtn.style.top = randomY + "px";
    });
</script>
</body>
</html>
