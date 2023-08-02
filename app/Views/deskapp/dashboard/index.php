<!DOCTYPE html>

<html><head>
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="http://localhost/MS/assets/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/MS/assets/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/MS/assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/MS/assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/MS/assets/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
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
    <style type="text/css">
    .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }

    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }

    .apexcharts-canvas.apexcharts-theme-dark {
        background: #343F57;
    }

    .apexcharts-inner {
        position: relative;
    }

    .apexcharts-text tspan {
        font-family: inherit;
    }

    .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
    }

    .apexcharts-series-collapsed {
        opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect {
        pointer-events: none;
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
        font-family: inherit;
    }

    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line {
        pointer-events: none;
    }

    .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
        display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        font-weight: 600;
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
        opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
    }

    .apexcharts-tooltip-candlestick {
        padding: 4px 8px;
    }

    .apexcharts-tooltip-candlestick>div {
        margin: 4px 0;
    }

    .apexcharts-tooltip-candlestick span.value {
        font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
        top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
    }


    .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
        left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
        right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
        display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0;
    }

    .apexcharts-zoom-rect {
        pointer-events: none;
    }

    .apexcharts-selection-rect {
        cursor: move;
    }

    .svg_select_points,
    .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
    }

    .svg_select_points_l,
    .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
        fill: #888;
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
        cursor: crosshair
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
        cursor: move
    }


    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
    }


    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
        fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
        fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
        fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
        position: relative;
    }

    .apexcharts-reset-icon {
        margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
        transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
        transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
        margin-right: 3px;
    }

    .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
    }

    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        top: 0px;
        right: 3px;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .apexcharts-toolbar svg {
        pointer-events: none;
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    @media screen and (min-width: 768px) {

        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1;
        }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
    }

    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
        pointer-events: none;
    }

    /* markers */

    .apexcharts-marker {
        transition: 0.15s ease all;
    }

    @keyframes opaque {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* Resize generated styles */
    @keyframes resizeanim {
        from {
            opacity: 0;
        }

        to {
            opacity: 0;
        }
    }

    .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }

    .resize-triggers>div {
        background: #eee;
        overflow: auto;
    }

    .contract-trigger:before {
        width: 200%;
        height: 200%;
    }
    </style>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <style type="text/css">
    .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }

    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }

    .apexcharts-canvas.apexcharts-theme-dark {
        background: #343F57;
    }

    .apexcharts-inner {
        position: relative;
    }

    .apexcharts-text tspan {
        font-family: inherit;
    }

    .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
    }

    .apexcharts-series-collapsed {
        opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect {
        pointer-events: none;
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
        font-family: inherit;
    }

    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line {
        pointer-events: none;
    }

    .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
        display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        font-weight: 600;
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
        opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
    }

    .apexcharts-tooltip-candlestick {
        padding: 4px 8px;
    }

    .apexcharts-tooltip-candlestick>div {
        margin: 4px 0;
    }

    .apexcharts-tooltip-candlestick span.value {
        font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
        top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
    }


    .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
        left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
        right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
        display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0;
    }

    .apexcharts-zoom-rect {
        pointer-events: none;
    }

    .apexcharts-selection-rect {
        cursor: move;
    }

    .svg_select_points,
    .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
    }

    .svg_select_points_l,
    .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
        fill: #888;
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
        cursor: crosshair
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
        cursor: move
    }


    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
    }


    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
        fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
        fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
        fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
        position: relative;
    }

    .apexcharts-reset-icon {
        margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
        transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
        transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
        margin-right: 3px;
    }

    .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
    }

    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        top: 0px;
        right: 3px;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .apexcharts-toolbar svg {
        pointer-events: none;
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    @media screen and (min-width: 768px) {

        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1;
        }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
    }

    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
        pointer-events: none;
    }

    /* markers */

    .apexcharts-marker {
        transition: 0.15s ease all;
    }

    @keyframes opaque {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* Resize generated styles */
    @keyframes resizeanim {
        from {
            opacity: 0;
        }

        to {
            opacity: 0;
        }
    }

    .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }

    .resize-triggers>div {
        background: #eee;
        overflow: auto;
    }

    .contract-trigger:before {
        width: 200%;
        height: 200%;
    }

    /* card style*/

    .all_Cards {

        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .card-container {
        display: flex;
    }

    .card {
        width: 480px;
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 80px;
        margin: 20px;
        text-align: center;
    }

    .card_icon {
        font-size: 48px;
        color: #3366cc;
    }

    .card_title {
        font-size: 24px;
        margin: 10px 0;
        color: #333333;
    }

    .card_button-container {
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
    }

    .card_button {
        padding: 10px 20px;
        background-color: #3366cc;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Flexbox to center the button in the card */
    .card_center-button {
        display: flex;
        justify-content: center;
    }

    .card_footer {
        font-size: 14px;
        color: #999999;
    }
    </style>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <style type="text/css">
    .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }

    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }

    .apexcharts-canvas.apexcharts-theme-dark {
        background: #343F57;
    }

    .apexcharts-inner {
        position: relative;
    }

    .apexcharts-text tspan {
        font-family: inherit;
    }

    .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
    }

    .apexcharts-series-collapsed {
        opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect {
        pointer-events: none;
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
        font-family: inherit;
    }

    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line {
        pointer-events: none;
    }

    .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
        display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        font-weight: 600;
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
        opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
    }

    .apexcharts-tooltip-candlestick {
        padding: 4px 8px;
    }

    .apexcharts-tooltip-candlestick>div {
        margin: 4px 0;
    }

    .apexcharts-tooltip-candlestick span.value {
        font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
        top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
    }


    .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
        left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
        right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
        display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0;
    }

    .apexcharts-zoom-rect {
        pointer-events: none;
    }

    .apexcharts-selection-rect {
        cursor: move;
    }

    .svg_select_points,
    .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
    }

    .svg_select_points_l,
    .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
        fill: #888;
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
        cursor: crosshair
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
        cursor: move
    }


    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
    }


    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
        fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
        fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
        fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
        position: relative;
    }

    .apexcharts-reset-icon {
        margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
        transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
        transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
        margin-right: 3px;
    }

    .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
    }

    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        top: 0px;
        right: 3px;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .apexcharts-toolbar svg {
        pointer-events: none;
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    @media screen and (min-width: 768px) {

        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1;
        }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
    }

    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
        pointer-events: none;
    }

    /* markers */

    .apexcharts-marker {
        transition: 0.15s ease all;
    }

    @keyframes opaque {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* Resize generated styles */
    @keyframes resizeanim {
        from {
            opacity: 0;
        }

        to {
            opacity: 0;
        }
    }

    .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }

    .resize-triggers>div {
        background: #eee;
        overflow: auto;
    }

    .contract-trigger:before {
        width: 200%;
        height: 200%;
    }
    </style>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <style type="text/css">
    .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }

    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }

    .apexcharts-canvas.apexcharts-theme-dark {
        background: #343F57;
    }

    .apexcharts-inner {
        position: relative;
    }

    .apexcharts-text tspan {
        font-family: inherit;
    }

    .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
    }

    .apexcharts-series-collapsed {
        opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect {
        pointer-events: none;
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
        font-family: inherit;
    }

    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line {
        pointer-events: none;
    }

    .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
        display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        font-weight: 600;
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
        opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
    }

    .apexcharts-tooltip-candlestick {
        padding: 4px 8px;
    }

    .apexcharts-tooltip-candlestick>div {
        margin: 4px 0;
    }

    .apexcharts-tooltip-candlestick span.value {
        font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
        top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
    }


    .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
        left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
        right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
        display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0;
    }

    .apexcharts-zoom-rect {
        pointer-events: none;
    }

    .apexcharts-selection-rect {
        cursor: move;
    }

    .svg_select_points,
    .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
    }

    .svg_select_points_l,
    .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
        fill: #888;
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
        cursor: crosshair
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
        cursor: move
    }


    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
    }


    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
        fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
        fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
        fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
        position: relative;
    }

    .apexcharts-reset-icon {
        margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
        transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
        transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
        margin-right: 3px;
    }

    .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
    }

    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        top: 0px;
        right: 3px;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .apexcharts-toolbar svg {
        pointer-events: none;
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    @media screen and (min-width: 768px) {

        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1;
        }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
    }

    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
        pointer-events: none;
    }

    /* markers */

    .apexcharts-marker {
        transition: 0.15s ease all;
    }

    @keyframes opaque {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* Resize generated styles */
    @keyframes resizeanim {
        from {
            opacity: 0;
        }

        to {
            opacity: 0;
        }
    }

    .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }

    .resize-triggers>div {
        background: #eee;
        overflow: auto;
    }

    .contract-trigger:before {
        width: 200%;
        height: 200%;
    }
    </style>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <style type="text/css">
    .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }

    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }

    .apexcharts-canvas.apexcharts-theme-dark {
        background: #343F57;
    }

    .apexcharts-inner {
        position: relative;
    }

    .apexcharts-text tspan {
        font-family: inherit;
    }

    .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
    }

    .apexcharts-series-collapsed {
        opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect {
        pointer-events: none;
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
        font-family: inherit;
    }

    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line {
        pointer-events: none;
    }

    .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
        display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        font-weight: 600;
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
        opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
    }

    .apexcharts-tooltip-candlestick {
        padding: 4px 8px;
    }

    .apexcharts-tooltip-candlestick>div {
        margin: 4px 0;
    }

    .apexcharts-tooltip-candlestick span.value {
        font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
        top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
    }


    .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
        left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
        right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
        display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0;
    }

    .apexcharts-zoom-rect {
        pointer-events: none;
    }

    .apexcharts-selection-rect {
        cursor: move;
    }

    .svg_select_points,
    .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
    }

    .svg_select_points_l,
    .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
        fill: #888;
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
        cursor: crosshair
    }

    .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
        cursor: move
    }


    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
    }


    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
        fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
        fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
        fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
        position: relative;
    }

    .apexcharts-reset-icon {
        margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
        transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
        transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
        margin-right: 3px;
    }

    .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
    }

    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        top: 0px;
        right: 3px;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .apexcharts-toolbar svg {
        pointer-events: none;
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    @media screen and (min-width: 768px) {

        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1;
        }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
    }

    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
        pointer-events: none;
    }

    /* markers */

    .apexcharts-marker {
        transition: 0.15s ease all;
    }

    @keyframes opaque {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* Resize generated styles */
    @keyframes resizeanim {
        from {
            opacity: 0;
        }

        to {
            opacity: 0;
        }
    }

    .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }

    .resize-triggers>div {
        background: #eee;
        overflow: auto;
    }

    .contract-trigger:before {
        width: 200%;
        height: 200%;
    }
    </style>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script><style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}

