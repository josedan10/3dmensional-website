<template>
    <div class="d-flex justify-content-between container-fluid flex-wrap all relative">
        <div class="head mb-5">
            <img src="/images/svgs/3dmensional-logo.svg" alt="">
        </div>
        <div class="container ko mt-4 d-flex flex-column justify-content-between">
            <h2 class="pl-5 ml-5 mb-4 text-black text-900">CONTACTS</h2>
            <div class="mt-4 d-flex flex-row">
                <p class="w-50 text-black">EMAIL</p>
                <p class="text-black">PHONE</p>
            </div>
            <div class="mt-1 d-flex flex-row">
                <p class="w-50 text-black text-900">CONTACTO@3DMENSIONAL_AGENCY</p>
                <p class="text-black text-900">+584241131116</p>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-end h-100">
                <div id="instagram" class="rrss">
                    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center">
                        <img src="/images/svgs/instagram-c.svg" alt="">
                        <p class="text-light">3DMENSIONAL</p>
                    </div>
                </div>
                <div id="facebook" class="rrss ">
                    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center">
                        <img src="/images/svgs/facebook-c.svg" alt="">
                        <p class="text-light">3DMENSIONAL</p>
                    </div>
                </div>
                <div id="twitter" class="rrss d-flex flex-column justify-content-around align-items-center">
                    <img src="/images/svgs/twitter-c.svg" alt="">
                    <p class="text-light">3DMENSIONAL</p>
                </div>
                <div id="whatsapp" class="rrss d-flex flex-column justify-content-around align-items-center">
                    <img src="/images/svgs/whatsapp-c.svg" alt="">
                    <p class="text-light">3DMENSIONAL</p>
                </div>
            </div>
        </div>
        <img class="absolute bars" src="/images/svgs/bars.svg" alt="">
        <p class="text-black text-900 absolute language">EN</p>
        
    </div>
</template>
<style lang="scss">

    $facebook: #0071BC;
    $instagram: #EE4B7A;
    $twitter: #34CCFE;
    $whatsapp: #5EFA75;
    html, body{
        overflow: hidden;
    }
    .head{
        height:50px;
        margin-top: 20px;
        img{
            width: auto;
            height:100%;
        }
    }
    .relative{
        position: relative;
    }
    .absolute{
        position: absolute;
    }
    .bars{
        top: 0;
        right: 0;
        height: 40px;
        margin-top: 20px;
        padding-right: 15px;
    }
    .language{
        bottom: 0;
        margin-bottom: 20px;
    }
    .ko{
        height: calc((100% - 70px) - (4.5rem));
    }
    .all{
        height: 100vh;
    }
    p{
        margin: 0;
    }
    .rrss{
        height: 320px;
        width: 25%;
        background: #2A2D34;
        border-radius: 20px 20px 0px 0px;
        transition: all 0.3s;
        img{
            height: 60px;
        }
    }
    .rrss:hover{
        transform: scaleY(1.2);
        transform-origin: bottom center;
    }
    .rrss:hover .d-flex{
        transform: scaleY(calc(1/1.2));
    }
    #instagram:hover{
        background-color: $instagram;
    }
    #facebook:hover{
        background-color: $facebook;
    }
    #twitter:hover{
        background-color: $twitter;
    }
    #whatsapp:hover{
        background-color: $whatsapp;
    }
</style>