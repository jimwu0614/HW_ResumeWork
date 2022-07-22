        //控制頁首圖片
        let bg = document.getElementById("bg");
        let moon = document.getElementById("moon");
        let montain = document.getElementById("montain");
        let road = document.getElementById("road");
        let text = document.getElementById("text");
        let text2 = document.getElementById("text2");


        window.addEventListener('scroll', function () {
            var value = window.scrollY;

            console.log(value);
            bg.style.top = 60 + value + 'px';
            moon.style.left = 60 + (-value * 0.3) + 'px';
            montain.style.top = 60 + (-value * 0.1) + 'px';
            road.style.top = 60 + (value * 0.1) + 'px';
            text.style.top = value + 'px';
            text2.style.top = value + 'px';
            // text.style.fontSize = '10em' / value + 'px';
        })


        //打字效果

        //控制各種參數
        var typed = new Typed(".auto-type", {
            strings: ["Living", "Learning", "Growing", "Succeeding"],
            typeSpeed: 200,
            backSpeed: 100,
            backDelay: 1500,
            loop: true,
            // fadeOut: true,
            // fadeOutClass: 'typed-fade-out',
            // fadeOutDelay: 500,

        })