/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}
.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(255,255,255,.5);
  -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
}
.apexcharts-canvas.apexcharts-theme-dark {
  background: #343F57;
}

.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-gridline, .apexcharts-annotation-rect {
  pointer-events: none;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}
.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}
.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30,30,30, 0.8);
}
.apexcharts-tooltip * {
  font-family: inherit;
}

.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line {
  pointer-events: none;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}
.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}
.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}
.apexcharts-tooltip-series-group.apexcharts-active, .apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}
.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}
.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}
.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}
.apexcharts-tooltip-candlestick > div {
  margin: 4px 0;
}
.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}
.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}
.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color:#ECEFF1
}
.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color:rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}


.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}
.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}
.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}
.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}
.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active, .apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-zoom-rect {
  pointer-events: none;
}
.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_points, .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}
.svg_select_points_l, .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
  fill: #888;
}
.apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
  cursor: crosshair
}
.apexcharts-canvas.apexcharts-zoomable .hovering-pan {
  cursor: move
}


.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}


.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}
.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg{
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}
.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon, .apexcharts-menu-icon {
  position: relative;
}
.apexcharts-reset-icon {
  margin-left: 5px;
}
.apexcharts-zoom-icon, .apexcharts-reset-icon, .apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}
.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}
.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}
.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  top: 0px;
  right: 3px;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-toolbar svg {
  pointer-events: none;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}
