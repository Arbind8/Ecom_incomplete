<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script
            src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    button{
        background-color: aqua;
    }

    #popup_nofication{

        padding: 20px;
        bottom: 30px;
        right: 30px;
        left: 30px;
        align-items: flex-end;
        overflow: hidden;
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* transform:translate(50%,50%) scale(1); */
        /* visibility: hidden; */
    }
.toast{

   height: 50px;
   width: 100%;
    background-color: #fff;
    border: 1px solid black;
    border-radius: 5px;
    /* box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); */
     margin: 15px 0px;
     align-items: center;
    display: flex;
    justify-content: center;
    position: relative;
    z-index: 10;
}

.toast::after{
    content: ' ';
    position: absolute;
    left: 0;
    bottom: 0;
    background: rgb(12, 173, 12);
    width: 100%;
    height: 5px;
    animation: decreaseAnimation 1s linear forwards;
}

.toast.exists::after{
    background: rgb(240, 168, 35);
}

.toast.error::after{
    background: rgb(245, 25, 25);
}
@keyframes decreaseAnimation{
    100%{
      width: 0;
        }
}
    </style>
    </head>
    <body>

        <!-- <div class="fsd">
            <button onclick="openpopup(sucessMSG)">Sucess</button>
            <button onclick="openpopup(existsMSG)">Existing</button>
            <button onclick="openpopup(InvalidMSG)">Invalid</button>
        </div> -->
        <div id="popup_nofication"></div>
        <!-- <span class="message">Sucessfully Adde to cart</span>
                <button type="button" onclick="closepopup()">Ok</button> -->

        <script>

    let popup_noficationt= document.getElementById('popup_nofication');

    let sucessMSG="Sucessfuly add to cart";
    let existsMSG="Alreday Exists";
    let InvalidMSG="Something Went wrong";


    function openpopup(msg){
        let toast =document.createElement('div');
        toast.classList.add('toast');
        toast.innerHTML=msg;
        popup_nofication.appendChild(toast);

        if(msg.includes('Something')){
            toast.classList.add('error');
        }

        if(msg.includes('Alreday')){
            toast.classList.add('exists');
        }

        setTimeout(()=>{
            toast.remove();
        },1000)

    }

    </script>
    </body>
</html>