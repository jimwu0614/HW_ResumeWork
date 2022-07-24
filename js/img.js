//點擊小圖會用MODAL放大

$(document).ready(function () {

$(".animal").on("click",function(){
    let img=$(this).attr('src')  //拿到圖片的連結

                            //把連結塞到一個img標籤中..把標籤放到modal中的modal-body區塊中...
                            //button那三行是右上角的叉
    $('.modal-header').html(`<img class="modal_pic" src="${img}">  
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            `) 
    })

})