.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}
.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {

  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels, .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
  pointer-events: none;
}

/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Resize generated styles */
@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers, .resize-triggers > div, .contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers > div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}
</style><script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script><style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}

/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}
.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(255,255,255,.5);
  -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
}
.apexcharts-canvas.apexcharts-theme-dark {
  background: #343F57;
}

.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-gridline, .apexcharts-annotation-rect {
  pointer-events: none;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}
.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}
.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30,30,30, 0.8);
}
.apexcharts-tooltip * {
  font-family: inherit;
}

.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line {
  pointer-events: none;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}
.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}
.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}
.apexcharts-tooltip-series-group.apexcharts-active, .apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}
.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}
.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}
.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}
.apexcharts-tooltip-candlestick > div {
  margin: 4px 0;
}
.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}
.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}
.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color:#ECEFF1
}
.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color:rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}


.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}
.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}
.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}
.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}
.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active, .apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-zoom-rect {
  pointer-events: none;
}
.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_points, .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}
.svg_select_points_l, .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
  fill: #888;
}
.apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
  cursor: crosshair
}
.apexcharts-canvas.apexcharts-zoomable .hovering-pan {
  cursor: move
}


.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}


.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}
.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg{
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}
.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon, .apexcharts-menu-icon {
  position: relative;
}
.apexcharts-reset-icon {
  margin-left: 5px;
}
.apexcharts-zoom-icon, .apexcharts-reset-icon, .apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}
.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}
.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}
.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  top: 0px;
  right: 3px;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-toolbar svg {
  pointer-events: none;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}
.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}
.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {

  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels, .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
  pointer-events: none;
}

/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Resize generated styles */
@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers, .resize-triggers > div, .contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers > div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}
</style><script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script><style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}

/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}
.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(255,255,255,.5);
  -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
}
.apexcharts-canvas.apexcharts-theme-dark {
  background: #343F57;
}

.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-gridline, .apexcharts-annotation-rect {
  pointer-events: none;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}
.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}
.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30,30,30, 0.8);
}
.apexcharts-tooltip * {
  font-family: inherit;
}

.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line {
  pointer-events: none;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}
.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}
.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}
.apexcharts-tooltip-series-group.apexcharts-active, .apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}
.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}
.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}
.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}
.apexcharts-tooltip-candlestick > div {
  margin: 4px 0;
}
.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}
.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}
.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color:#ECEFF1
}
.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color:rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}


.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}
.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}
.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}
.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}
.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active, .apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-zoom-rect {
  pointer-events: none;
}
.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_points, .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}
.svg_select_points_l, .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
  fill: #888;
}
.apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
  cursor: crosshair
}
.apexcharts-canvas.apexcharts-zoomable .hovering-pan {
  cursor: move
}


.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}


.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}
.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg{
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}
.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon, .apexcharts-menu-icon {
  position: relative;
}
.apexcharts-reset-icon {
  margin-left: 5px;
}
.apexcharts-zoom-icon, .apexcharts-reset-icon, .apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}
.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}
.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}
.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  top: 0px;
  right: 3px;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-toolbar svg {
  pointer-events: none;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}
