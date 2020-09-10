<template>
    <div class="d-flex justify-content-between container-fluid flex-wrap all relative">
        <div class="header mb-5">
            <!-- <img src="/images/svgs/3dmensional-logo.svg" alt=""> -->
        </div>
        <!-- <img class="absolute bars" src="/images/svgs/bars.svg" alt="">
        <p class="text-black text-900 absolute language">EN</p> -->
        <absolute-component></absolute-component>
        <div class="container ko mt-4 d-flex flex-column justify-content-between relative">
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
                    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center">
                        <img src="/images/svgs/twitter-c.svg" alt="">
                        <p class="text-light">3DMENSIONAL</p>
                    </div>
                </div>
                <div id="whatsapp" class="rrss d-flex flex-column justify-content-around align-items-center">
                    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center">
                        <img src="/images/svgs/whatsapp-c.svg" alt="">
                        <p class="text-light">3DMENSIONAL</p>
                    </div>
                </div>
            </div>
            <watermark-component class="water-1"></watermark-component>
        </div>
        <watermark-component class="water-2"></watermark-component>
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
    .header{
        height:50px;
        width: 100%;
        margin-top: 20px;
    }
    .relative{
        position: relative;
    }
    .absolute{
        position: absolute;
    }
    .ko{
        height: calc((100% - 70px) - (4.5rem));
        .water-1{
            right: 90px;
            top: 100px;
        }
    }
    .all{
        height: 100vh;
        .water-2{
            right: -240px;
            bottom: 50px;
        }
    }
    p{
        margin: 0;
    }
    .rrss{
        height: 320px;
        width: 25%;
        background: #2A2D34;
        border-radius: 10px 10px 0px 0px;
        transition: all 0.2s;
        .d-flex{
            transition: all 0.2s;
            img{
                height: 60px;
            }
        }
        z-index: 2;
        transform-origin: bottom;
    }
    .rrss:hover{
        transform: scale(1,1.2);
    }
    .rrss:hover .d-flex{
        transform: scale(1,calc(1/1.13));
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