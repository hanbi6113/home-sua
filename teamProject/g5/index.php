<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항 > 인천국제공항공사</title>
    <!-- 파비콘 -->
    <link rel="icon" type="image/png" href="img/pavicon.png">

    <style>
        /* 기본설정 */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        html,
        body {
            width: 100%;
            height: auto;
        }

        /* header */
        /* .header1 */
        .header1 {
            width: 100%;
            height: 40px;
            background-color: #0b193c;
            position: fixed;
        }

        .header1>.logo1 {
            width: 120px;
            height: 100%;
            background-color: #77eff7;
            position: absolute;
            top: 0;
            left: 6%;
            text-align: center;
            line-height: 40px;
        }

        .logo1>p {
            font-size: 15px;
            font-weight: bold;
        }

        .uiButton {
            position: absolute;
            top: 0;
            right: 5%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .uiButton>button {
            width: 50px;
            height: 40px;
            border: none;
            background-color: #0b193c;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .uiButton>button:hover {
            cursor: pointer;
        }

        .uiButton>button p {
            color: #eee;
            font-size: 15px;
            font-weight: bold;
            margin-right: 10px;
        }

        .uiButton>button img {
            width: 100%;
            padding-bottom: 5px;
        }

        .uiButton>.lang {
            width: 50px;
            height: 68px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 5px;
            text-align: center;
            line-height: 22px;
            position: absolute;
            top: 35px;
            left: 13%;
            display: none;
        }

        .uiButton>.lang p {
            color: #eee;
            font-weight: bold;
            font-size: 14px;
        }

        .uiButton>.darkmode {
            width: 100px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 20px;
        }

        .uiButton>.darkmode:hover {
            cursor: pointer;
        }

        .uiButton>.darkmode img {
            height: 70%;
        }

        /* .header2 */
        .header2 {
            width: 100%;
            height: 110px;
            position: fixed;
            top: 40px;
        }

        .header2 .logo2 {
            display: inline-block;
            position: absolute;
            top: 50%;
            left: 6%;
            transform: translateY(-50%);
        }

        .header2 .logo2 a {
            display: inline-block;
        }

        .header2 .logo2 img {
            display: block;
            width: auto;
            height: auto;
            max-width: 100%;
        }

        .header2>ul {
            width: 800px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            right: 11%;
        }

        .header2>ul li {
            width: 200px;
            height: 100%;
            text-align: center;
            line-height: 110px;
        }

        .header2>ul li a {
            display: block;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.18s;
        }

        .header2.menu-open>ul>li>a {
            color: #333;
        }

        .header2>ul>li>a:hover,
        .header2.menu-open>ul>li>a:hover {
            color: #009ea7;
        }

        .header2>a {
            position: absolute;
            top: 53%;
            right: 6%;
            transform: translateY(-50%);
        }

        /* 공사소개 리스트 */
        .header2 .list {
            width: 100%;
            height: calc(100vh - 150px);
            position: absolute;
            top: 110px;
            left: 0;
            display: none;
        }

        .header2 .list1 .textArea {
            width: 100%;
            height: 360px;
            position: relative;
            border-top: 1px solid #ccc;
            background-color: white;
        }

        .header2 .textArea .left {
            width: 200px;
            height: 100%;
            padding: 30px 0 0;
            position: absolute;
            top: 0;
            left: 110px;
        }

        .header2 .textArea .left p:nth-of-type(1) {
            font-size: 30px;
            font-weight: bold;
        }

        .header2 .textArea .left p:nth-of-type(2) {
            font-size: 18px;
        }

        .header2 .list1 .right {
            width: 1300px;
            height: 100%;
            position: absolute;
            top: 0;
            right: 200px;
        }

        .header2 .list1 .big {
            width: 100%;
            height: 100%;
            padding: 35px 0 0;
            display: flex;
            gap: 50px;
        }

        .header2 .list1 .big>li {
            width: 25%;
            position: relative;
        }

        .header2 .big>li>a {
            font-size: 18px;
            font-weight: bold;
        }

        .header2 .big>li>img {
            width: 28px;
            position: absolute;
            top: 0;
            right: 10px;
        }

        .header2 .big p {
            width: 95%;
            height: 1px;
            background-color: #ccc;
            margin: 10px auto;
        }

        .header2 .small>li {
            margin: 0 0 15px;
        }

        .header2 .small>li>a {
            color: #666;
        }

        .header2 .list1 .blur {
            width: 100%;
            height: calc(100% - 360px);
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* 고객소통 리스트 */
        .header2 .list2 .textArea {
            width: 100%;
            height: 550px;
            position: relative;
            border-top: 1px solid #ccc;
            background-color: white;
        }

        .header2 .list2 .right {
            width: 1300px;
            height: 100%;
            position: absolute;
            top: 0;
            right: 200px;
        }

        .header2 .list2 .big {
            width: 100%;
            height: 100%;
            padding: 35px 0 0;
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
        }

        .header2 .list2 .big>li {
            width: 22%;
            position: relative;
        }

        .header2 .list2 .blur {
            width: 100%;
            height: calc(100% - 550px);
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* 업무지원 리스트 */
        .header2 .list3 .textArea {
            width: 100%;
            height: 650px;
            position: relative;
            border-top: 1px solid #ccc;
            background-color: white;
        }

        .header2 .list3 .right {
            width: 1300px;
            height: 100%;
            position: absolute;
            top: 0;
            right: 200px;
        }

        .header2 .list3 .big {
            width: 100%;
            height: 100%;
            padding: 35px 0 0;
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
        }

        .header2 .list3 .big>li {
            width: 22%;
            position: relative;
        }

        .header2 .list3 .blur {
            width: 100%;
            height: calc(100% - 650px);
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* 인재채용 리스트 */
        .header2 .list4 .textArea {
            width: 100%;
            height: 360px;
            position: relative;
            border-top: 1px solid #ccc;
            background-color: white;
        }

        .header2 .list4 .right {
            width: 1300px;
            height: 100%;
            position: absolute;
            top: 0;
            right: 200px;
        }

        .header2 .list4 .big {
            width: 100%;
            height: 100%;
            padding: 35px 0 0;
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
        }

        .header2 .list4 .big>li {
            width: 22%;
            position: relative;
        }

        .highlight-text {
            color: #009ea7 !important;
        }

        .highlight-bg {
            background-color: #009ea7 !important;
        }

        .header2 .list4 .blur {
            width: 100%;
            height: calc(100% - 360px);
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* main */
        .mainHeader {
            width: 100%;
            height: 420px;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -200;
        }

        .mainHeader img {
            width: auto;
            min-height: 100%;
        }

        .mainHeader .text {
            width: 200px;
            height: 100px;
            text-align: center;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .mainHeader .text p {
            color: rgb(255, 208, 0);
            font-size: 22px;
        }

        .mainHeader .text span {
            color: white;
            font-size: 40px;
            font-weight: bold;
        }

        /* site list */
        .siteList {
            width: 100%;
            height: auto;
            position: absolute;
            top: 420px;
            left: 50%;
            transform: translate(-50%, 0);
            z-index: -200;
            background-color: white;
            transition: all 0.5s;
        }

        .dark {
            background-color: #121212;
        }

        .headText {
            text-align: center;
            position: absolute;
            top: -220px;
            left: 50%;
            transform: translateX(-50%);
        }

        .headText p {
            color: #fadd1c;
            font-size: 22px;
        }

        .headText span {
            color: white;
            font-size: 40px;
            font-weight: bold;
        }

        .siteNav {
            width: 77%;
            height: 60px;
            background-color: #009ea7;
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
        }

        .siteNav>a {
            position: absolute;
            top: 50%;
            left: 1%;
            transform: translateY(-50%);
        }

        .navBig1 {
            position: absolute;
            top: 50%;
            left: 12%;
            transform: translateY(-50%);
            width: 100px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .navBig1:hover {
            cursor: pointer;
        }

        .navBig1>li>a {
            color: #eee;
            font-size: 17px;
        }

        .navSmall1 {
            position: absolute;
            top: 43px;
            left: -20px;
            width: 210px;
            height: 260px;
            background-color: rgba(255, 255, 255, 1);
            box-shadow: -5px 5px 10px rgba(0, 0, 0, 0.4);
            display: none;
        }

        .navSmall1 li {
            margin-bottom: 10px;
            padding: 10px 0 10px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navSmall1 li img {
            width: 12%;
            margin-right: 10px;
        }

        .navSmall1 li:hover a {
            color: #009ea7;
            font-weight: bold;
        }

        .navSmall1 li a {
            font-size: 15px;
            font-weight: 500;
        }

        .navBig2 {
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translateY(-50%);
            width: 115px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navBig2:hover {
            cursor: pointer;
        }

        .navBig2>li>a {
            color: #eee;
            font-size: 17px;
        }

        .navSmall2 {
            position: absolute;
            top: 43px;
            left: -20px;
            width: 210px;
            height: 310px;
            background-color: rgba(255, 255, 255, 1);
            box-shadow: -5px 5px 10px rgba(0, 0, 0, 0.4);
            display: none;
        }

        .navSmall2 li {
            margin-bottom: 10px;
            padding: 10px 0 10px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navSmall2 li img {
            width: 12%;
            margin-right: 10px;
        }

        .navSmall2 li:hover a {
            color: #009ea7;
            font-weight: bold;
        }

        .navSmall2 li a {
            font-size: 15px;
            font-weight: 500;
        }

        .navBox {
            width: 180px;
            height: 60px;
            float: right;
            display: flex;
        }

        .navbox {
            width: 60px;
            height: 60px;
        }

        .navBox1 {
            background-color: #3176d0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navBox2 {
            background-color: #6eadff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navBox3 {
            background-color: #152e6e;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .siteText {
            width: 77%;
            height: 100%;
            margin: auto;
            position: relative;
            top: 30px;
            z-index: -100;
        }

        .textHead {
            width: 100%;
            height: 150px;
            display: flex;
            align-items: center;
        }

        .textHead p {
            font-size: 40px;
            font-weight: bold;
        }

        .textSection1 {
            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            position: relative;
            margin-bottom: 25px;
        }

        .textSection1 img {
            width: 24px;
            margin-right: 5px;
        }

        .textSection1 p {
            font-size: 16px;
            font-weight: 500;
        }

        .textSection1 span {
            color: #3176d0;
        }

        .textSection1Big {
            position: absolute;
            right: 340px;
        }

        .textSection1Big>li>a {
            display: block;
            border: 1px solid #ccc;
            width: 150px;
            height: 50px;
            line-height: 50px;
            padding-left: 15px;
        }

        .textSection1Big>li>a img {
            margin-left: 70px;
            margin-bottom: 3px;
        }

        .textSection1Small {
            position: absolute;
            border: 1px solid black;
            width: 150px;
            display: none;
        }

        .textSection1Small>li>a {
            display: block;
            padding: 5px 0 5px 15px;
        }

        .textSection1Small>li>a:hover {
            background-color: #3176d0;
            color: white;
        }

        .textSection1 .inputBox {
            display: flex;
            align-items: center;
            position: absolute;
            right: 0;
        }

        .inputBox input {
            border: 1px solid #ccc;
            border-radius: none;
            width: 330px;
            height: 50px;
            padding-left: 20px;
        }

        .inputBox input:focus {
            outline: none;
        }

        .inputBox img {
            position: absolute;
            right: 10px;
        }

        .textSection2 {
            border-top: 2px solid #009ea7;
        }

        .textList {
            border-bottom: 1px solid #666;
            width: 100%;
            height: 70px;
            position: relative;
            display: flex;
        }

        .textList p {
            font-weight: bold;
        }

        .textSection2List p {
            font-weight: 400;
        }

        .textSection2List:hover {
            cursor: pointer;
            background-color: #ebf4ff;
        }

        .textList p:nth-of-type(1) {
            position: absolute;
            top: 50%;
            left: 3%;
            transform: translateY(-50%);
        }

        .textList p:nth-of-type(2) {
            position: absolute;
            left: 40%;
            top: 50%;
            transform: translateY(-50%);
        }

        .textSection2List p:nth-of-type(2) {
            left: 8%;
        }

        .textList p:nth-of-type(3) {
            position: absolute;
            right: 20%;
            top: 50%;
            transform: translateY(-50%);
        }

        .textSection2List p:nth-of-type(3) {
            right: 18.5%;
        }

        .textList p:nth-of-type(4) {
            position: absolute;
            right: 12%;
            top: 50%;
            transform: translateY(-50%);
        }

        .textSection2List p:nth-of-type(4) {
            right: 12.5%;
        }

        .textList p:nth-of-type(5) {
            position: absolute;
            right: 3%;
            top: 50%;
            transform: translateY(-50%);
        }

        .textSection2List img {
            position: absolute;
            top: 50%;
            right: 4%;
            transform: translateY(-50%);
        }

        /* survay */
        .survey {
            width: 77%;
            height: 160px;
            margin: 150px auto 50px;
            border: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .surveyTitle {
            width: 95%;
            height: 40px;
            display: flex;
            justify-content: left;
            align-items: center;
        }

        .surveyTitle p {
            margin-left: 10px;
            line-height: 40px;
            font-size: 20px;
            font-weight: 500;
        }

        .boxForm {
            width: 95%;
            height: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        label {
            margin-right: 40px;
        }

        label>span {
            font-weight: 500;
        }

        #opinion {
            width: 380px;
            height: 50px;
            padding-left: 20px;
            border: 1px solid #ccc;
        }

        #checkbtn {
            width: 120px;
            height: 50px;
            background-color: #3176d0;
            border: none;
            color: white;
            font-size: 16px;
        }

        /* footer */
        footer {
            width: 100%;
            height: 250px;
            background-color: #141822;
        }

        .footer1 {
            border-bottom: 1px solid #333;
            width: 100%;
            height: 30%;
        }

        .footer1 ul {
            width: 90%;
            height: 100%;
            margin: auto;
            display: flex;
            align-items: center;
        }

        .footer1 ul li {
            margin-right: 15px;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .footer1 ul li a {
            color: #989898;
        }

        .footer1 ul li p {
            width: 0%;
            height: 2px;
            background-color: #eee;
            transition: all 0.5s;
        }

        .footer1 ul li:hover a {
            color: #eee;
        }

        .footer1 ul li:hover p {
            width: 100%;
        }

        .footer2 {
            width: 100%;
            height: 70%;
            position: relative;
        }

        .footerLogo {
            position: absolute;
            top: 50%;
            left: 5.5%;
            transform: translateY(-50%);
        }

        .footerText {
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translateY(-50%);
            display: flex;
        }

        .footerText1 p {
            margin-right: 20px;
            color: #03b4dc;
        }

        .footerText2 p {
            color: white;
        }

        .footerInpor {
            width: 600px;
            height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: end;
            position: absolute;
            top: 50%;
            right: 5%;
            transform: translateY(-50%);
        }

        .footerSns {
            height: 50px;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .footerSns img:nth-of-type(1) {
            height: 80%;
        }

        .footerSns img {
            margin-right: 18px;
            height: 45%;
        }

        .footerInpor>p {
            color: #787b83;
            font-size: 14px;
        }

        .footerBig>li {
            width: 250px;
            padding: 10px;
            border: 1px solid #eee;
        }

        .footerBig>li:hover {
            cursor: pointer;
        }

        .footerBig>li a {
            color: #eee;
        }

        .footerSmall {
            display: none;
            position: absolute;
            bottom: 100px;
            right: 0;
            width: 250px;
            background-color: #141822;
            padding: 10px;
            max-height: 200px;
            overflow: scroll;
            overflow-x: hidden;
            transition: all 0.7s;
        }

        .footerSmall p {
            color: #ccc;
            margin-bottom: 5px;
        }

        .toTop {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        .toTop button {
            border: none;
            background-color: transparent;
        }

        .toTop button:hover {
            cursor: pointer;
        }

        @media screen and (max-width:1919px) {
            .left {
                display: none;
            }

            .header2 .list1 .right {
                width: 90%;
                top: 0;
                left: 50%;
                transform: translateX(-50%);
            }

            .header2 .list2 .right {
                width: 100%;
                top: 0;
                right: -85px;
            }

            .header2 .list2 .big {
                gap: 19px;
            }

            .header2 .list3 .right {
                width: 100%;
                top: 0;
                right: -85px;
            }

            .header2 .list3 .big {
                gap: 19px;
            }

            .header2 .list4 .right {
                width: 100%;
                top: 0;
                right: -85px;
            }

            .header2 .list4 .big {
                gap: 19px;
            }
        }

        @media screen and (max-width:1520px) {
            .footer1 ul {
                flex-wrap: wrap;
            }

            .footer1 ul li {
                height: 10%;
            }
        }

        @media screen and (max-width:1470px) {
            .siteNav {
                width: 90%;
            }

            .siteText {
                width: 90%;
            }

            .header2>ul {
                width: 600px;
            }

            .header2>ul li {
                width: 150px;
            }

            .survey {
                width: 90%;
            }
        }

        @media screen and (max-width:1400px) {
            .footerLogo img {
                width: 60%;
            }

            .footerText {
                left: 15%;
            }

            .footerText1 p {
                font-size: 14px;
            }

            .footerText2 p {
                font-size: 14px;
            }

            .header2 .list2 .big>li {
                width: 270px;
            }

            .header2 .list3 .big>li {
                width: 270px;
            }

            .header2 .list4 .big>li {
                width: 270px;
            }
        }

        @media screen and (max-width:1240px) {
            #opinion {
                width: 250px;
            }

            .header2 .list2 .right {
                width: 100%;
                top: 0;
                right: -40px;
            }

            .header2 .list3 .right {
                width: 100%;
                top: 0;
                right: -40px;
            }

            .header2 .list4 .right {
                width: 100%;
                top: 0;
                right: -40px;
            }
        }

        @media screen and (max-width:1210px) {
            .header2>ul {
                display: none;
            }

            footer {
                height: 400px;
            }

            .footerLogo {
                top: 5%;
                left: 50%;
                transform: translateX(-50%);
                text-align: center;
            }

            .footerLogo img {
                width: 80%;
            }

            .footerText {
                top: 35%;
                left: 50%;
                transform: translateX(-50%);
            }

            .footerInpor {
                top: 63%;
                left: 46%;
                transform: translateX(-50%);
            }
        }

        @media screen and (max-width:1090px) {
            .boxForm {
                height: 100px;
                flex-direction: column;
                align-items: start;
                justify-content: space-around;
            }

            .boxInput {
                width: 100%;
            }

            #opinion {
                width: 79.5%;
            }

            #checkbtn {
                width: 19.5%;
            }
        }

        @media screen and (max-width:980px) {
            .textSection1 {
                height: 90px;
            }

            .textSection1>img {
                position: absolute;
                top: 0;
            }

            .textSection1 p {
                position: absolute;
                top: 0;
                left: 4%;
            }

            .textSection1Big {
                bottom: 0;
                left: 0;
            }

            .inputBox {
                bottom: 0;
                left: 19%;
                width: 80%;
            }

            .inputBox input {
                width: 100%;
            }

            .textList p {
                font-size: 14px;
            }

            .textSection2List p:nth-of-type(2) {
                left: 12%;
            }

            .textList p:nth-of-type(3) {
                right: 5%;
            }

            .textSection2List p:nth-of-type(3) {
                right: 3%;
            }

            .textList p:nth-of-type(4) {
                display: none;
            }

            .textList p:nth-of-type(5) {
                display: none;
            }
        }

        @media screen and (max-width:910px) {
            footer {
                height: 450px;
            }
        }

        @media screen and (max-width:700px) {
            .header1 {
                display: none;
            }

            .header2 {
                top: 0;
            }

            .siteNav>a {
                display: none;
            }

            .navBig1 {
                left: 1%;
            }
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js"></script>

    <script>
        $(function () {
            // 언어 선택 버튼
            $(".uiButton button").click(() => $(".lang").slideToggle());

            // 다크모드
            let darkmode = false;
            $(".darkmode img").click(function () {
                darkmode = !darkmode;
                $(this).attr("src", darkmode ? "http://hanbi6113.dothome.co.kr/img/da.png" : "http://hanbi6113.dothome.co.kr/img/li.png");
                $(".siteList").toggleClass("dark", darkmode);

                const color = darkmode ? "#eee" : "#333";
                const borderTop = darkmode ? "1px solid #eee" : "1px solid #333";
                const borderBottom = darkmode ? "1px solid #aaa" : "1px solid #ccc";
                const surveyImg = darkmode ? "http://hanbi6113.dothome.co.kr/img/survey2.png" : "http://hanbi6113.dothome.co.kr/img/survey.png";

                $(".textLeft p:nth-of-type(2), .textHead p, .textRight a, .surveyTitle p, label>span, .textSection1 p, .textList p, .textSection1Big a")
                    .css("color", color);
                $(".textRight").css({ "border-top": borderTop, "border-bottom": borderBottom });
                $(".surveyTitle img").attr("src", surveyImg);
            });

            // 메뉴 열기
            $(".header2>ul li").on("mouseenter", function () {
                const idx = $(this).index() + 1;
                const listSel = ".list" + idx;

                $(".header2").css("background-color", "white");
                $(".logo2 img").attr("src", "http://hanbi6113.dothome.co.kr/img/logo2.png");

                $(".header2 .list").not(listSel).hide().removeClass("visible");
                $(listSel).show().addClass("visible");

                $(".header2>ul li a").css("color", "#333");
                $(this).find("a").css("color", "#009ea7");

                $(".header2").addClass("menu-open");
            });

            // 메뉴 닫기 함수
            function closeMenu() {
                const scrolled = $(window).scrollTop() > 0;
                $(".header2").css("background-color", scrolled ? "white" : "transparent");
                $(".header2>ul li a").css("color", scrolled ? "#333" : "white");
                $(".logo2 img").attr("src", scrolled ? "http://hanbi6113.dothome.co.kr/img/logo2.png" : "http://hanbi6113.dothome.co.kr/img/logo1.png");

                $(".header2 .list").stop(true, true).fadeOut(200).removeClass("visible");
                $(".header2").removeClass("menu-open");
            }

            // 문서 전체에서 마우스 위치 체크
            $(document).on("mousemove", function (e) {
                if (
                    $(e.target).closest(".header2 > ul").length === 0 &&
                    $(e.target).closest(".textArea").length === 0 &&
                    $(".header2").hasClass("menu-open")
                ) {
                    closeMenu();
                }
            });

            // 메뉴 a 태그 호버 색상
            $(".header2>ul li a").hover(
                function () { $(this).css("color", "#009ea7"); },
                function () {
                    $(this).css("color", "#333"); // 항상 회색으로 초기화
                }
            );

            // list .small a 호버
            $(".list .small a").hover(
                function () {
                    const $bigLi = $(this).closest(".big > li");
                    $(this).addClass("highlight-text");
                    $bigLi.children("a").addClass("highlight-text");
                    $bigLi.children("p").addClass("highlight-bg");
                    $bigLi.find("img").attr("src", "http://hanbi6113.dothome.co.kr/img/menu-hover.png");
                },
                function () {
                    const $bigLi = $(this).closest(".big > li");
                    $(this).removeClass("highlight-text");
                    $bigLi.children("a").removeClass("highlight-text");
                    $bigLi.children("p").removeClass("highlight-bg");
                    $bigLi.find("img").attr("src", "http://hanbi6113.dothome.co.kr/img/menu.png");
                }
            );

            // 스크롤 이벤트 (헤더/로고/사이트 버튼 변경)
            $(window).on("scroll", function () {
                const scrolled = $(window).scrollTop() > 0;
                $(".header2")
                    .css("background-color", scrolled ? "white" : "transparent")
                    .find(">ul li a").css("color", scrolled ? "#333" : "white");
                $(".logo2 img").attr("src", scrolled ? "http://hanbi6113.dothome.co.kr/img/logo2.png" : "http://hanbi6113.dothome.co.kr/img/logo1.png");
                $(".header2 > a img").attr("src", scrolled ? "http://hanbi6113.dothome.co.kr/img/site2.png" : "http://hanbi6113.dothome.co.kr/img/site.png");
            });

            // 네비 토글
            $(".navBig1").click(() => $(".navSmall1").fadeToggle());
            $(".navBig2").click(() => $(".navSmall2").fadeToggle());

            $(".navSmall1 li").hover(
                function () {
                    $(this).find("img").attr("src", "http://hanbi6113.dothome.co.kr/img/menu.png");
                },
                function () {
                    $(this).find("img").attr("src", "http://hanbi6113.dothome.co.kr/img/menu-hover.png");
                }
            );

            $(".navSmall2 li").hover(
                function () {
                    $(this).find("img").attr("src", "http://hanbi6113.dothome.co.kr/img/menu.png");
                },
                function () {
                    $(this).find("img").attr("src", "http://hanbi6113.dothome.co.kr/img/menu-hover.png");
                }
            );

            $(".textSection1Big").on('click', function () {
                $(".textSection1Small").toggle();
            });

            // footer 관련사이트 목록
            $(".footerBig").click(function () {
                $(this).find(".footerSmall").fadeToggle();
            });

            // site.png hover & scroll 처리
            $(".header2>ul li, .textArea").hover(
                () => $(".header2 > a img").attr("src", "http://hanbi6113.dothome.co.kr/img/site2.png"),
                () => {
                    if ($(window).scrollTop() === 0) {
                        $(".header2 > a img").attr("src", "http://hanbi6113.dothome.co.kr/img/site.png");
                    }
                }
            );

            $(window).on("scroll", function () {
                if ($(this).scrollTop() > 100) {
                    // 스크롤이 100px 이상이면 버튼 나타남
                    $(".toTop").fadeIn();
                } else {
                    // 아니면 버튼 숨김
                    $(".toTop").fadeOut();
                }
            });

            // 버튼 클릭 시 위로 부드럽게 스크롤
            $(".toTop").on("click", function () {
                $("html, body").animate({ scrollTop: 0 }, 500); // 0.5초 동안 맨 위로 이동
                return false;
            });

        });
    </script>
</head>

<body>
    <header>
        <div class="header1">
            <div class="logo1">
                <p>인천국제공항</p>
            </div>

            <div class="uiButton">
                <button>
                    <p>KOR</p>
                    <img src="http://hanbi6113.dothome.co.kr/img/top-arrow.png" alt="토글 버튼">
                </button>

                <div class="lang">
                    <p>ENG<br>CHN<br>JPN</p>
                </div>

                <div class="darkmode">
                    <img src="http://hanbi6113.dothome.co.kr/img/li.png" alt="다크모드 이미지">
                </div>
            </div>
        </div>

        <div class="header2">
            <div class="logo2">
                <a href="#"><img src="http://hanbi6113.dothome.co.kr/img/logo1.png" alt="로고 이미지"></a>
            </div>

            <ul>
                <li><a href="#">공사소개</a></li>
                <li><a href="#">고객소통</a></li>
                <li><a href="#">업무지원</a></li>
                <li><a href="#">인재채용</a></li>
            </ul>

            <a href="#">
                <img src="http://hanbi6113.dothome.co.kr/img/site.png" alt="사이트맵 버튼">
            </a>

            <div class="list list1">
                <div class="textArea">
                    <div class="left">
                        <p>공사소개</p>
                        <p>Incheon Airport</p>
                    </div>
                    <div class="right">
                        <ul class="big">
                            <li><a href="#">CEO 메세지</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">인사말</a></li>
                                    <li><a href="#">프로필</a></li>
                                </ul>
                            </li>

                            <li><a href="#">일반현황</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">사업영역</a></li>
                                    <li><a href="#">비전</a></li>
                                    <li><a href="#">연혁</a></li>
                                    <li><a href="#">기관상징(CI) / 슬로건</a></li>
                                    <li><a href="#">한눈에 보는 인천공항</a></li>
                                    <li><a href="#">오시는 길</a></li>
                                </ul>
                            </li>

                            <li><a href="#">조직</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">조직소개</a></li>
                                    <li><a href="#">임원 및 경영진</a></li>
                                    <li><a href="#">직원 업무 및 연락처</a></li>
                                </ul>
                            </li>

                            <li><a href="#">홍보센터</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">수상</a></li>
                                    <li><a href="#">갤러리</a></li>
                                    <li><a href="#">간행물</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="blur"></div>
            </div>

            <div class="list list2">
                <div class="textArea">
                    <div class="left">
                        <p>고객소통</p>
                        <p>Incheon Airport</p>
                    </div>
                    <div class="right">
                        <ul class="big">
                            <li><a href="#">공지사항</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                            </li>

                            <li><a href="#">보도자료</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                            </li>

                            <li><a href="#">민원마당</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">민원신청 안내</a></li>
                                    <li><a href="#">온라인 민원</a></li>
                                    <li><a href="#">서면 민원</a></li>
                                </ul>
                            </li>

                            <li><a href="#">청렴신문고</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">신고하기</a></li>
                                </ul>
                            </li>

                            <li><a href="#">신고센터</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">불법하도급신고</a></li>
                                    <li><a href="#">예산낭비신고</a></li>
                                    <li><a href="#">기업성장응답센터</a></li>
                                    <li><a href="#">안전신문고</a></li>
                                    <li><a href="#">인사채용비리 제보센터</a></li>
                                </ul>
                            </li>

                            <li><a href="#">견학 / 관람</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">공항견학</a></li>
                                    <li><a href="#">홍보전망대</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="blur"></div>
            </div>

            <div class="list list3">
                <div class="textArea">
                    <div class="left">
                        <p>업무지원</p>
                        <p>Incheon Airport</p>
                    </div>
                    <div class="right">
                        <ul class="big">
                            <li><a href="#">규정</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                            </li>

                            <li><a href="#">출입증/촬영/신변보호업무</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                            </li>

                            <li><a href="#">업무서비스</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">항공사 사용계약</a></li>
                                    <li><a href="#">영접카운터/가로등배너</a></li>
                                    <li><a href="#">구내영업승인</a></li>
                                    <li><a href="#">부지영업승인</a></li>
                                    <li><a href="#">운항지원 서비스</a></li>
                                    <li><a href="#">장애물 관리</a></li>
                                </ul>
                            </li>

                            <li><a href="#">지원시설</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">공항청사 종합체육시설</a></li>
                                </ul>
                            </li>

                            <li><a href="#">임대 및 입주지원</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">업무용시설 임대</a></li>
                                    <li><a href="#">상업용시설 임대</a></li>
                                    <li><a href="#">입주신청</a></li>
                                    <li><a href="#">입주자서비스센터</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="blur"></div>
            </div>

            <div class="list list4">
                <div class="textArea">
                    <div class="left">
                        <p>인재채용</p>
                        <p>Incheon Airport</p>
                    </div>
                    <div class="right">
                        <ul class="big">
                            <li><a href="#">채용안내</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                            </li>

                            <li><a href="#">인재상</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                            </li>

                            <li><a href="#">직무소개</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                                <ul class="small">
                                    <li><a href="#">일반직</a></li>
                                    <li><a href="#">안전보안직</a></li>
                                    <li><a href="#">방재직</a></li>
                                </ul>
                            </li>

                            <li><a href="#">채용공고</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                            </li>

                            <li><a href="#">자주하는 질문</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                                <p></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="blur"></div>
            </div>
        </div>
    </header>

    <main>
        <div class="mainHeader">
            <img src="http://hanbi6113.dothome.co.kr/img/ba.png" alt="고객소통 헤더 이미지">
        </div>

        <div class="siteList">
            <div class="headText">
                <p>업무지원<br><span>규정</span></p>
            </div>

            <div class="siteNav">
                <a href="#"><img src="http://hanbi6113.dothome.co.kr/img/home-logo.png" alt="로고 이미지"></a>

                <ul class="navBig1">
                    <li><a href="#">업무지원</a>
                        <ul class="navSmall1">
                            <li><a href="#">공사공개</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                            <li><a href="#">고객소통</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                            <li><a href="#">업무지원</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                            <li><a href="#">인재채용</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                            <li><a href="#">기타</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                        </ul>
                    </li>

                    <img src="http://hanbi6113.dothome.co.kr/img/top-arrow.png" alt="화살표">
                </ul>

                <ul class="navBig2">
                    <li><a href="#">규정</a>
                        <ul class="navSmall2">
                            <li><a href="#">공지사항</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                            <li><a href="#">보도자료</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                            <li><a href="#">민원마당</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                            <li><a href="#">청렴신문고</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                            <li><a href="#">신고센터</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                            <li><a href="#">견학관람</a>
                                <img src="http://hanbi6113.dothome.co.kr/img/menu.png" alt="비행기 이미지">
                            </li>
                        </ul>
                    </li>

                    <img src="http://hanbi6113.dothome.co.kr/img/top-arrow.png" alt="화살표">
                </ul>

                <div class="navBox">
                    <div class="navbox navBox1">
                        <img src="http://hanbi6113.dothome.co.kr/img/icon1-1.png" alt="box 이미지">
                    </div>
                    <div class="navbox navBox2">
                        <img src="http://hanbi6113.dothome.co.kr/img/icon1-2.png" alt="box 이미지">
                    </div>
                    <div class="navbox navBox3">
                        <img src="http://hanbi6113.dothome.co.kr/img/icon1-3.png" alt="box 이미지">
                    </div>
                </div>
            </div>

            <div class="siteText">
                <div class="textHead">
                    <p>규정</p>
                </div>

                <div class="textSection1">
                    <!-- <img src="img/rss.png" alt="rss 이미지">

                    <p>총 <span>996</span> 개의 게시물(1/10 page)</p> -->

                    <ul class="textSection1Big">
                        <li><a href="#">제목
                                <img src="http://hanbi6113.dothome.co.kr/img/black.png" alt="화살표 이미지">
                            </a>
                            <ul class="textSection1Small">
                                <li><a href="#">제목</a></li>
                                <li><a href="#">내용</a></li>
                                <li><a href="#">전체</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="inputBox">
                        <input type="text" id="findWord" name="findWord">
                        <img src="http://hanbi6113.dothome.co.kr/img/search.png" alt="돋보기 이미지">
                    </div>
                </div>

                <div class="textSection2">
                    <div class="textList textSection2Title">
                        <p>번호</p>
                        <p>제목</p>
                        <p>작성일</p>
                        <p>조회수</p>
                        <p>첨부파일</p>
                    </div>

                    <div class="textList textSection2List  textSection2list1">
                        <p>996</p>
                        <p>2025 인천국제공항공사 Z세대 자문단 모집 안내 (~9.22)</p>
                        <p>2025.09.16</p>
                        <p>105</p>
                    </div>

                    <div class="textList textSection2List  textSection2list2">
                        <p>995</p>
                        <p>제4차 항공정책기본계획 공청회 안내</p>
                        <p>2025.09.15</p>
                        <p>40</p>
                    </div>

                    <div class="textList textSection2List  textSection2list3">
                        <p>994</p>
                        <p>공항청사 종합체육시설 대관 절차 안내</p>
                        <p>2025.09.12</p>
                        <p>26</p>
                        <img src="http://hanbi6113.dothome.co.kr/img/ic-down4.png" alt="다운로드 이미지">
                    </div>

                    <div class="textList textSection2List  textSection2list4">
                        <p>993</p>
                        <p>2025년 인천국제공항공사 안전한국훈련 실시</p>
                        <p>2025.09.11</p>
                        <p>61</p>
                    </div>

                    <div class="textList textSection2List  textSection2list5">
                        <p>992</p>
                        <p>2025년 9월 공항청사 종합체육시설 휴관 일정 안내</p>
                        <p>2025.09.01</p>
                        <p>68</p>
                    </div>

                    <div class="textList textSection2List  textSection2list6">
                        <p>991</p>
                        <p>서울 ADEX 2025 참가기업 모집 공고</p>
                        <p>2025.08.29</p>
                        <p>117</p>
                        <img src="http://hanbi6113.dothome.co.kr/img/save.png" alt="다운로드 이미지">
                    </div>

                    <div class="textList textSection2List  textSection2list7">
                        <p>990</p>
                        <p>新국정과제 연계 인천공항 국민참여 전략사업 및 예산 공모</p>
                        <p>2025.08.22</p>
                        <p>136</p>
                    </div>

                    <div class="textList textSection2List  textSection2list8">
                        <p>989</p>
                        <p>2025 인천공항 신기술 테스트베드 공모전 안내</p>
                        <p>2025.08.07</p>
                        <p>198</p>
                        <img src="http://hanbi6113.dothome.co.kr/img/save.png" alt="다운로드 이미지">
                    </div>

                    <div class="textList textSection2List  textSection2list9">
                        <p>988</p>
                        <p>2025년 8월 공항청사 종합체육시설 휴관 일정 안내</p>
                        <p>2025.07.28</p>
                        <p>71</p>
                    </div>

                    <div class="textList textSection2List  textSection2list10">
                        <p>987</p>
                        <p>2025년 상반기 여객포기물품 기증실적</p>
                        <p>2025.07.23</p>
                        <p>186</p>
                        <img src="http://hanbi6113.dothome.co.kr/img/save.png" alt="다운로드 이미지">
                    </div>
                </div>
            </div>

            <div class="survey">
                <div class="surveyTitle">
                    <img src="http://hanbi6113.dothome.co.kr/img/survey.png" alt="만족도조사">
                    <p>콘텐츠 만족도 조사</p>
                </div>

                <div class="boxForm">
                    <div class="boxRadio">
                        <label for="score_5" class="cm-radio style1">
                            <input type="radio" name="score" id="score_5" title="매우만족" checked="checked" value="5"
                                class="needsclick">
                            <span>매우만족</span>
                        </label>

                        <label for="score_4" class="cm-radio style1">
                            <input type="radio" name="score" id="score_4" title="만족" value="4" class="needsclick">
                            <span>만족</span>
                        </label>

                        <label for="score_3" class="cm-radio style1">
                            <input type="radio" name="score" id="score_3" title="보통" value="3" class="needsclick">
                            <span>보통</span>
                        </label>

                        <label for="score_2" class="cm-radio style1">
                            <input type="radio" name="score" id="score_2" title="불만족" value="2" class="needsclick">
                            <span>불만족</span>
                        </label>

                        <label for="score_1" class="cm-radio style1">
                            <input type="radio" name="score" id="score_1" title="매우불만족" value="1" class="needsclick">
                            <span>매우불만족</span>
                        </label>
                    </div>

                    <div class="boxInput">
                        <input type="text" id="opinion" name="opinion" placeholder="※ 콘텐츠 개선의견을 남겨주세요"
                            title="※ 콘텐츠 개선의견을 남겨주세요" class="needsclick">
                        <button type="button" id="checkbtn" title="확인">참여하기</button>
                    </div>
                </div>
            </div>

            <footer>
                <div class="footer1">
                    <ul>
                        <li><a href="#">이용약관</a>
                            <p></p>
                        </li>
                        <li><a href="#">개인정보처리방침</a>
                            <p></p>
                        </li>
                        <li><a href="#">영상정보처리기기 운영관리 방침</a>
                            <p></p>
                        </li>
                        <li><a href="#">항공안전신고</a>
                            <p></p>
                        </li>
                        <li><a href="#">저작권보호정책</a>
                            <p></p>
                        </li>
                        <li><a href="#">이메일 주소 무단 수집 거부</a>
                            <p></p>
                        </li>
                        <li><a href="#">시각장애인 이용안내</a>
                            <p></p>
                        </li>
                        <li><a href="#">물류서비스</a>
                            <p></p>
                        </li>
                        <li><a href="#">복합도시개발</a>
                            <p></p>
                        </li>
                        <li><a href="#">MRO</a>
                            <p></p>
                        </li>
                        <li><a href="#">해외사업/교육</a>
                            <p></p>
                        </li>
                    </ul>
                </div>

                <div class="footer2">
                    <div class="footerLogo">
                        <img src="http://hanbi6113.dothome.co.kr/img/footer-logo.png" alt="푸터 로고 이미지">
                    </div>

                    <div class="footerText">
                        <div class="footerText1">
                            <p>인천국제공항공사</p>
                            <p>인천국제공항 제1 여객터미널</p>
                            <p>인천국제공항 제2 여객터미널</p>
                        </div>

                        <div class="footerText2">
                            <p>22382 인천광역시 중구 공항로 424번길 47</p>
                            <p>22382 인천광역시 중구 공항로 272</p>
                            <p>22382 인천광역시 중구 제2터미널대로 446</p>
                        </div>
                    </div>

                    <div class="footerInpor">
                        <div class="footerSns">
                            <img src="http://hanbi6113.dothome.co.kr/img/web.png" alt="웹표준 이미지">
                            <img src="http://hanbi6113.dothome.co.kr/img/sns1.png" alt="sns 이미지">
                            <img src="http://hanbi6113.dothome.co.kr/img/sns2.png" alt="sns 이미지">
                            <img src="http://hanbi6113.dothome.co.kr/img/sns3.png" alt="sns 이미지">
                            <img src="http://hanbi6113.dothome.co.kr/img/sns4.png" alt="sns 이미지">

                            <ul class="footerBig">
                                <li><a href="#">관련사이트</a>
                                    <div class="footerSmall">
                                        <p>전자입찰시스템</p>
                                        <p>인터넷청구시스템</p>
                                        <p>항공물류정보시스템</p>
                                        <p>항공보안교육원</p>
                                        <p>Aviation Academy</p>
                                        <p>운항자료서비스</p>
                                        <p>적재대관리 홈페이지</p>
                                        <p>인천공항 인재개발원</p>
                                        <p>인천공항 공항산업기술연구원</p>
                                        <p>인천공항 스카이몬스</p>
                                        <p>인천공항에너지(주)</p>
                                        <p>인천공항시설관리(주)</p>
                                        <p>인천공항운영서비스(주)</p>
                                        <p>인천공항공항보안(주)</p>
                                        <p>입주자서비스포탈</p>
                                        <p>국토교통부 홈페이지</p>
                                        <p>인천국제공항경찰단</p>
                                        <p>외교부 안전여행</p>
                                        <p>언어가 안통할때</p>
                                        <p>도로명주소안내</p>
                                        <p>해외감염병NOW</p>
                                        <p>한국공항공사</p>
                                        <p>안전Dream</p>
                                        <p>관세청</p>
                                        <p>출입국외국인정책본부</p>
                                        <p>안전관리정보시스템</p>
                                        <p>계약 및 시설관리시스템</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <p>Copyright Incheon International Airport Corporation. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <div class="toTop">
        <button>
            <img src="http://hanbi6113.dothome.co.kr/img/btnTop.png" alt="top버튼">
        </button>
    </div>
</body>

</html>