.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}
.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {

  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels, .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
  pointer-events: none;
}

/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Resize generated styles */
@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers, .resize-triggers > div, .contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers > div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}
</style><script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script><style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}

/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}
.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(255,255,255,.5);
  -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
}
.apexcharts-canvas.apexcharts-theme-dark {
  background: #343F57;
}

.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-gridline, .apexcharts-annotation-rect {
  pointer-events: none;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}
.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}
.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30,30,30, 0.8);
}
.apexcharts-tooltip * {
  font-family: inherit;
}

.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line {
  pointer-events: none;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}
.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}
.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}
.apexcharts-tooltip-series-group.apexcharts-active, .apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}
.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}
.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}
.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}
.apexcharts-tooltip-candlestick > div {
  margin: 4px 0;
}
.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}
.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}
.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color:#ECEFF1
}
.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color:rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}


.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}
.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}
.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}
.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}
.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active, .apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-zoom-rect {
  pointer-events: none;
}
.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_points, .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}
.svg_select_points_l, .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
  fill: #888;
}
.apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
  cursor: crosshair
}
.apexcharts-canvas.apexcharts-zoomable .hovering-pan {
  cursor: move
}


.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}


.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}
.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg{
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}
.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon, .apexcharts-menu-icon {
  position: relative;
}
.apexcharts-reset-icon {
  margin-left: 5px;
}
.apexcharts-zoom-icon, .apexcharts-reset-icon, .apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}
.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}
.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}
.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  top: 0px;
  right: 3px;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-toolbar svg {
  pointer-events: none;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}
.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}
.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {

  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels, .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
  pointer-events: none;
}

/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Resize generated styles */
@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers, .resize-triggers > div, .contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers > div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}
</style><script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script><style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}

/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}
.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(255,255,255,.5);
  -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
}
.apexcharts-canvas.apexcharts-theme-dark {
  background: #343F57;
}

.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-gridline, .apexcharts-annotation-rect {
  pointer-events: none;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}
.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}
.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30,30,30, 0.8);
}
.apexcharts-tooltip * {
  font-family: inherit;
}

.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line {
  pointer-events: none;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}
.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}
.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}
.apexcharts-tooltip-series-group.apexcharts-active, .apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}
.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}
.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}
.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}
.apexcharts-tooltip-candlestick > div {
  margin: 4px 0;
}
.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}
.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}
.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color:#ECEFF1
}
.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color:rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}


.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}
.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}
.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}
.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}
.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active, .apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-zoom-rect {
  pointer-events: none;
}
.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_points, .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}
.svg_select_points_l, .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
  fill: #888;
}
.apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
  cursor: crosshair
}
.apexcharts-canvas.apexcharts-zoomable .hovering-pan {
  cursor: move
}


.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}


.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}
.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg{
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}
.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon, .apexcharts-menu-icon {
  position: relative;
}
.apexcharts-reset-icon {
  margin-left: 5px;
}
.apexcharts-zoom-icon, .apexcharts-reset-icon, .apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}
.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}
.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}
.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  top: 0px;
  right: 3px;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-toolbar svg {
  pointer-events: none;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}
.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}
.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {

  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels, .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
  pointer-events: none;
}

/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Resize generated styles */
@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers, .resize-triggers > div, .contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers > div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}
</style><script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script><style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}

/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}
.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(255,255,255,.5);
  -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
}
.apexcharts-canvas.apexcharts-theme-dark {
  background: #343F57;
}

.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-gridline, .apexcharts-annotation-rect {
  pointer-events: none;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}
.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}
.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30,30,30, 0.8);
}
.apexcharts-tooltip * {
  font-family: inherit;
}

.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line {
  pointer-events: none;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}
.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}
.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}
.apexcharts-tooltip-series-group.apexcharts-active, .apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}
.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}
.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}
.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}
.apexcharts-tooltip-candlestick > div {
  margin: 4px 0;
}
.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}
.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}
.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color:#ECEFF1
}
.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color:rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}


.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}
.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}
.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}
.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}
.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active, .apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-zoom-rect {
  pointer-events: none;
}
.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_points, .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}
.svg_select_points_l, .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
  fill: #888;
}
.apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
  cursor: crosshair
}
.apexcharts-canvas.apexcharts-zoomable .hovering-pan {
  cursor: move
}


.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}


.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}
.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg{
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}
.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon, .apexcharts-menu-icon {
  position: relative;
}
.apexcharts-reset-icon {
  margin-left: 5px;
}
.apexcharts-zoom-icon, .apexcharts-reset-icon, .apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}
.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}
.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}
.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  top: 0px;
  right: 3px;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-toolbar svg {
  pointer-events: none;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}
.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}
.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {

  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels, .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
  pointer-events: none;
}

/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* Resize generated styles */
@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers, .resize-triggers > div, .contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers > div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}
</style></head>

