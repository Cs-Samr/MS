<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/MS/assets/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/MS/assets/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/MS/assets/vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="http://localhost/MS/assets/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/MS/assets/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/MS/assets/src/plugins/sweetalert2/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/MS/assets/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-119386393-1');
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <style>
    @-webkit-keyframes swal2-show {
        0% {
            -webkit-transform: scale(0.7);
            transform: scale(0.7);
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
        }

        80% {
            -webkit-transform: scale(0.95);
            transform: scale(0.95);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes swal2-show {
        0% {
            -webkit-transform: scale(0.7);
            transform: scale(0.7);
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
        }

        80% {
            -webkit-transform: scale(0.95);
            transform: scale(0.95);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @-webkit-keyframes swal2-hide {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
            opacity: 0;
        }
    }

    @keyframes swal2-hide {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
            opacity: 0;
        }
    }

    @-webkit-keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0;
        }

        54% {
            top: 1.0625em;
            left: .125em;
            width: 0;
        }

        70% {
            top: 2.1875em;
            left: -.375em;
            width: 3.125em;
        }

        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em;
        }

        100% {
            top: 2.8125em;
            left: .875em;
            width: 1.5625em;
        }
    }

    @keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0;
        }

        54% {
            top: 1.0625em;
            left: .125em;
            width: 0;
        }

        70% {
            top: 2.1875em;
            left: -.375em;
            width: 3.125em;
        }

        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em;
        }

        100% {
            top: 2.8125em;
            left: .875em;
            width: 1.5625em;
        }
    }

    @-webkit-keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }

        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }

        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em;
        }

        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
        }
    }

    @keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }

        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }

        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em;
        }

        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
        }
    }

    @-webkit-keyframes swal2-rotate-success-circular-line {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }

        100% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }
    }

    @keyframes swal2-rotate-success-circular-line {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }

        100% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }
    }

    @-webkit-keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }

        50% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }

        80% {
            margin-top: -.375em;
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
        }

        100% {
            margin-top: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }

        50% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }

        80% {
            margin-top: -.375em;
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
        }

        100% {
            margin-top: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @-webkit-keyframes swal2-animate-error-icon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0;
        }

        100% {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1;
        }
    }

    @keyframes swal2-animate-error-icon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0;
        }

        100% {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1;
        }
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast {
        flex-direction: column;
        align-items: stretch;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-actions {
        flex: 1;
        align-self: stretch;
        justify-content: flex-end;
        height: 2.2em;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-loading {
        justify-content: center;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-input {
        height: 2em;
        margin: .3125em auto;
        font-size: 1em;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-validationerror {
        font-size: 1em;
    }

    body.swal2-toast-shown>.swal2-container {
        position: fixed;
        background-color: transparent;
    }

    body.swal2-toast-shown>.swal2-container.swal2-shown {
        background-color: transparent;
    }

    body.swal2-toast-shown>.swal2-container.swal2-top {
        top: 0;
        right: auto;
        bottom: auto;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-top-end,
    body.swal2-toast-shown>.swal2-container.swal2-top-right {
        top: 0;
        right: 0;
        bottom: auto;
        left: auto;
    }

    body.swal2-toast-shown>.swal2-container.swal2-top-start,
    body.swal2-toast-shown>.swal2-container.swal2-top-left {
        top: 0;
        right: auto;
        bottom: auto;
        left: 0;
    }

    body.swal2-toast-shown>.swal2-container.swal2-center-start,
    body.swal2-toast-shown>.swal2-container.swal2-center-left {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-center {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-center-end,
    body.swal2-toast-shown>.swal2-container.swal2-center-right {
        top: 50%;
        right: 0;
        bottom: auto;
        left: auto;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom-start,
    body.swal2-toast-shown>.swal2-container.swal2-bottom-left {
        top: auto;
        right: auto;
        bottom: 0;
        left: 0;
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom {
        top: auto;
        right: auto;
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom-end,
    body.swal2-toast-shown>.swal2-container.swal2-bottom-right {
        top: auto;
        right: 0;
        bottom: 0;
        left: auto;
    }

    .swal2-popup.swal2-toast {
        flex-direction: row;
        align-items: center;
        width: auto;
        padding: 0.625em;
        box-shadow: 0 0 0.625em #d9d9d9;
        overflow-y: hidden;
    }

    .swal2-popup.swal2-toast .swal2-header {
        flex-direction: row;
    }

    .swal2-popup.swal2-toast .swal2-title {
        justify-content: flex-start;
        margin: 0 .6em;
        font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-close {
        position: initial;
    }

    .swal2-popup.swal2-toast .swal2-content {
        justify-content: flex-start;
        font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-icon {
        width: 2em;
        min-width: 2em;
        height: 2em;
        margin: 0;
    }

    .swal2-popup.swal2-toast .swal2-icon-text {
        font-size: 2em;
        font-weight: bold;
        line-height: 1em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
        top: .875em;
        width: 1.375em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: .3125em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: .3125em;
    }

    .swal2-popup.swal2-toast .swal2-actions {
        height: auto;
        margin: 0 .3125em;
    }

    .swal2-popup.swal2-toast .swal2-styled {
        margin: 0 .3125em;
        padding: .3125em .625em;
        font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-styled:focus {
        box-shadow: 0 0 0 0.0625em #fff, 0 0 0 0.125em rgba(50, 100, 150, 0.4);
    }

    .swal2-popup.swal2-toast .swal2-success {
        border-color: #a5dc86;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
        position: absolute;
        width: 2em;
        height: 2.8125em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        border-radius: 50%;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.25em;
        left: -.9375em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 2em 2em;
        transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.25em;
        left: .9375em;
        -webkit-transform-origin: 0 2em;
        transform-origin: 0 2em;
        border-radius: 0 4em 4em 0;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
        top: 0;
        left: .4375em;
        width: .4375em;
        height: 2.6875em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
        height: .3125em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 1.125em;
        left: .1875em;
        width: .75em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
        top: .9375em;
        right: .1875em;
        width: 1.375em;
    }

    .swal2-popup.swal2-toast.swal2-show {
        -webkit-animation: showSweetToast .5s;
        animation: showSweetToast .5s;
    }

    .swal2-popup.swal2-toast.swal2-hide {
        -webkit-animation: hideSweetToast .2s forwards;
        animation: hideSweetToast .2s forwards;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
        -webkit-animation: animate-toast-success-tip .75s;
        animation: animate-toast-success-tip .75s;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
        -webkit-animation: animate-toast-success-long .75s;
        animation: animate-toast-success-long .75s;
    }

    @-webkit-keyframes showSweetToast {
        0% {
            -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
            opacity: 0;
        }

        33% {
            -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
            opacity: .5;
        }

        66% {
            -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
            opacity: .7;
        }

        100% {
            -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
            opacity: 1;
        }
    }

    @keyframes showSweetToast {
        0% {
            -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
            opacity: 0;
        }

        33% {
            -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
            opacity: .5;
        }

        66% {
            -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
            opacity: .7;
        }

        100% {
            -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
            opacity: 1;
        }
    }

    @-webkit-keyframes hideSweetToast {
        0% {
            opacity: 1;
        }

        33% {
            opacity: .5;
        }

        100% {
            -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
            opacity: 0;
        }
    }

    @keyframes hideSweetToast {
        0% {
            opacity: 1;
        }

        33% {
            opacity: .5;
        }

        100% {
            -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
            opacity: 0;
        }
    }

    @-webkit-keyframes animate-toast-success-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0;
        }

        54% {
            top: .125em;
            left: .125em;
            width: 0;
        }

        70% {
            top: .625em;
            left: -.25em;
            width: 1.625em;
        }

        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em;
        }

        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em;
        }
    }

    @keyframes animate-toast-success-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0;
        }

        54% {
            top: .125em;
            left: .125em;
            width: 0;
        }

        70% {
            top: .625em;
            left: -.25em;
            width: 1.625em;
        }

        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em;
        }

        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em;
        }
    }

    @-webkit-keyframes animate-toast-success-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0;
        }

        65% {
            top: 1.25em;
            right: .9375em;
            width: 0;
        }

        84% {
            top: .9375em;
            right: 0;
            width: 1.125em;
        }

        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em;
        }
    }

    @keyframes animate-toast-success-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0;
        }

        65% {
            top: 1.25em;
            right: .9375em;
            width: 0;
        }

        84% {
            top: .9375em;
            right: 0;
            width: 1.125em;
        }

        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em;
        }
    }

    html.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown),
    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        height: auto;
        overflow-y: hidden;
    }

    body.swal2-no-backdrop .swal2-shown {
        top: auto;
        right: auto;
        bottom: auto;
        left: auto;
        background-color: transparent;
    }

    body.swal2-no-backdrop .swal2-shown>.swal2-modal {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top {
        top: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top-start,
    body.swal2-no-backdrop .swal2-shown.swal2-top-left {
        top: 0;
        left: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top-end,
    body.swal2-no-backdrop .swal2-shown.swal2-top-right {
        top: 0;
        right: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center {
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center-start,
    body.swal2-no-backdrop .swal2-shown.swal2-center-left {
        top: 50%;
        left: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center-end,
    body.swal2-no-backdrop .swal2-shown.swal2-center-right {
        top: 50%;
        right: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom {
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom-start,
    body.swal2-no-backdrop .swal2-shown.swal2-bottom-left {
        bottom: 0;
        left: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
    body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
        right: 0;
        bottom: 0;
    }

    .swal2-container {
        display: flex;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        padding: 10px;
        background-color: transparent;
        z-index: 1060;
        overflow-x: hidden;
        -webkit-overflow-scrolling: touch;
    }

    .swal2-container.swal2-top {
        align-items: flex-start;
    }

    .swal2-container.swal2-top-start,
    .swal2-container.swal2-top-left {
        align-items: flex-start;
        justify-content: flex-start;
    }

    .swal2-container.swal2-top-end,
    .swal2-container.swal2-top-right {
        align-items: flex-start;
        justify-content: flex-end;
    }

    .swal2-container.swal2-center {
        align-items: center;
    }

    .swal2-container.swal2-center-start,
    .swal2-container.swal2-center-left {
        align-items: center;
        justify-content: flex-start;
    }

    .swal2-container.swal2-center-end,
    .swal2-container.swal2-center-right {
        align-items: center;
        justify-content: flex-end;
    }

    .swal2-container.swal2-bottom {
        align-items: flex-end;
    }

    .swal2-container.swal2-bottom-start,
    .swal2-container.swal2-bottom-left {
        align-items: flex-end;
        justify-content: flex-start;
    }

    .swal2-container.swal2-bottom-end,
    .swal2-container.swal2-bottom-right {
        align-items: flex-end;
        justify-content: flex-end;
    }

    .swal2-container.swal2-grow-fullscreen>.swal2-modal {
        display: flex !important;
        flex: 1;
        align-self: stretch;
        justify-content: center;
    }

    .swal2-container.swal2-grow-row>.swal2-modal {
        display: flex !important;
        flex: 1;
        align-content: center;
        justify-content: center;
    }

    .swal2-container.swal2-grow-column {
        flex: 1;
        flex-direction: column;
    }

    .swal2-container.swal2-grow-column.swal2-top,
    .swal2-container.swal2-grow-column.swal2-center,
    .swal2-container.swal2-grow-column.swal2-bottom {
        align-items: center;
    }

    .swal2-container.swal2-grow-column.swal2-top-start,
    .swal2-container.swal2-grow-column.swal2-center-start,
    .swal2-container.swal2-grow-column.swal2-bottom-start,
    .swal2-container.swal2-grow-column.swal2-top-left,
    .swal2-container.swal2-grow-column.swal2-center-left,
    .swal2-container.swal2-grow-column.swal2-bottom-left {
        align-items: flex-start;
    }

    .swal2-container.swal2-grow-column.swal2-top-end,
    .swal2-container.swal2-grow-column.swal2-center-end,
    .swal2-container.swal2-grow-column.swal2-bottom-end,
    .swal2-container.swal2-grow-column.swal2-top-right,
    .swal2-container.swal2-grow-column.swal2-center-right,
    .swal2-container.swal2-grow-column.swal2-bottom-right {
        align-items: flex-end;
    }

    .swal2-container.swal2-grow-column>.swal2-modal {
        display: flex !important;
        flex: 1;
        align-content: center;
        justify-content: center;
    }

    .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right)>.swal2-modal {
        margin: auto;
    }

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .swal2-container .swal2-modal {
            margin: 0 !important;
        }
    }

    .swal2-container.swal2-fade {
        transition: background-color .1s;
    }

    .swal2-container.swal2-shown {
        background-color: rgba(0, 0, 0, 0.4);
    }

    .swal2-popup {
        display: none;
        position: relative;
        flex-direction: column;
        justify-content: center;
        width: 32em;
        max-width: 100%;
        padding: 1.25em;
        border-radius: 0.3125em;
        background: #fff;
        font-family: inherit;
        font-size: 1rem;
        box-sizing: border-box;
    }

    .swal2-popup:focus {
        outline: none;
    }

    .swal2-popup.swal2-loading {
        overflow-y: hidden;
    }

    .swal2-popup .swal2-header {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .swal2-popup .swal2-title {
        display: block;
        position: relative;
        max-width: 100%;
        margin: 0 0 0.4em;
        padding: 0;
        color: #131e22;
        font-size: 1.875em;
        font-weight: 500;
        text-align: center;
        text-transform: none;
        word-wrap: break-word;
    }

    .swal2-popup .swal2-actions {
        align-items: center;
        justify-content: center;
        margin: 1.25em auto 0;
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
        opacity: .4;
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
        background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));
    }

    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
        width: 2.5em;
        height: 2.5em;
        margin: .46875em;
        padding: 0;
        border: .25em solid transparent;
        border-radius: 100%;
        border-color: transparent;
        background-color: transparent !important;
        color: transparent;
        cursor: default;
        box-sizing: border-box;
        -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
        margin-right: 30px;
        margin-left: 30px;
    }

    .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
        display: inline-block;
        width: 15px;
        height: 15px;
        margin-left: 5px;
        border: 3px solid #999999;
        border-radius: 50%;
        border-right-color: transparent;
        box-shadow: 1px 1px 1px #fff;
        content: '';
        -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
    }

    .swal2-popup .swal2-styled {
        margin: 0 .3125em;
        padding: .625em 2em;
        font-weight: 500;
        box-shadow: none;
    }

    .swal2-popup .swal2-styled:not([disabled]) {
        cursor: pointer;
    }

    .swal2-popup .swal2-styled.swal2-confirm {
        border: 0;
        border-radius: 0.25em;
        background: initial;
        background-color: #3085d6;
        color: #fff;
        font-size: 1.0625em;
    }

    .swal2-popup .swal2-styled.swal2-cancel {
        border: 0;
        border-radius: 0.25em;
        background: initial;
        background-color: #aaa;
        color: #fff;
        font-size: 1.0625em;
    }

    .swal2-popup .swal2-styled:focus {
        outline: none;
        box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
    }

    .swal2-popup .swal2-styled::-moz-focus-inner {
        border: 0;
    }

    .swal2-popup .swal2-footer {
        justify-content: center;
        margin: 1.25em 0 0;
        padding-top: 1em;
        border-top: 1px solid #eee;
        color: #545454;
        font-size: 1em;
    }

    .swal2-popup .swal2-image {
        max-width: 100%;
        margin: 1.25em auto;
    }

    .swal2-popup .swal2-close {
        position: absolute;
        top: 0;
        right: 0;
        justify-content: center;
        width: 1.2em;
        min-width: 1.2em;
        height: 1.2em;
        margin: 0;
        padding: 0;
        transition: color 0.1s ease-out;
        border: none;
        border-radius: 0;
        background: transparent;
        color: #cccccc;
        font-family: serif;
        font-size: calc(2.5em - 0.25em);
        line-height: 1.2em;
        cursor: pointer;
    }

    .swal2-popup .swal2-close:hover {
        -webkit-transform: none;
        transform: none;
        color: #f27474;
    }

    .swal2-popup>.swal2-input,
    .swal2-popup>.swal2-file,
    .swal2-popup>.swal2-textarea,
    .swal2-popup>.swal2-select,
    .swal2-popup>.swal2-radio,
    .swal2-popup>.swal2-checkbox {
        display: none;
    }

    .swal2-popup .swal2-content {
        justify-content: center;
        margin: 0;
        padding: 0;
        color: #131e22;
        font-size: 1.125em;
        font-weight: 400;
        line-height: normal;
        word-wrap: break-word;
    }

    .swal2-popup #swal2-content {
        text-align: center;
    }

    .swal2-popup .swal2-input,
    .swal2-popup .swal2-file,
    .swal2-popup .swal2-textarea,
    .swal2-popup .swal2-select,
    .swal2-popup .swal2-radio,
    .swal2-popup .swal2-checkbox {
        margin: 1em auto;
    }

    .swal2-popup .swal2-input,
    .swal2-popup .swal2-file,
    .swal2-popup .swal2-textarea {
        width: 100%;
        transition: border-color .3s, box-shadow .3s;
        border: 1px solid #d9d9d9;
        border-radius: 0.1875em;
        font-size: 1.125em;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
        box-sizing: border-box;
    }

    .swal2-popup .swal2-input.swal2-inputerror,
    .swal2-popup .swal2-file.swal2-inputerror,
    .swal2-popup .swal2-textarea.swal2-inputerror {
        border-color: #f27474 !important;
        box-shadow: 0 0 2px #f27474 !important;
    }

    .swal2-popup .swal2-input:focus,
    .swal2-popup .swal2-file:focus,
    .swal2-popup .swal2-textarea:focus {
        border: 1px solid #b4dbed;
        outline: none;
        box-shadow: 0 0 3px #c4e6f5;
    }

    .swal2-popup .swal2-input::-webkit-input-placeholder,
    .swal2-popup .swal2-file::-webkit-input-placeholder,
    .swal2-popup .swal2-textarea::-webkit-input-placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-input:-ms-input-placeholder,
    .swal2-popup .swal2-file:-ms-input-placeholder,
    .swal2-popup .swal2-textarea:-ms-input-placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-input::-ms-input-placeholder,
    .swal2-popup .swal2-file::-ms-input-placeholder,
    .swal2-popup .swal2-textarea::-ms-input-placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-input::placeholder,
    .swal2-popup .swal2-file::placeholder,
    .swal2-popup .swal2-textarea::placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-range input {
        width: 80%;
    }

    .swal2-popup .swal2-range output {
        width: 20%;
        font-weight: 600;
        text-align: center;
    }

    .swal2-popup .swal2-range input,
    .swal2-popup .swal2-range output {
        height: 2.625em;
        margin: 1em auto;
        padding: 0;
        font-size: 1.125em;
        line-height: 2.625em;
    }

    .swal2-popup .swal2-input {
        height: 2.625em;
        padding: 0.75em;
    }

    .swal2-popup .swal2-input[type='number'] {
        max-width: 10em;
    }

    .swal2-popup .swal2-file {
        font-size: 1.125em;
    }

    .swal2-popup .swal2-textarea {
        height: 6.75em;
        padding: 0.75em;
    }

    .swal2-popup .swal2-select {
        min-width: 50%;
        max-width: 100%;
        padding: .375em .625em;
        color: #545454;
        font-size: 1.125em;
    }

    .swal2-popup .swal2-radio,
    .swal2-popup .swal2-checkbox {
        align-items: center;
        justify-content: center;
    }

    .swal2-popup .swal2-radio label,
    .swal2-popup .swal2-checkbox label {
        margin: 0 .6em;
        font-size: 1.125em;
    }

    .swal2-popup .swal2-radio input,
    .swal2-popup .swal2-checkbox input {
        margin: 0 .4em;
    }

    .swal2-popup .swal2-validationerror {
        display: none;
        align-items: center;
        justify-content: center;
        padding: 0.625em;
        background: #f0f0f0;
        color: #666666;
        font-size: 1em;
        font-weight: 300;
        overflow: hidden;
    }

    .swal2-popup .swal2-validationerror::before {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        margin: 0 .625em;
        border-radius: 50%;
        background-color: #f27474;
        color: #fff;
        font-weight: 600;
        line-height: 1.5em;
        text-align: center;
        content: '!';
        zoom: normal;
    }

    @supports (-ms-accelerator: true) {
        .swal2-range input {
            width: 100% !important;
        }

        .swal2-range output {
            display: none;
        }
    }

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .swal2-range input {
            width: 100% !important;
        }

        .swal2-range output {
            display: none;
        }
    }

    .swal2-icon {
        position: relative;
        justify-content: center;
        width: 5em;
        height: 5em;
        margin: 1.25em auto 1.875em;
        border: .25em solid transparent;
        border-radius: 50%;
        line-height: 5em;
        cursor: default;
        box-sizing: content-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        zoom: normal;
    }

    .swal2-icon-text {
        font-size: 3.75em;
    }

    .swal2-icon.swal2-error {
        border-color: #f27474;
    }

    .swal2-icon.swal2-error .swal2-x-mark {
        position: relative;
        flex-grow: 1;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
        display: block;
        position: absolute;
        top: 2.3125em;
        width: 2.9375em;
        height: .3125em;
        border-radius: .125em;
        background-color: #f27474;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: 1.0625em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: 1em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .swal2-icon.swal2-warning {
        border-color: #facea8;
        color: #f8bb86;
    }

    .swal2-icon.swal2-info {
        border-color: #9de0f6;
        color: #3fc3ee;
    }

    .swal2-icon.swal2-question {
        border-color: #c9dae1;
        color: #87adbd;
    }

    .swal2-icon.swal2-success {
        border-color: #a5dc86;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
        position: absolute;
        width: 3.75em;
        height: 7.5em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        border-radius: 50%;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.4375em;
        left: -2.0635em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 3.75em 3.75em;
        transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.6875em;
        left: 1.875em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0 3.75em;
        transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0;
    }

    .swal2-icon.swal2-success .swal2-success-ring {
        position: absolute;
        top: -.25em;
        left: -.25em;
        width: 100%;
        height: 100%;
        border: 0.25em solid rgba(165, 220, 134, 0.3);
        border-radius: 50%;
        z-index: 2;
        box-sizing: content-box;
    }

    .swal2-icon.swal2-success .swal2-success-fix {
        position: absolute;
        top: .5em;
        left: 1.625em;
        width: .4375em;
        height: 5.625em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        z-index: 1;
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'] {
        display: block;
        position: absolute;
        height: .3125em;
        border-radius: .125em;
        background-color: #a5dc86;
        z-index: 2;
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 2.875em;
        left: .875em;
        width: 1.5625em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
        top: 2.375em;
        right: .5em;
        width: 2.9375em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .swal2-progresssteps {
        align-items: center;
        margin: 0 0 1.25em;
        padding: 0;
        font-weight: 600;
    }

    .swal2-progresssteps li {
        display: inline-block;
        position: relative;
    }

    .swal2-progresssteps .swal2-progresscircle {
        width: 2em;
        height: 2em;
        border-radius: 2em;
        background: #3085d6;
        color: #fff;
        line-height: 2em;
        text-align: center;
        z-index: 20;
    }

    .swal2-progresssteps .swal2-progresscircle:first-child {
        margin-left: 0;
    }

    .swal2-progresssteps .swal2-progresscircle:last-child {
        margin-right: 0;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
        background: #3085d6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
        background: #add8e6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
        background: #add8e6;
    }

    .swal2-progresssteps .swal2-progressline {
        width: 2.5em;
        height: .4em;
        margin: 0 -1px;
        background: #3085d6;
        z-index: 10;
    }

    [class^='swal2'] {
        -webkit-tap-highlight-color: transparent;
    }

    .swal2-show {
        -webkit-animation: swal2-show 0.3s;
        animation: swal2-show 0.3s;
    }

    .swal2-show.swal2-noanimation {
        -webkit-animation: none;
        animation: none;
    }

    .swal2-hide {
        -webkit-animation: swal2-hide 0.15s forwards;
        animation: swal2-hide 0.15s forwards;
    }

    .swal2-hide.swal2-noanimation {
        -webkit-animation: none;
        animation: none;
    }

    [dir='rtl'] .swal2-close {
        right: auto;
        left: 0;
    }

    .swal2-animate-success-icon .swal2-success-line-tip {
        -webkit-animation: swal2-animate-success-line-tip 0.75s;
        animation: swal2-animate-success-line-tip 0.75s;
    }

    .swal2-animate-success-icon .swal2-success-line-long {
        -webkit-animation: swal2-animate-success-line-long 0.75s;
        animation: swal2-animate-success-line-long 0.75s;
    }

    .swal2-animate-success-icon .swal2-success-circular-line-right {
        -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
        animation: swal2-rotate-success-circular-line 4.25s ease-in;
    }

    .swal2-animate-error-icon {
        -webkit-animation: swal2-animate-error-icon 0.5s;
        animation: swal2-animate-error-icon 0.5s;
    }

    .swal2-animate-error-icon .swal2-x-mark {
        -webkit-animation: swal2-animate-error-x-mark 0.5s;
        animation: swal2-animate-error-x-mark 0.5s;
    }

    @-webkit-keyframes swal2-rotate-loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes swal2-rotate-loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    </style>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <style>
    @-webkit-keyframes swal2-show {
        0% {
            -webkit-transform: scale(0.7);
            transform: scale(0.7);
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
        }

        80% {
            -webkit-transform: scale(0.95);
            transform: scale(0.95);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes swal2-show {
        0% {
            -webkit-transform: scale(0.7);
            transform: scale(0.7);
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
        }

        80% {
            -webkit-transform: scale(0.95);
            transform: scale(0.95);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @-webkit-keyframes swal2-hide {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
            opacity: 0;
        }
    }

    @keyframes swal2-hide {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
            opacity: 0;
        }
    }

    @-webkit-keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0;
        }

        54% {
            top: 1.0625em;
            left: .125em;
            width: 0;
        }

        70% {
            top: 2.1875em;
            left: -.375em;
            width: 3.125em;
        }

        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em;
        }

        100% {
            top: 2.8125em;
            left: .875em;
            width: 1.5625em;
        }
    }

    @keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0;
        }

        54% {
            top: 1.0625em;
            left: .125em;
            width: 0;
        }

        70% {
            top: 2.1875em;
            left: -.375em;
            width: 3.125em;
        }

        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em;
        }

        100% {
            top: 2.8125em;
            left: .875em;
            width: 1.5625em;
        }
    }

    @-webkit-keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }

        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }

        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em;
        }

        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
        }
    }

    @keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }

        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }

        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em;
        }

        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
        }
    }

    @-webkit-keyframes swal2-rotate-success-circular-line {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }

        100% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }
    }

    @keyframes swal2-rotate-success-circular-line {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }

        100% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }
    }

    @-webkit-keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }

        50% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }

        80% {
            margin-top: -.375em;
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
        }

        100% {
            margin-top: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }

        50% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }

        80% {
            margin-top: -.375em;
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
        }

        100% {
            margin-top: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @-webkit-keyframes swal2-animate-error-icon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0;
        }

        100% {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1;
        }
    }

    @keyframes swal2-animate-error-icon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0;
        }

        100% {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1;
        }
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast {
        flex-direction: column;
        align-items: stretch;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-actions {
        flex: 1;
        align-self: stretch;
        justify-content: flex-end;
        height: 2.2em;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-loading {
        justify-content: center;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-input {
        height: 2em;
        margin: .3125em auto;
        font-size: 1em;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-validationerror {
        font-size: 1em;
    }

    body.swal2-toast-shown>.swal2-container {
        position: fixed;
        background-color: transparent;
    }

    body.swal2-toast-shown>.swal2-container.swal2-shown {
        background-color: transparent;
    }

    body.swal2-toast-shown>.swal2-container.swal2-top {
        top: 0;
        right: auto;
        bottom: auto;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-top-end,
    body.swal2-toast-shown>.swal2-container.swal2-top-right {
        top: 0;
        right: 0;
        bottom: auto;
        left: auto;
    }

    body.swal2-toast-shown>.swal2-container.swal2-top-start,
    body.swal2-toast-shown>.swal2-container.swal2-top-left {
        top: 0;
        right: auto;
        bottom: auto;
        left: 0;
    }

    body.swal2-toast-shown>.swal2-container.swal2-center-start,
    body.swal2-toast-shown>.swal2-container.swal2-center-left {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-center {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-center-end,
    body.swal2-toast-shown>.swal2-container.swal2-center-right {
        top: 50%;
        right: 0;
        bottom: auto;
        left: auto;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom-start,
    body.swal2-toast-shown>.swal2-container.swal2-bottom-left {
        top: auto;
        right: auto;
        bottom: 0;
        left: 0;
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom {
        top: auto;
        right: auto;
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom-end,
    body.swal2-toast-shown>.swal2-container.swal2-bottom-right {
        top: auto;
        right: 0;
        bottom: 0;
        left: auto;
    }

    .swal2-popup.swal2-toast {
        flex-direction: row;
        align-items: center;
        width: auto;
        padding: 0.625em;
        box-shadow: 0 0 0.625em #d9d9d9;
        overflow-y: hidden;
    }

    .swal2-popup.swal2-toast .swal2-header {
        flex-direction: row;
    }

    .swal2-popup.swal2-toast .swal2-title {
        justify-content: flex-start;
        margin: 0 .6em;
        font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-close {
        position: initial;
    }

    .swal2-popup.swal2-toast .swal2-content {
        justify-content: flex-start;
        font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-icon {
        width: 2em;
        min-width: 2em;
        height: 2em;
        margin: 0;
    }

    .swal2-popup.swal2-toast .swal2-icon-text {
        font-size: 2em;
        font-weight: bold;
        line-height: 1em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
        top: .875em;
        width: 1.375em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: .3125em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: .3125em;
    }

    .swal2-popup.swal2-toast .swal2-actions {
        height: auto;
        margin: 0 .3125em;
    }

    .swal2-popup.swal2-toast .swal2-styled {
        margin: 0 .3125em;
        padding: .3125em .625em;
        font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-styled:focus {
        box-shadow: 0 0 0 0.0625em #fff, 0 0 0 0.125em rgba(50, 100, 150, 0.4);
    }

    .swal2-popup.swal2-toast .swal2-success {
        border-color: #a5dc86;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
        position: absolute;
        width: 2em;
        height: 2.8125em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        border-radius: 50%;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.25em;
        left: -.9375em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 2em 2em;
        transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.25em;
        left: .9375em;
        -webkit-transform-origin: 0 2em;
        transform-origin: 0 2em;
        border-radius: 0 4em 4em 0;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
        top: 0;
        left: .4375em;
        width: .4375em;
        height: 2.6875em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
        height: .3125em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 1.125em;
        left: .1875em;
        width: .75em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
        top: .9375em;
        right: .1875em;
        width: 1.375em;
    }

    .swal2-popup.swal2-toast.swal2-show {
        -webkit-animation: showSweetToast .5s;
        animation: showSweetToast .5s;
    }

    .swal2-popup.swal2-toast.swal2-hide {
        -webkit-animation: hideSweetToast .2s forwards;
        animation: hideSweetToast .2s forwards;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
        -webkit-animation: animate-toast-success-tip .75s;
        animation: animate-toast-success-tip .75s;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
        -webkit-animation: animate-toast-success-long .75s;
        animation: animate-toast-success-long .75s;
    }

    @-webkit-keyframes showSweetToast {
        0% {
            -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
            opacity: 0;
        }

        33% {
            -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
            opacity: .5;
        }

        66% {
            -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
            opacity: .7;
        }

        100% {
            -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
            opacity: 1;
        }
    }

    @keyframes showSweetToast {
        0% {
            -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
            opacity: 0;
        }

        33% {
            -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
            opacity: .5;
        }

        66% {
            -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
            opacity: .7;
        }

        100% {
            -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
            opacity: 1;
        }
    }

    @-webkit-keyframes hideSweetToast {
        0% {
            opacity: 1;
        }

        33% {
            opacity: .5;
        }

        100% {
            -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
            opacity: 0;
        }
    }

    @keyframes hideSweetToast {
        0% {
            opacity: 1;
        }

        33% {
            opacity: .5;
        }

        100% {
            -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
            opacity: 0;
        }
    }

    @-webkit-keyframes animate-toast-success-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0;
        }

        54% {
            top: .125em;
            left: .125em;
            width: 0;
        }

        70% {
            top: .625em;
            left: -.25em;
            width: 1.625em;
        }

        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em;
        }

        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em;
        }
    }

    @keyframes animate-toast-success-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0;
        }

        54% {
            top: .125em;
            left: .125em;
            width: 0;
        }

        70% {
            top: .625em;
            left: -.25em;
            width: 1.625em;
        }

        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em;
        }

        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em;
        }
    }

    @-webkit-keyframes animate-toast-success-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0;
        }

        65% {
            top: 1.25em;
            right: .9375em;
            width: 0;
        }

        84% {
            top: .9375em;
            right: 0;
            width: 1.125em;
        }

        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em;
        }
    }

    @keyframes animate-toast-success-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0;
        }

        65% {
            top: 1.25em;
            right: .9375em;
            width: 0;
        }

        84% {
            top: .9375em;
            right: 0;
            width: 1.125em;
        }

        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em;
        }
    }

    html.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown),
    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        height: auto;
        overflow-y: hidden;
    }

    body.swal2-no-backdrop .swal2-shown {
        top: auto;
        right: auto;
        bottom: auto;
        left: auto;
        background-color: transparent;
    }

    body.swal2-no-backdrop .swal2-shown>.swal2-modal {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top {
        top: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top-start,
    body.swal2-no-backdrop .swal2-shown.swal2-top-left {
        top: 0;
        left: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top-end,
    body.swal2-no-backdrop .swal2-shown.swal2-top-right {
        top: 0;
        right: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center {
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center-start,
    body.swal2-no-backdrop .swal2-shown.swal2-center-left {
        top: 50%;
        left: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center-end,
    body.swal2-no-backdrop .swal2-shown.swal2-center-right {
        top: 50%;
        right: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom {
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom-start,
    body.swal2-no-backdrop .swal2-shown.swal2-bottom-left {
        bottom: 0;
        left: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
    body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
        right: 0;
        bottom: 0;
    }

    .swal2-container {
        display: flex;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        padding: 10px;
        background-color: transparent;
        z-index: 1060;
        overflow-x: hidden;
        -webkit-overflow-scrolling: touch;
    }

    .swal2-container.swal2-top {
        align-items: flex-start;
    }

    .swal2-container.swal2-top-start,
    .swal2-container.swal2-top-left {
        align-items: flex-start;
        justify-content: flex-start;
    }

    .swal2-container.swal2-top-end,
    .swal2-container.swal2-top-right {
        align-items: flex-start;
        justify-content: flex-end;
    }

    .swal2-container.swal2-center {
        align-items: center;
    }

    .swal2-container.swal2-center-start,
    .swal2-container.swal2-center-left {
        align-items: center;
        justify-content: flex-start;
    }

    .swal2-container.swal2-center-end,
    .swal2-container.swal2-center-right {
        align-items: center;
        justify-content: flex-end;
    }

    .swal2-container.swal2-bottom {
        align-items: flex-end;
    }

    .swal2-container.swal2-bottom-start,
    .swal2-container.swal2-bottom-left {
        align-items: flex-end;
        justify-content: flex-start;
    }

    .swal2-container.swal2-bottom-end,
    .swal2-container.swal2-bottom-right {
        align-items: flex-end;
        justify-content: flex-end;
    }

    .swal2-container.swal2-grow-fullscreen>.swal2-modal {
        display: flex !important;
        flex: 1;
        align-self: stretch;
        justify-content: center;
    }

    .swal2-container.swal2-grow-row>.swal2-modal {
        display: flex !important;
        flex: 1;
        align-content: center;
        justify-content: center;
    }

    .swal2-container.swal2-grow-column {
        flex: 1;
        flex-direction: column;
    }

    .swal2-container.swal2-grow-column.swal2-top,
    .swal2-container.swal2-grow-column.swal2-center,
    .swal2-container.swal2-grow-column.swal2-bottom {
        align-items: center;
    }

    .swal2-container.swal2-grow-column.swal2-top-start,
    .swal2-container.swal2-grow-column.swal2-center-start,
    .swal2-container.swal2-grow-column.swal2-bottom-start,
    .swal2-container.swal2-grow-column.swal2-top-left,
    .swal2-container.swal2-grow-column.swal2-center-left,
    .swal2-container.swal2-grow-column.swal2-bottom-left {
        align-items: flex-start;
    }

    .swal2-container.swal2-grow-column.swal2-top-end,
    .swal2-container.swal2-grow-column.swal2-center-end,
    .swal2-container.swal2-grow-column.swal2-bottom-end,
    .swal2-container.swal2-grow-column.swal2-top-right,
    .swal2-container.swal2-grow-column.swal2-center-right,
    .swal2-container.swal2-grow-column.swal2-bottom-right {
        align-items: flex-end;
    }

    .swal2-container.swal2-grow-column>.swal2-modal {
        display: flex !important;
        flex: 1;
        align-content: center;
        justify-content: center;
    }

    .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right)>.swal2-modal {
        margin: auto;
    }

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .swal2-container .swal2-modal {
            margin: 0 !important;
        }
    }

    .swal2-container.swal2-fade {
        transition: background-color .1s;
    }

    .swal2-container.swal2-shown {
        background-color: rgba(0, 0, 0, 0.4);
    }

    .swal2-popup {
        display: none;
        position: relative;
        flex-direction: column;
        justify-content: center;
        width: 32em;
        max-width: 100%;
        padding: 1.25em;
        border-radius: 0.3125em;
        background: #fff;
        font-family: inherit;
        font-size: 1rem;
        box-sizing: border-box;
    }

    .swal2-popup:focus {
        outline: none;
    }

    .swal2-popup.swal2-loading {
        overflow-y: hidden;
    }

    .swal2-popup .swal2-header {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .swal2-popup .swal2-title {
        display: block;
        position: relative;
        max-width: 100%;
        margin: 0 0 0.4em;
        padding: 0;
        color: #131e22;
        font-size: 1.875em;
        font-weight: 500;
        text-align: center;
        text-transform: none;
        word-wrap: break-word;
    }

    .swal2-popup .swal2-actions {
        align-items: center;
        justify-content: center;
        margin: 1.25em auto 0;
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
        opacity: .4;
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
        background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));
    }

    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
        width: 2.5em;
        height: 2.5em;
        margin: .46875em;
        padding: 0;
        border: .25em solid transparent;
        border-radius: 100%;
        border-color: transparent;
        background-color: transparent !important;
        color: transparent;
        cursor: default;
        box-sizing: border-box;
        -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
        margin-right: 30px;
        margin-left: 30px;
    }

    .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
        display: inline-block;
        width: 15px;
        height: 15px;
        margin-left: 5px;
        border: 3px solid #999999;
        border-radius: 50%;
        border-right-color: transparent;
        box-shadow: 1px 1px 1px #fff;
        content: '';
        -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
    }

    .swal2-popup .swal2-styled {
        margin: 0 .3125em;
        padding: .625em 2em;
        font-weight: 500;
        box-shadow: none;
    }

    .swal2-popup .swal2-styled:not([disabled]) {
        cursor: pointer;
    }

    .swal2-popup .swal2-styled.swal2-confirm {
        border: 0;
        border-radius: 0.25em;
        background: initial;
        background-color: #3085d6;
        color: #fff;
        font-size: 1.0625em;
    }

    .swal2-popup .swal2-styled.swal2-cancel {
        border: 0;
        border-radius: 0.25em;
        background: initial;
        background-color: #aaa;
        color: #fff;
        font-size: 1.0625em;
    }

    .swal2-popup .swal2-styled:focus {
        outline: none;
        box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
    }

    .swal2-popup .swal2-styled::-moz-focus-inner {
        border: 0;
    }

    .swal2-popup .swal2-footer {
        justify-content: center;
        margin: 1.25em 0 0;
        padding-top: 1em;
        border-top: 1px solid #eee;
        color: #545454;
        font-size: 1em;
    }

    .swal2-popup .swal2-image {
        max-width: 100%;
        margin: 1.25em auto;
    }

    .swal2-popup .swal2-close {
        position: absolute;
        top: 0;
        right: 0;
        justify-content: center;
        width: 1.2em;
        min-width: 1.2em;
        height: 1.2em;
        margin: 0;
        padding: 0;
        transition: color 0.1s ease-out;
        border: none;
        border-radius: 0;
        background: transparent;
        color: #cccccc;
        font-family: serif;
        font-size: calc(2.5em - 0.25em);
        line-height: 1.2em;
        cursor: pointer;
    }

    .swal2-popup .swal2-close:hover {
        -webkit-transform: none;
        transform: none;
        color: #f27474;
    }

    .swal2-popup>.swal2-input,
    .swal2-popup>.swal2-file,
    .swal2-popup>.swal2-textarea,
    .swal2-popup>.swal2-select,
    .swal2-popup>.swal2-radio,
    .swal2-popup>.swal2-checkbox {
        display: none;
    }

    .swal2-popup .swal2-content {
        justify-content: center;
        margin: 0;
        padding: 0;
        color: #131e22;
        font-size: 1.125em;
        font-weight: 400;
        line-height: normal;
        word-wrap: break-word;
    }

    .swal2-popup #swal2-content {
        text-align: center;
    }

    .swal2-popup .swal2-input,
    .swal2-popup .swal2-file,
    .swal2-popup .swal2-textarea,
    .swal2-popup .swal2-select,
    .swal2-popup .swal2-radio,
    .swal2-popup .swal2-checkbox {
        margin: 1em auto;
    }

    .swal2-popup .swal2-input,
    .swal2-popup .swal2-file,
    .swal2-popup .swal2-textarea {
        width: 100%;
        transition: border-color .3s, box-shadow .3s;
        border: 1px solid #d9d9d9;
        border-radius: 0.1875em;
        font-size: 1.125em;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
        box-sizing: border-box;
    }

    .swal2-popup .swal2-input.swal2-inputerror,
    .swal2-popup .swal2-file.swal2-inputerror,
    .swal2-popup .swal2-textarea.swal2-inputerror {
        border-color: #f27474 !important;
        box-shadow: 0 0 2px #f27474 !important;
    }

    .swal2-popup .swal2-input:focus,
    .swal2-popup .swal2-file:focus,
    .swal2-popup .swal2-textarea:focus {
        border: 1px solid #b4dbed;
        outline: none;
        box-shadow: 0 0 3px #c4e6f5;
    }

    .swal2-popup .swal2-input::-webkit-input-placeholder,
    .swal2-popup .swal2-file::-webkit-input-placeholder,
    .swal2-popup .swal2-textarea::-webkit-input-placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-input:-ms-input-placeholder,
    .swal2-popup .swal2-file:-ms-input-placeholder,
    .swal2-popup .swal2-textarea:-ms-input-placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-input::-ms-input-placeholder,
    .swal2-popup .swal2-file::-ms-input-placeholder,
    .swal2-popup .swal2-textarea::-ms-input-placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-input::placeholder,
    .swal2-popup .swal2-file::placeholder,
    .swal2-popup .swal2-textarea::placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-range input {
        width: 80%;
    }

    .swal2-popup .swal2-range output {
        width: 20%;
        font-weight: 600;
        text-align: center;
    }

    .swal2-popup .swal2-range input,
    .swal2-popup .swal2-range output {
        height: 2.625em;
        margin: 1em auto;
        padding: 0;
        font-size: 1.125em;
        line-height: 2.625em;
    }

    .swal2-popup .swal2-input {
        height: 2.625em;
        padding: 0.75em;
    }

    .swal2-popup .swal2-input[type='number'] {
        max-width: 10em;
    }

    .swal2-popup .swal2-file {
        font-size: 1.125em;
    }

    .swal2-popup .swal2-textarea {
        height: 6.75em;
        padding: 0.75em;
    }

    .swal2-popup .swal2-select {
        min-width: 50%;
        max-width: 100%;
        padding: .375em .625em;
        color: #545454;
        font-size: 1.125em;
    }

    .swal2-popup .swal2-radio,
    .swal2-popup .swal2-checkbox {
        align-items: center;
        justify-content: center;
    }

    .swal2-popup .swal2-radio label,
    .swal2-popup .swal2-checkbox label {
        margin: 0 .6em;
        font-size: 1.125em;
    }

    .swal2-popup .swal2-radio input,
    .swal2-popup .swal2-checkbox input {
        margin: 0 .4em;
    }

    .swal2-popup .swal2-validationerror {
        display: none;
        align-items: center;
        justify-content: center;
        padding: 0.625em;
        background: #f0f0f0;
        color: #666666;
        font-size: 1em;
        font-weight: 300;
        overflow: hidden;
    }

    .swal2-popup .swal2-validationerror::before {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        margin: 0 .625em;
        border-radius: 50%;
        background-color: #f27474;
        color: #fff;
        font-weight: 600;
        line-height: 1.5em;
        text-align: center;
        content: '!';
        zoom: normal;
    }

    @supports (-ms-accelerator: true) {
        .swal2-range input {
            width: 100% !important;
        }

        .swal2-range output {
            display: none;
        }
    }

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .swal2-range input {
            width: 100% !important;
        }

        .swal2-range output {
            display: none;
        }
    }

    .swal2-icon {
        position: relative;
        justify-content: center;
        width: 5em;
        height: 5em;
        margin: 1.25em auto 1.875em;
        border: .25em solid transparent;
        border-radius: 50%;
        line-height: 5em;
        cursor: default;
        box-sizing: content-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        zoom: normal;
    }

    .swal2-icon-text {
        font-size: 3.75em;
    }

    .swal2-icon.swal2-error {
        border-color: #f27474;
    }

    .swal2-icon.swal2-error .swal2-x-mark {
        position: relative;
        flex-grow: 1;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
        display: block;
        position: absolute;
        top: 2.3125em;
        width: 2.9375em;
        height: .3125em;
        border-radius: .125em;
        background-color: #f27474;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: 1.0625em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: 1em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .swal2-icon.swal2-warning {
        border-color: #facea8;
        color: #f8bb86;
    }

    .swal2-icon.swal2-info {
        border-color: #9de0f6;
        color: #3fc3ee;
    }

    .swal2-icon.swal2-question {
        border-color: #c9dae1;
        color: #87adbd;
    }

    .swal2-icon.swal2-success {
        border-color: #a5dc86;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
        position: absolute;
        width: 3.75em;
        height: 7.5em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        border-radius: 50%;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.4375em;
        left: -2.0635em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 3.75em 3.75em;
        transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.6875em;
        left: 1.875em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0 3.75em;
        transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0;
    }

    .swal2-icon.swal2-success .swal2-success-ring {
        position: absolute;
        top: -.25em;
        left: -.25em;
        width: 100%;
        height: 100%;
        border: 0.25em solid rgba(165, 220, 134, 0.3);
        border-radius: 50%;
        z-index: 2;
        box-sizing: content-box;
    }

    .swal2-icon.swal2-success .swal2-success-fix {
        position: absolute;
        top: .5em;
        left: 1.625em;
        width: .4375em;
        height: 5.625em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        z-index: 1;
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'] {
        display: block;
        position: absolute;
        height: .3125em;
        border-radius: .125em;
        background-color: #a5dc86;
        z-index: 2;
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 2.875em;
        left: .875em;
        width: 1.5625em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
        top: 2.375em;
        right: .5em;
        width: 2.9375em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .swal2-progresssteps {
        align-items: center;
        margin: 0 0 1.25em;
        padding: 0;
        font-weight: 600;
    }

    .swal2-progresssteps li {
        display: inline-block;
        position: relative;
    }

    .swal2-progresssteps .swal2-progresscircle {
        width: 2em;
        height: 2em;
        border-radius: 2em;
        background: #3085d6;
        color: #fff;
        line-height: 2em;
        text-align: center;
        z-index: 20;
    }

    .swal2-progresssteps .swal2-progresscircle:first-child {
        margin-left: 0;
    }

    .swal2-progresssteps .swal2-progresscircle:last-child {
        margin-right: 0;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
        background: #3085d6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
        background: #add8e6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
        background: #add8e6;
    }

    .swal2-progresssteps .swal2-progressline {
        width: 2.5em;
        height: .4em;
        margin: 0 -1px;
        background: #3085d6;
        z-index: 10;
    }

    [class^='swal2'] {
        -webkit-tap-highlight-color: transparent;
    }

    .swal2-show {
        -webkit-animation: swal2-show 0.3s;
        animation: swal2-show 0.3s;
    }

    .swal2-show.swal2-noanimation {
        -webkit-animation: none;
        animation: none;
    }

    .swal2-hide {
        -webkit-animation: swal2-hide 0.15s forwards;
        animation: swal2-hide 0.15s forwards;
    }

    .swal2-hide.swal2-noanimation {
        -webkit-animation: none;
        animation: none;
    }

    [dir='rtl'] .swal2-close {
        right: auto;
        left: 0;
    }

    .swal2-animate-success-icon .swal2-success-line-tip {
        -webkit-animation: swal2-animate-success-line-tip 0.75s;
        animation: swal2-animate-success-line-tip 0.75s;
    }

    .swal2-animate-success-icon .swal2-success-line-long {
        -webkit-animation: swal2-animate-success-line-long 0.75s;
        animation: swal2-animate-success-line-long 0.75s;
    }

    .swal2-animate-success-icon .swal2-success-circular-line-right {
        -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
        animation: swal2-rotate-success-circular-line 4.25s ease-in;
    }

    .swal2-animate-error-icon {
        -webkit-animation: swal2-animate-error-icon 0.5s;
        animation: swal2-animate-error-icon 0.5s;
    }

    .swal2-animate-error-icon .swal2-x-mark {
        -webkit-animation: swal2-animate-error-x-mark 0.5s;
        animation: swal2-animate-error-x-mark 0.5s;
    }

    @-webkit-keyframes swal2-rotate-loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes swal2-rotate-loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    </style>
</head>

<body class="header-white sidebar-light active">
    <!-- echo header,rightsidebar,leftsidebar and loader -->
    <div class="pre-loader" style="display: none;">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="http://localhost/MS/assets/vendors/images/deskapp-logo.svg" alt=""></div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1" style="width: 100%;"></div>
            </div>
            <div class="percent" id="percent1">100%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div>

    <div class="header">
        <div class="header-left">
            <div class="menu-icon dw dw-menu"></div>


            <form>
                <div class="form-group mb-0">


                    <div class="dropdown">
                        <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">

                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll mCustomScrollbar _mCS_1 mCS_no_scrollbar">
                            <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside"
                                style="max-height: 0px;" tabindex="0">
                                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                    style="position:relative; top:0; left:0;" dir="ltr">
                                    <div id="mCSB_1" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside"
                                        style="max-height: 0px;" tabindex="0">
                                        <div id="mCSB_1_container"
                                            class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                            style="position:relative; top:0; left:0;" dir="ltr">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://localhost/MS/assets/vendors/images/img.jpg"
                                                            alt="" class="mCS_img_loaded">
                                                        <h3>John Doe</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed...</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://localhost/MS/assets/vendors/images/photo1.jpg"
                                                            alt="" class="mCS_img_loaded">
                                                        <h3>Lea R. Frith</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed...</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://localhost/MS/assets/vendors/images/photo2.jpg"
                                                            alt="" class="mCS_img_loaded">
                                                        <h3>Erik L. Richards</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed...</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://localhost/MS/assets/vendors/images/photo3.jpg"
                                                            alt="" class="mCS_img_loaded">
                                                        <h3>John Doe</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed...</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://localhost/MS/assets/vendors/images/photo4.jpg"
                                                            alt="" class="mCS_img_loaded">
                                                        <h3>Renee I. Hansen</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed...</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="http://localhost/MS/assets/vendors/images/img.jpg"
                                                            alt="" class="mCS_img_loaded">
                                                        <h3>Vicki M. Coleman</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed...</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="mCSB_1_scrollbar_vertical"
                                            class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand"
                                            style="display: none;">
                                            <div class="mCSB_draggerContainer">
                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                                    style="position: absolute; min-height: 30px; top: 0px;">
                                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                </div>
                                                <div class="mCSB_draggerRail"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="mCSB_1_scrollbar_vertical"
                                    class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                            style="position:absolute;">
                                            <div class="mCSB_dragger_bar"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">

                        <span class="user-name"> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                        <a class="dropdown-item" href="http://localhost/MS/deskapp/extrapages/profile"><i
                                class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="http://localhost/MS/deskapp/extrapages/profile"><i
                                class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="http://localhost/MS/deskapp/extrapages/faq"><i
                                class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="http://localhost/MS/deskapp/logout"><i class="dw dw-logout"></i>
                            Log Out</a>
                    </div>
                </div>
            </div>
            <div class="github-link">
                <a href="https://github.com/dropways/deskapp" target="_blank"></a>
            </div>
        </div>
    </div>

    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">

            </div>
        </div>
        <div class="right-sidebar-body customscroll mCustomScrollbar _mCS_2">
            <div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;"
                tabindex="0">
                <div id="mCSB_2_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                    <div id="mCSB_2" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside"
                        style="max-height: none;" tabindex="0">
                        <div id="mCSB_2_container" class="mCSB_container" style="position:relative; top:0; left:0;"
                            dir="ltr">
                            <div class="right-sidebar-body-content">
                                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                                <div class="sidebar-btn-group pb-30 mb-10">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-primary header-white active">White</a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                                </div>

                                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                                <div class="sidebar-btn-group pb-30 mb-10">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-primary sidebar-light active">White</a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark">Dark</a>
                                </div>

                                <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                                <div class="sidebar-radio-group pb-10 mb-10">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon"
                                            class="custom-control-input" value="icon-style-1" checked="">
                                        <label class="custom-control-label" for="sidebaricon-1"><i
                                                class="fa fa-angle-down"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon"
                                            class="custom-control-input" value="icon-style-2">
                                        <label class="custom-control-label" for="sidebaricon-2"><i
                                                class="ion-plus-round"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon"
                                            class="custom-control-input" value="icon-style-3">
                                        <label class="custom-control-label" for="sidebaricon-3"><i
                                                class="fa fa-angle-double-right"></i></label>
                                    </div>
                                </div>

                                <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                                <div class="sidebar-radio-group pb-30 mb-10">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="sidebariconlist-1" name="menu-list-icon"
                                            class="custom-control-input" value="icon-list-style-1" checked="">
                                        <label class="custom-control-label" for="sidebariconlist-1"><i
                                                class="ion-minus-round"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="sidebariconlist-2" name="menu-list-icon"
                                            class="custom-control-input" value="icon-list-style-2">
                                        <label class="custom-control-label" for="sidebariconlist-2"><i
                                                class="fa fa-circle-o" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="sidebariconlist-3" name="menu-list-icon"
                                            class="custom-control-input" value="icon-list-style-3">
                                        <label class="custom-control-label" for="sidebariconlist-3"><i
                                                class="dw dw-check"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="sidebariconlist-4" name="menu-list-icon"
                                            class="custom-control-input" value="icon-list-style-4" checked="">
                                        <label class="custom-control-label" for="sidebariconlist-4"><i
                                                class="icon-copy dw dw-next-2"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="sidebariconlist-5" name="menu-list-icon"
                                            class="custom-control-input" value="icon-list-style-5">
                                        <label class="custom-control-label" for="sidebariconlist-5"><i
                                                class="dw dw-fast-forward-1"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="sidebariconlist-6" name="menu-list-icon"
                                            class="custom-control-input" value="icon-list-style-6">
                                        <label class="custom-control-label" for="sidebariconlist-6"><i
                                                class="dw dw-next"></i></label>
                                    </div>
                                </div>

                                <div class="reset-options pt-30 text-center">
                                    <button class="btn btn-danger" id="reset-settings">Reset Settings</button>
                                </div>
                            </div>
                        </div>
                        <div id="mCSB_2_scrollbar_vertical"
                            class="mCSB_scrollTools mCSB_2_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand"
                            style="display: block;">
                            <div class="mCSB_draggerContainer">
                                <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                                    style="position: absolute; min-height: 543.993px; display: block; height: 573px; max-height: 593.97px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 543px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mCSB_2_scrollbar_vertical"
                    class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical">
                    <div class="mCSB_draggerContainer">
                        <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                            <div class="mCSB_dragger_bar"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="http://localhost/MS/deskapp/dashboard">
                <img src="http://localhost/MS/assets/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
                <img src="http://localhost/MS/assets/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll mCustomScrollbar _mCS_3">
            <div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;"
                tabindex="0">
                <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                    <div id="mCSB_3" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside"
                        style="max-height: none;" tabindex="0">
                        <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;"
                            dir="ltr">
                            <div class="sidebar-menu icon-style-1 icon-list-style-1">
                                <ul id="accordion-menu">
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="http://localhost/MS/deskapp/dashboard">Dashboard style 1</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/dashboard/two">Dashboard style
                                                    2</a></li>
                                            <li><a href="http://localhost/MS/deskapp/dashboard/three">Dashboard style
                                                    3</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="http://localhost/MS/deskapp/forms/basic">Form Basic</a></li>
                                            <li><a href="http://localhost/MS/deskapp/forms/advance">Advanced
                                                    Components</a></li>
                                            <li><a href="http://localhost/MS/deskapp/forms/wizard">Form Wizard</a></li>
                                            <li><a href="http://localhost/MS/deskapp/forms/html5Editor">HTML5 Editor</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/forms/pickers">Form Pickers</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/forms/imageCropper">Image
                                                    Cropper</a></li>
                                            <li><a href="http://localhost/MS/deskapp/forms/imageDropZone">Image
                                                    Dropzone</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-library"></span><span class="mtext">Tables</span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="http://localhost/MS/deskapp/tables/basic">Basic Tables</a></li>
                                            <li><a href="http://localhost/MS/deskapp/tables/datatable">DataTables</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="http://localhost/MS/deskapp/calendar" class="dropdown-toggle no-arrow">
                                            <span class="micon dw dw-calendar1"></span><span
                                                class="mtext">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements
                                            </span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="http://localhost/MS/deskapp/ui/buttons">Buttons</a></li>
                                            <li><a href="http://localhost/MS/deskapp/ui/cards">Cards</a></li>
                                            <li><a href="http://localhost/MS/deskapp/ui/cardsHover">Cards Hover</a></li>
                                            <li><a href="http://localhost/MS/deskapp/ui/modals">Modals</a></li>
                                            <li><a href="http://localhost/MS/deskapp/ui/tabs">Tabs</a></li>
                                            <li><a href="http://localhost/MS/deskapp/ui/tooltip">Tooltip &amp;
                                                    Popover</a></li>

                                            <li><a href="http://localhost/MS/deskapp/ui/sweetAlert">Sweet Alert</a></li>
                                            <li><a href="http://localhost/MS/deskapp/ui/notification">Notification</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/ui/timeline">Timeline</a></li>
                                            <li><a href="http://localhost/MS/deskapp/ui/progressbar">Progressbar</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/ui/typography">Typography</a></li>
                                            <li><a href="http://localhost/MS/deskapp/ui/listgroup">List group</a></li>
                                            <li><a href="http://localhost/MS/deskapp/ui/rangeSlider">Range slider</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/ui/carousel">Carousel</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-paint-brush"></span><span
                                                class="mtext">Icons</span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="http://localhost/MS/deskapp/icons/fontawesome">FontAwesome
                                                    Icons</a></li>
                                            <li><a href="http://localhost/MS/deskapp/icons/foundation">Foundation
                                                    Icons</a></li>
                                            <li><a href="http://localhost/MS/deskapp/icons/ionicons">Ionicons Icons</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/icons/themify">Themify Icons</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/icons/custom">Custom Icons</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-analytics-21"></span><span
                                                class="mtext">Charts</span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="http://localhost/MS/deskapp/charts/highchart">Highchart</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/charts/knobchart">jQuery Knob</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/charts/jvectormap">jvectormap</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/charts/apexcharts">Apexcharts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional
                                                Pages</span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="http://localhost/MS/deskapp/Additionalpages/videoplayer">Video
                                                    Player</a></li>
                                            <li><a href="http://localhost/MS/deskapp/Additionalpages/login">Login</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/Additionalpages/forgot_password">Forgot
                                                    Password</a></li>
                                            <li><a href="http://localhost/MS/deskapp/Additionalpages/reset_password">Reset
                                                    Password</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-browser2"></span><span class="mtext">Error
                                                Pages</span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="http://localhost/MS/deskapp/error/error_400">400</a></li>
                                            <li><a href="http://localhost/MS/deskapp/error/error_403">403</a></li>
                                            <li><a href="http://localhost/MS/deskapp/error/error_404">404</a></li>
                                            <li><a href="http://localhost/MS/deskapp/error/error_500">500</a></li>
                                            <li><a href="http://localhost/MS/deskapp/error/error_503">503</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="http://localhost/MS/deskapp/extrapages/blank">Blank</a></li>
                                            <li><a href="http://localhost/MS/deskapp/extrapages/contact_directory">Contact
                                                    Directory</a></li>
                                            <li><a href="http://localhost/MS/deskapp/extrapages/blog">Blog</a></li>
                                            <li><a href="http://localhost/MS/deskapp/extrapages/blog_detail">Blog
                                                    Detail</a></li>
                                            <li><a href="http://localhost/MS/deskapp/extrapages/product">Product</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/extrapages/product_detail">Product
                                                    Detail</a></li>
                                            <li><a href="http://localhost/MS/deskapp/extrapages/faq">FAQ</a></li>
                                            <li><a href="http://localhost/MS/deskapp/extrapages/profile">Profile</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/extrapages/gallery">Gallery</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/extrapages/pricing">Pricing
                                                    Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-list3"></span><span class="mtext">Multi Level
                                                Menu</span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="javascript:;">Level 1</a></li>
                                            <li><a href="javascript:;">Level 1</a></li>
                                            <li><a href="javascript:;">Level 1</a></li>
                                            <li class="dropdown">
                                                <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                                    <span class="micon fa fa-plug"></span><span class="mtext">Level
                                                        2</span>
                                                </a>
                                                <ul class="submenu child">
                                                    <li><a href="javascript:;">Level 2</a></li>
                                                    <li><a href="javascript:;">Level 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:;">Level 1</a></li>
                                            <li><a href="javascript:;">Level 1</a></li>
                                            <li><a href="javascript:;">Level 1</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="http://localhost/MS/deskapp/sitemap" class="dropdown-toggle no-arrow">
                                            <span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/MS/deskapp/chat" class="dropdown-toggle no-arrow">
                                            <span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/MS/deskapp/invoice" class="dropdown-toggle no-arrow">
                                            <span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <div class="sidebar-small-cap">Extra</div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                            <span class="micon dw dw-edit-2"></span><span
                                                class="mtext">Documentation</span>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="http://localhost/MS/deskapp/docs/introduction">Introduction</a>
                                            </li>
                                            <li><a href="http://localhost/MS/deskapp/docs/getting_started">Getting
                                                    Started</a></li>
                                            <li><a href="http://localhost/MS/deskapp/docs/color_settings">Color
                                                    Settings</a></li>
                                            <li><a href="http://localhost/MS/deskapp/docs/third_party_plugins">Third
                                                    Party Plugins</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="https://dropways.github.io/deskapp-free-single-page-website-template/"
                                            target="_blank" class="dropdown-toggle no-arrow">
                                            <span class="micon dw dw-paper-plane1"></span>
                                            <span class="mtext">Landing Page <img
                                                    src="http://localhost/MS/assets/vendors/images/coming-soon.png"
                                                    alt="" width="25" class="mCS_img_loaded"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="mCSB_3_scrollbar_vertical"
                            class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand"
                            style="display: block;">
                            <div class="mCSB_draggerContainer">
                                <div id="mCSB_3_dragger_vertical" class="mCSB_dragger"
                                    style="position: absolute; min-height: 325.995px; display: block; height: 591px; max-height: 1064.32px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 325px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mCSB_3_scrollbar_vertical"
                    class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical">
                    <div class="mCSB_draggerContainer">
                        <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                            <div class="mCSB_dragger_bar"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>All Projects</h4>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row clearfix">

                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

                    <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f2f2f2;
                    }

                    .project-card {
                        background-color: #fff;
                        border-radius: 5px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        padding: 20px;
                        width: 300px;
                        margin-left: 20px auto;
                    }

                    .project-card h2 {
                        font-size: 24px;
                        margin: 0 0 10px;
                        color: #007bff;
                    }

                    .project-info {
                        display: flex;
                        align-items: center;
                        margin-bottom: 10px;
                    }

                    .project-info .icon {
                        font-size: 24px;
                        margin-right: 10px;
                        color: #007bff;
                    }

                    .project-info span {
                        color: #444;
                    }

                    .buttons {
                        display: flex;
                        justify-content: space-between;
                    }

                    .btn {
                        padding: 8px 12px;
                        border: none;
                        border-radius: 5px;
                        color: #fff;
                        cursor: pointer;
                        font-size: 14px;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        transition: background-color 0.3s ease;
                    }

                    .btn-edit {
                        background-color: #007bff;
                    }

                    .btn-view {
                        background-color: #28a745;
                    }

                    .btn-edit:hover,
                    .btn-view:hover {
                        background-color: #0056b3;
                    }
                    </style>
                    </head>

                    <body>
                        <div class="project-card">
                            <h2>Project Name</h2>
                            <div class="project-info">
                                <span class="icon"><i class="fas fa-rocket"></i></span>
                                <span>Project State</span>
                            </div>

                            <div class="project-info">
                                <span class="icon"><i class="fas fa-user-tie"></i></span>
                                <span>Project Manager</span>
                            </div>
                            <div class="buttons">
							<i class="dw dw-edit2"></i> Edit</a>

                                <button class="btn btn-edit"  href="http://localhost/MS/deskapp/ui/edit/<?= $user['id_mem'] ?>"> >Edit</button>
                                <button class="btn btn-view">View</button>
                            </div>
                        </div>










                </div>
            </div>
            <!-- footer -->
        </div>
    </div>
    <!-- js -->
    <script src="http://localhost/MS/assets/vendors/scripts/core.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/script.min.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/process.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/layout-settings.js"></script>

    <!-- add sweet alert js & css in footer -->
    <script src="http://localhost/MS/assets/src/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="http://localhost/MS/assets/src/plugins/sweetalert2/sweet-alert.init.js"></script>


</body>

</html>