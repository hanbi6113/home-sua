// ToDoForm .jsx\
import { useState } from "react";
import { addDoc, collection, serverTimestamp} from 'firebase/firestore';
import { db } from "../firebase/config";

export default function ToDoForm(){
    const [text, setText] =useState("");
    const [loading, setLoading ] =useState(false); // 파이어베이스에 저장하는 동안 버튼 클릭 안 되게 하기 위한 loading 이라는 변수를 사용
;
    // 입력한 데이터를 파이어베이스에 저장을 하기 위한 함수
    // 어디에 어떻게 누구를 저장할 것인지 코드 작성해야 한다.

    async function onSubmit( e ){
        e.preventDefault(); // 폼 태그의 submit 동작시 현재 페이지 새로고침 하는데 
        // 새로고침 안 되게 막아두기 - 새로고침 되면 컴포넌트 다시 연결 되는 거라 
        // 컴포넌트 안의 모든 거 다 초기화 됨
        if(!text.trim()) return; //할 일 입력 안 했으면 저장 안 함
        setLoading(true);

        try{
            // 컬렉션 만들기 및 열기
            const ref = collection(db,"todos"); // collection (데이터베이스값, "컬렉션 이름")

            // 문서 추가
           await addDoc(ref, {
                text: text.trim(), // 트림은 앞뒤 공간 제거?
                done: false,
                createAt : serverTimestamp(),
            });
        }catch(err){ // 오류난 거 캐치해주는 곳  try {} 안에서 오류 발생시 catch 동작
            alert("추가 중 오류가 발생! 입력 제대로 했냐?")

        }
        setLoading(false);
    }

    

    // form 태그 안에 버튼을 클릭하면 form 태그의 submit 이벤트 발생
    // submit 이벤트를 통해 form 안의 데이터를 전송한다.
    return(
        <div className="my-4">
            <form onSubmit={onSubmit}>
                <input type="text" value={text}
                onChange={(e)=> setText(e.target.value)}
                placeholder="할 일을 입력해라"
                className="rounded border bg-white border-gray-500 px-3 py-2"/>
                <button disabled={loading} // disabled은 사용하지 않겠다는 명령어
                className="rounded bg-green-600 px-6 py-2.5 text-white">{ loading ? "추가 중..." : "추가"}</button> {/* 조건 ? 참일 때 값 : 거짓일 때 값 */}
            </form>
        </div>
    );
}