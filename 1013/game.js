//game.js

const rsp = {1:"s.png", 2:"r.png", 3: "p.png"}
let comImg; // 컴퓨터 가위바위보 출력 태그(객체) 저장용
let comTurn; // 컴퓨터 가위바위보 제어용
let idx=1; // 컴퓨터 가위바위보 값


// 브라우저에 화면 출력이 모두 끝난 다음에 실행되는 함수 -onload
// window.onload 는 웹페이지가 열리고 자바스트립트에서 동작해야 되는 코드를 
// 작성하면 됩니다. (웹 페이지를 사용하는 사용자가 아무것도 안 해도 동작해야 되는 것들)
window.onload=function(){

    // 브라우저 시작시 컴퓨터 가위바위보 이미지 띄우기
    // 1. 현재 html 문서에서 컴푸터 가위바위보 이미지를 띄울 img 태그 가져오기
    comImg = document.getElementById("comPic");
    // comImg.src = "./r.png";
    //setInterval(실행할 함수, 시간(밀리세컨드))
    comTurn = setInterval(function(){ //셋인터벌은 지정된 시간당 한 번씩 실행되는 것(3초 지정하면 3초마다 실행) 셋타임아웃은 지정된 시간 이후에 실행(3초를 주면 3초 뒤에 한 번 실행 뒤 끝)
        // let idx = 1;
        comImg.src = rsp[idx.toString()]; //string(idx);
        idx++; // ++은 1 증가
        idx = idx==4 ? 1 : idx;; // 3이 보자기이므로 4는 필요없다 다시 1이 되어야    
        } , 100 );

        // 유저 가위바위보 클릭시 이벤트 등록
        let userImgs = document.querySelectorAll(".userPic");
        // class 명이 userPic인 img 태그 세 개 전부 가져오기 - 배열구조
        // userImgs[0].addEventListener('click', function(){
        //     alert("가위");
        // });
        for( i  in userImgs){ //for ~ in : 배열과 같은 구조를 순차적으로 순화하기 위한 반복문
                              // 배열의 첫 번째는 0인덱스로 접근할 수 있다.
                              // 0 인덱스부터 마지막 인덱스까지 반복해준다
             
        }
}