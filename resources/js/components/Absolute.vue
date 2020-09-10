<template>
    <div>
        <div class="head absolute">
            <img src="/images/svgs/3dmensional-logo.svg" alt="">
        </div>
        <img class="absolute bars" src="/images/svgs/bars.svg" alt="">
        <p class="text-black text-900 absolute language">EN</p>
    </div>
</template>
<style lang="scss">
    .absolute{
        position: absolute;
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
    }
    .head{
        height:50px;
        top: 0;
        left: 0;
        margin-top: 20px;
        margin-left: 15px;
        img{
            width: auto;
            height:100%;
        }
    }
</style>