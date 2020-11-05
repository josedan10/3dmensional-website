<template>
    <div class="menu">
        <nav class="navbar">
            <div class="head">
                <img src="/images/svgs/3dmensional-logo.svg" alt="">
            </div>
            <img class="bars" src="/images/svgs/bars.svg" alt="">
        </nav>
        <p class="text-black text-900 language">EN</p>
    </div>
</template>
<style lang="scss">
    .navbar{
        position: fixed;
        z-index: 300;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.75rem 2.25rem;
        background: rgba(255, 255, 255, 0.9);
    }

    .bars{
        top: 0;
        right: 0;
        height: 40px;
    }
    .language{
        bottom: 25px;
        left: 2.25rem;
        position: fixed;
        cursor: pointer;
        z-index: 100;
    }
    .head{
        height:50px;
        top: 0;
        left: 0;
        z-index: 10;

        img{
            width: auto;
            height:100%;
        }
    }
</style>