<body class="header-white active sidebar-dark" data-new-gr-c-s-check-loaded="14.1117.0" data-gr-ext-installed="">
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
            

        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        
                    </a>
                </div>
            </div>
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style="">
                        <div class="notification-list mx-h-350 customscroll mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                            <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0">
                                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                    <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0">
                                        <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                            <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0">
                                                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0">
                                                        <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                            <div id="mCSB_1" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0">
                                                                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">
                                                                                <img src="http://localhost/MS/assets/vendors/images/img.jpg" alt="" class="mCS_img_loaded">
                                                                                <h3>John Doe</h3>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing elit, sed...
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <img src="http://localhost/MS/assets/vendors/images/photo1.jpg" alt="" class="mCS_img_loaded">
                                                                                <h3>Lea R. Frith</h3>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing elit, sed...
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <img src="http://localhost/MS/assets/vendors/images/photo2.jpg" alt="" class="mCS_img_loaded">
                                                                                <h3>Erik L. Richards</h3>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing elit, sed...
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <img src="http://localhost/MS/assets/vendors/images/photo3.jpg" alt="" class="mCS_img_loaded">
                                                                                <h3>John Doe</h3>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing elit, sed...
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <img src="http://localhost/MS/assets/vendors/images/photo4.jpg" alt="" class="mCS_img_loaded">
                                                                                <h3>Renee I. Hansen</h3>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing elit, sed...
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <img src="http://localhost/MS/assets/vendors/images/img.jpg" alt="" class="mCS_img_loaded">
                                                                                <h3>Vicki M. Coleman</h3>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipisicing elit, sed...
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: none;">
                                                                    <div class="mCSB_draggerContainer">
                                                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;">
                                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                                        </div>
                                                                        <div class="mCSB_draggerRail"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical">
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                                                                    <div class="mCSB_dragger_bar"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical">
                                                    <div class="mCSB_draggerContainer">
                                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                                                            <div class="mCSB_dragger_bar"></div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical">
                                            <div class="mCSB_draggerContainer">
                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                                                    <div class="mCSB_dragger_bar"></div>
                                                </div>
                                                <div class="mCSB_draggerRail"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                                            <div class="mCSB_dragger_bar"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                    </div>
                </div>
            </div>

            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">

                        <span class="user-name"> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                        
                        
                        <a class="dropdown-item" href="http://localhost/MS/deskapp/extrapages/faq"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="http://localhost/MS/deskapp/logout"><i class="dw dw-logout"></i>
                            Log Out</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Cards -->

    </div>

    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll mCustomScrollbar _mCS_2 mCS_no_scrollbar"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
            <div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                    <div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                        <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                            <div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                    <div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                        <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                            <div id="mCSB_2" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div class="right-sidebar-body-content">
                                                        <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                                                        <div class="sidebar-btn-group pb-30 mb-10">
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                                                        </div>

                                                        <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                                                        <div class="sidebar-btn-group pb-30 mb-10">
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                                                        </div>

                                                        <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                                                        <div class="sidebar-radio-group pb-10 mb-10">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
                                                                <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
                                                                <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
                                                                <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
                                                            </div>
                                                        </div>

                                                        <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                                                        <div class="sidebar-radio-group pb-30 mb-10">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
                                                                <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
                                                                <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
                                                                <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
                                                                <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
                                                                <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
                                                                <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                                                            </div>
                                                        </div>

                                                        <div class="reset-options pt-30 text-center">
                                                            <button class="btn btn-danger" id="reset-settings">Reset
                                                                Settings</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: none;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 0px; height: 0px; top: 0px;">
                                                            <div class="mCSB_dragger_bar" style="line-height: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical">
                                            <div class="mCSB_draggerContainer">
                                                <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                                                    <div class="mCSB_dragger_bar"></div>
                                                </div>
                                                <div class="mCSB_draggerRail"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                                            <div class="mCSB_dragger_bar"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical">
                            <div class="mCSB_draggerContainer">
                                <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                                    <div class="mCSB_dragger_bar"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical">
                    <div class="mCSB_draggerContainer">
                        <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                            <div class="mCSB_dragger_bar"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                    </div>
                </div>
            </div>
        </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
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
        <div class="menu-block customscroll mCustomScrollbar _mCS_3 mCS_no_scrollbar"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
            <div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                <div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                    <div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                        <div id="mCSB_3_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                            <div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                    <div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                        <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                            <div id="mCSB_3" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_3_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                                    <div class="sidebar-menu icon-style-2 icon-list-style-1">
                                                        <ul id="accordion-menu">
                                                            <li class="dropdown show">
                                                                
                                                                <ul class="submenu" style="display: block;">
                                                                    <li><a href="http://localhost/MS/deskapp/dashboard">Home</a>
                                                                    </li>


                                                                    
                                                                    <li><a href="http://localhost/MS/deskapp/ui/tooltip">All Projects</a></li><li><a href="http://localhost/MS/deskapp/ui/buttons">Users</a>
                                                                    </li><li><a href="http://localhost/MS/deskapp/ui/cards">New Project</a>
                                                                    </li>
                                                                    <li><a href="http://localhost/MS/deskapp/ui/cardsHover">Livels</a>
                                                                    </li>
                                                                    <li><a href="http://localhost/MS/deskapp/ui/modals">Statistics</a>
                                                                    </li>
                                                                    
                                                                    

                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                </ul>
                                                            </li>



                                                            <li class="dropdown show">


                                                            </li>












                                                            <li>
                                                                <div class="dropdown-divider"></div>
                                                            </li>



                                                        <li><i class="icon-copy ion-log-out"></i><a href="http://localhost/MS/deskapp/logout" localhost="" ms="" deskapp="">Log Out</a>
                                                                    </li></ul>
                                                    </div>
                                                </div>
                                                <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: none;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 0px; display: block; height: 0px; max-height: 1863.59px; top: 0px;">
                                                            <div class="mCSB_dragger_bar" style="line-height: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical">
                                            <div class="mCSB_draggerContainer">
                                                <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                                                    <div class="mCSB_dragger_bar"></div>
                                                </div>
                                                <div class="mCSB_draggerRail"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                                            <div class="mCSB_dragger_bar"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical">
                            <div class="mCSB_draggerContainer">
                                <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                                    <div class="mCSB_dragger_bar"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical">
                    <div class="mCSB_draggerContainer">
                        <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;">
                            <div class="mCSB_dragger_bar"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                    </div>
                </div>
            </div>
        </div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position:absolute;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
    </div>
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="pd-ltr-20">

            <div class="row">
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data" style="position: relative;">
                                <div id="chart" style="min-height: 102.7px;"><div id="apexcharts5d6647" class="apexcharts-canvas apexcharts5d6647 apexcharts-theme-light" style="width: 70px; height: 102.7px;"><svg id="SvgjsSvg1438" width="70" height="102.69999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1440" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, 0)"><defs id="SvgjsDefs1439"><clipPath id="gridRectMask5d6647"><rect id="SvgjsRect1441" width="106" height="102" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask5d6647"><rect id="SvgjsRect1442" width="102" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1448"><stop id="SvgjsStop1449" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop1450" stop-opacity="1" stop-color="rgba(27,0,255,1)" offset="1"></stop><stop id="SvgjsStop1451" stop-opacity="1" stop-color="rgba(27,0,255,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1458"><stop id="SvgjsStop1459" stop-opacity="1" stop-color="rgba(236,240,244,1)" offset="0"></stop><stop id="SvgjsStop1460" stop-opacity="1" stop-color="rgba(27,0,255,1)" offset="1"></stop><stop id="SvgjsStop1461" stop-opacity="1" stop-color="rgba(27,0,255,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1444" class="apexcharts-radialbar"><g id="SvgjsG1445"><g id="SvgjsG1446" class="apexcharts-tracks"><g id="SvgjsG1447" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.524268292682928" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path></g></g><g id="SvgjsG1453"><g id="SvgjsG1457" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1462" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 40.965021414464175" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1458)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.695121951219512" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="288" data:value="80" index="0" j="0" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 40.965021414464175"></path></g><circle id="SvgjsCircle1454" r="21.47567073170732" cx="50" cy="50" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1455" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1456" font-family="Helvetica, Arial, sans-serif" x="50" y="55" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="400" fill="#333333" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">80%</text></g></g></g></g><line id="SvgjsLine1463" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1464" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div></div>
                            <div class="widget-data">
                                <div class="h4 mb-0">2020</div>
                                <div class="weight-600 font-14">Contact</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data" style="position: relative;">
                                <div id="chart2" style="min-height: 102.7px;"><div id="apexcharts5d6660" class="apexcharts-canvas apexcharts5d6660 apexcharts-theme-light" style="width: 70px; height: 102.7px;"><svg id="SvgjsSvg1465" width="70" height="102.69999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1467" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, 0)"><defs id="SvgjsDefs1466"><clipPath id="gridRectMask5d6660"><rect id="SvgjsRect1468" width="106" height="102" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask5d6660"><rect id="SvgjsRect1469" width="102" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1475"><stop id="SvgjsStop1476" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop1477" stop-opacity="1" stop-color="rgba(0,150,136,1)" offset="1"></stop><stop id="SvgjsStop1478" stop-opacity="1" stop-color="rgba(0,150,136,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1485"><stop id="SvgjsStop1486" stop-opacity="1" stop-color="rgba(236,240,244,1)" offset="0"></stop><stop id="SvgjsStop1487" stop-opacity="1" stop-color="rgba(0,150,136,1)" offset="1"></stop><stop id="SvgjsStop1488" stop-opacity="1" stop-color="rgba(0,150,136,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1471" class="apexcharts-radialbar"><g id="SvgjsG1472"><g id="SvgjsG1473" class="apexcharts-tracks"><g id="SvgjsG1474" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.524268292682928" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path></g></g><g id="SvgjsG1480"><g id="SvgjsG1484" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1489" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 59.03497858553581" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1485)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.695121951219512" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="252" data:value="70" index="0" j="0" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 59.03497858553581"></path></g><circle id="SvgjsCircle1481" r="21.47567073170732" cx="50" cy="50" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1482" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1483" font-family="Helvetica, Arial, sans-serif" x="50" y="55" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="400" fill="#333333" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">70%</text></g></g></g></g><line id="SvgjsLine1490" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1491" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div></div>
                            <div class="widget-data">
                                <div class="h4 mb-0">400</div>
                                <div class="weight-600 font-14">Deals</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data" style="position: relative;">
                                <div id="chart3" style="min-height: 102.7px;"><div id="apexcharts5d666f" class="apexcharts-canvas apexcharts5d666f apexcharts-theme-light" style="width: 70px; height: 102.7px;"><svg id="SvgjsSvg1492" width="70" height="102.69999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1494" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, 0)"><defs id="SvgjsDefs1493"><clipPath id="gridRectMask5d666f"><rect id="SvgjsRect1495" width="106" height="102" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask5d666f"><rect id="SvgjsRect1496" width="102" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1502"><stop id="SvgjsStop1503" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop1504" stop-opacity="1" stop-color="rgba(245,103,103,1)" offset="1"></stop><stop id="SvgjsStop1505" stop-opacity="1" stop-color="rgba(245,103,103,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1512"><stop id="SvgjsStop1513" stop-opacity="1" stop-color="rgba(236,240,244,1)" offset="0"></stop><stop id="SvgjsStop1514" stop-opacity="1" stop-color="rgba(245,103,103,1)" offset="1"></stop><stop id="SvgjsStop1515" stop-opacity="1" stop-color="rgba(245,103,103,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1498" class="apexcharts-radialbar"><g id="SvgjsG1499"><g id="SvgjsG1500" class="apexcharts-tracks"><g id="SvgjsG1501" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.524268292682928" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path></g></g><g id="SvgjsG1507"><g id="SvgjsG1511" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1516" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 20.762195121951216 50.00000000000001" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1512)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.695121951219512" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="270" data:value="75" index="0" j="0" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 20.762195121951216 50.00000000000001"></path></g><circle id="SvgjsCircle1508" r="21.47567073170732" cx="50" cy="50" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1509" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1510" font-family="Helvetica, Arial, sans-serif" x="50" y="55" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="400" fill="#333333" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">75%</text></g></g></g></g><line id="SvgjsLine1517" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1518" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div></div>
                            <div class="widget-data">
                                <div class="h4 mb-0">350</div>
                                <div class="weight-600 font-14">Campaign</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data" style="position: relative;">
                                <div id="chart4" style="min-height: 102.7px;"><div id="apexcharts5d667a" class="apexcharts-canvas apexcharts5d667a apexcharts-theme-light" style="width: 70px; height: 102.7px;"><svg id="SvgjsSvg1519" width="70" height="102.69999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1521" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, 0)"><defs id="SvgjsDefs1520"><clipPath id="gridRectMask5d667a"><rect id="SvgjsRect1522" width="106" height="102" x="-3" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask5d667a"><rect id="SvgjsRect1523" width="102" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1529"><stop id="SvgjsStop1530" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop1531" stop-opacity="1" stop-color="rgba(41,121,255,1)" offset="1"></stop><stop id="SvgjsStop1532" stop-opacity="1" stop-color="rgba(41,121,255,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1539"><stop id="SvgjsStop1540" stop-opacity="1" stop-color="rgba(236,240,244,1)" offset="0"></stop><stop id="SvgjsStop1541" stop-opacity="1" stop-color="rgba(41,121,255,1)" offset="1"></stop><stop id="SvgjsStop1542" stop-opacity="1" stop-color="rgba(41,121,255,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1525" class="apexcharts-radialbar"><g id="SvgjsG1526"><g id="SvgjsG1527" class="apexcharts-tracks"><g id="SvgjsG1528" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.524268292682928" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path></g></g><g id="SvgjsG1534"><g id="SvgjsG1538" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1543" d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 26.346118975439794 32.814449483278" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1539)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.695121951219512" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="306" data:value="85" index="0" j="0" data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 26.346118975439794 32.814449483278"></path></g><circle id="SvgjsCircle1535" r="21.47567073170732" cx="50" cy="50" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1536" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1537" font-family="Helvetica, Arial, sans-serif" x="50" y="55" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="400" fill="#333333" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">85%</text></g></g></g></g><line id="SvgjsLine1544" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1545" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 81px; height: 104px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 81px; height: 104px;"></div></div><div class="contract-trigger"></div></div></div>
                            <div class="widget-data">
                                <div class="h4 mb-0">$6060</div>
                                <div class="weight-600 font-14">Worth</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all_Cards">
                    <div class="card-container">
                        <div class="card">
                            <div class="card_icon">☰</div> <!-- Project Icon -->
                            <div class="card_title">Projects</div>
                            <div class="card_button-container">
                                
