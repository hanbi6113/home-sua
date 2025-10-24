import React, {useState, useEffect} from "react";

function NameInput(){
    
    // 상태변수
    const [name, setName] = useState(""); // useState 에서 name, setName 에다가 값을 넣어줌, 관리해준다
    
    // 컴포넌트가 처음 마운트될 때 실행
    useEffect(()=>{ // useEffect : 컴포넌트가 렌더링되거나 업데이트될 때
        console.log("컴포넌트가 마운트 되었습니다");
    },[]);

    // name이 변경될 때마다 실행
    useEffect(()=>{ // useEffect에 [의존성] 의존성을 넣어주면 그 값이 업데이트 될 때마다 실행된다(감시원 역할)
        if(name){
            console.log(`이름이 변경되었습니다. ${name}`);
        }
    },[name]);

    return (
        // 화면 생성
        <div>
            <h2>이름을 입력하세요</h2>
            <input type="text" 
            value={name}
            onChange={(e)=>setName(e.target.value)}  /* 무엇으로 바뀌는지 실시간으로 알려준다 */
            placeholder="이름입력"
            />

            <p>안녕하세요, {name || "익명"} 님! </p>
        
        </div>
    )
}

export default NameInput;