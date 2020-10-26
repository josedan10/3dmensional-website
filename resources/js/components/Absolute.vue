<template>
    <div class="menu">
        <div class="head fixed">
            <img src="/images/svgs/3dmensional-logo.svg" alt="">
        </div>
        <img class="fixed bars" src="/images/svgs/bars.svg" alt="">
        <p class="text-black text-900 fixed language">EN</p>
    </div>
</template>
<style lang="scss">
    .menu{
        height: 100vh;
        width: 100vw;
    }
    .absolute{
        position: absolute;
    }
    .fixed{
        position:fixed;
    }
    .relative{
        position: relative;
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
        left:0;
        margin-bottom: 20px;
        margin-left: 15px;
        cursor: pointer;
        z-index: 100;
    }
    .head{
        height:50px;
        top: 0;
        left: 0;
        margin-top: 20px;
        margin-left: 15px;
        z-index: 10;

        img{
            width: auto;
            height:100%;
        }
    }
</style>