<a href="http://localhost/MS/deskapp/ui/cards" class="card_button">New Project</a>
                                
<a href="http://localhost/MS/deskapp/ui/sweetAlert" class="card_button">All Projects</a>
                            </div>
                            <div class="card_footer">
                                Number of projects: <span id="projectCount">5</span>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card_icon">👤</div> <!-- User Icon -->
                            <div class="card_title">Users</div>
                            <div class="card_button-container">
                                                 <a href="http://localhost/MS/deskapp/ui/buttons" class="card_button">Add User</a>
                                                 <a href="http://localhost/MS/deskapp/register" class="card_button">View All Users</a>
                 
                            </div>
                            <div class="card_footer">
                                Number of users: <span id="userCount">20</span>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card_icon">📊</div> <!-- Statistics Icon -->
                            <div class="card_title">Statistics</div>
                            <div class="card_center-button">
                                <!-- Centering the button in the card -->
                                <a href="http://localhost/MS/deskapp/ui/modals" class="card_button">View Stats</a>
                            </div>
                            <!-- 
            <div class="card_footer">
                Stats data: <span id="statsData">0</span>
            </div>
            -->
                        </div>
                    </div>

                    <script>
                    // Example JavaScript code to update the counts in the footers
                    const projectCountElement = document.getElementById("projectCount");
                    const userCountElement = document.getElementById("userCount");
                    const statsDataElement = document.getElementById("statsData");

                    const numberOfProjects = 5; // Replace this with the actual number of projects
                    const numberOfUsers = 20; // Replace this with the actual number of users
                    //const statsData = "Some statistics"; // Replace this with the actual statistics data

                    projectCountElement.textContent = numberOfProjects;
                    userCountElement.textContent = numberOfUsers;
                    // statsDataElement.textContent = statsData;
                    </script>
                </div>
            </div>








            <!-- footer -->
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp  
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="http://localhost/MS/assets/vendors/scripts/core.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/script.min.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/process.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/layout-settings.js"></script>
    <script src="http://localhost/MS/assets/src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="http://localhost/MS/assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost/MS/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://localhost/MS/assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/MS/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="http://localhost/MS/assets/vendors/scripts/dashboard.js"></script>

    <svg id="SvgjsSvg1230" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1231"></defs>
        <polyline id="SvgjsPolyline1232" points="0,0"></polyline>
        <path id="SvgjsPath1233" d="M0 0 "></path>
    </svg>
    <grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
    <div class="abineContentPanel" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent !important; margin: 0px !important; padding: 0px !important; display: none; opacity: 1 !important; z-index: 2147483647 !important; position: absolute !important; top: 20px !important; right: 20px !important; overflow: hidden !important; border-width: 0px !important; visibility: visible !important;">
        <iframe class="abineContentFrame" width="310px" allowtransparency="true" frameborder="0" height="0px" scrolling="no" src="chrome-extension://caljgklbbfbcjjanaijlacgncafpegll/html/inlineForm.html?abine50719337doNotRemove" id="abine50719337doNotRemove" position="undefined" style="display:block !important;position:relative !important;background:transparent !important;border-width:0px !important;left:0px !important;top:0px !important;visibility:visible !important;opacity:1 !important;filter:alpha(opacity:100) !important;margin:0 !important;padding:0 !important;height:0px !important;width:310px"></iframe>
    </div><svg id="SvgjsSvg1109" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1110"></defs>
        <polyline id="SvgjsPolyline1111" points="0,0"></polyline>
        <path id="SvgjsPath1112" d="M0 0 "></path>
    </svg><svg id="SvgjsSvg1109" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1110"></defs>
        <polyline id="SvgjsPolyline1111" points="0,0"></polyline>
        <path id="SvgjsPath1112" d="M0 0 "></path>
    </svg><svg id="SvgjsSvg1109" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1110"></defs>
        <polyline id="SvgjsPolyline1111" points="0,0"></polyline>
        <path id="SvgjsPath1112" d="M0 0 "></path>
    </svg><svg id="SvgjsSvg1109" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1110"></defs>
        <polyline id="SvgjsPolyline1111" points="0,0"></polyline>
        <path id="SvgjsPath1112" d="M0 0 "></path>
    </svg>


