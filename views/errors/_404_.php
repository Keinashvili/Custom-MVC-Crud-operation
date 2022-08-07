<?php
/* @var $message */
?>
<style>
    body {
        background-color: #2F3242;
    }
    .title {
        position: absolute;
        top: 48%;
        left: 25%;
        font-size: 60px;
        color: #1a721a;
    }
    .message-box {
        height: 200px;
        width: 380px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -100px;
        margin-left: 50px;
        color: #FFF;
        font-family: Roboto;
        font-weight: 300;
    }
    .message-box h1 {
        font-size: 60px;
        line-height: 46px;
        margin-bottom: 40px;
    }
    .buttons-con .action-link-wrap {
        margin-top: 40px;
    }
    .buttons-con .action-link-wrap a {
        background: #68c950;
        padding: 8px 25px;
        border-radius: 4px;
        color: #FFF;
        font-weight: bold;
        font-size: 14px;
        transition: all 0.3s linear;
        cursor: pointer;
        text-decoration: none;
        margin-right: 10px
    }
    .buttons-con .action-link-wrap a:hover {
        background: #5A5C6C;
        color: #fff;
    }

    @keyframes float {
        100% {
            transform: translateY(20px);
        }
    }
    @media (max-width: 450px) {
        .title {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -250px;
            margin-left: -190px;
        }
        .message-box {
            top: 50%;
            left: 50%;
            margin-top: -100px;
            margin-left: -190px;
            text-align: center;
        }
    }
</style>
<div class="title">Custom-<span style="color: white">MVC</span></div>
<div class="message-box">
    <h1>404</h1>
    <p><?= $message ?></p>
    <div class="buttons-con">
        <div class="action-link-wrap">
            <a href="/" class="link-button">Go to Home Page</a>
        </div>
    </div>
</div>