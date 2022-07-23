        // 控制內文滑進來

        window.addEventListener('scroll', function () {
            var value = window.scrollY;
            if (value>300) {
                $("#mypic").animate({
                    right: '0px',
                    top: '0px',
                    opacity: "1",
                    height: '200px',
                    width: '200px',
                    
                  },1000);


                $("#profile").animate({
                    left: '0px',
                    top: '0px',
                    opacity: "1",
                    height: '200px',
                    width: '200px',
                    
                  },1000);
            }

            
        })