<svg id="SvgjsSvg1109" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1110"></defs><polyline id="SvgjsPolyline1111" points="0,0"></polyline><path id="SvgjsPath1112" d="M0 0 "></path></svg><svg id="SvgjsSvg1109" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1110"></defs><polyline id="SvgjsPolyline1111" points="0,0"></polyline><path id="SvgjsPath1112" d="M0 0 "></path></svg><svg id="SvgjsSvg1109" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1110"></defs><polyline id="SvgjsPolyline1111" points="0,0"></polyline><path id="SvgjsPath1112" d="M0 0 "></path></svg><svg id="SvgjsSvg1109" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1110"></defs><polyline id="SvgjsPolyline1111" points="0,0"></polyline><path id="SvgjsPath1112" d="M0 0 "></path></svg><svg id="SvgjsSvg1109" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1110"></defs><polyline id="SvgjsPolyline1111" points="0,0"></polyline><path id="SvgjsPath1112" d="M0 0 "></path></svg><svg id="SvgjsSvg1109" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1110"></defs><polyline id="SvgjsPolyline1111" points="0,0"></polyline><path id="SvgjsPath1112" d="M0 0 "></path></svg><div id="gtx-trans" style="position: absolute; left: 236px; top: 1180.25px;"><div class="gtx-trans-icon"></div></div></body></html>