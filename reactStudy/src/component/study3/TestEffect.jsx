// TestEffect.jsx
import { Link } from "react-router-dom";
import { useState, useEffect } from "react";

 function TestEffect(){
    const [count, setCount] = useState(0);
    // useEffect (
    //     ()=>{
    //         // document.body.style.backgroundColor="skyblue";
    //         // document.title=`카운트:${count}`;
    //         // return()=>{
    //         //     document.body.style.backgroundColor="white";
    //         // }
    //         if(count >= 5)
    //             document.body.style.backgroundColor = "violet"
    //             else
    //                 document.body.style.backgroundColor = "grey"
    //     }, [count]
    // );
    const [showModal, setShowModal] = useState(false);

    useEffect( // 컴포넌트 렌러딩 될 때 모달창 띄우기
        ()=>{setShowModal(true);}

        ,[  ]);
    return(
        <>
        <Link to="/" className="home">HOME</Link>
        {/* <button onClick={()=> setCount(count + 1)}> count 증가</button>
        <input type="text"></input> */}
        {
            showModal && (
                <Modal onClose={()=> setShowModal(false)}/>
            )
        }
        
        </>
    );
}

function Modal( {onClose}){
    return(
        <div className="fixed bg-black/50 flex justify-center items-center">
            <div className="bg-white px-10 py-5 rounded-b-lg shadow-lg text-center">
                <h2 className="text-x1 mb-4">모달</h2>
                <p className="text-grey-500 mb-4">
                    모달창은 컴포넌트가 처음 연결될 때 나옵니다
                    모달창을 만들면 유용한 점도 있으니 참고하세요.<br></br>
                    알았어? 알아들었으면 끄덕여 -계림핑-
                </p>
                <button onClick={onClose}className="bg-red-400 hover:bg-red-800 text-white px-4 py-2 rounded-md">닫기</button>
            </div>
        </div>
    );
}

export default TestEffect;