// TodoList.jsx
// 파이어베이스에 저장된 데이터 읽기
import { useState, useEffect } from "react"; // useEffect는 컴퍼넌트가 연결 되거나 useState 값이 변경될 때(값이 추가 될 때)
import { db } from "../firebase/config";
import { collection, onSnapshot, orderBy, query,  } from "firebase/firestore";



export default function TodoList(){
    // 파이어베이스 컬렉션에 가지고 온 데이터를 담을 공간 필요
    const [ todos, setTodos] =useState([]);
    useEffect(
        ()=>{
            // 컬렉션에서 가져오기
            const ref= collection(db, "todos");

            // 정렬
            const res = query( ref, orderBy("createAt", "desc")) // 정렬은 orderBy desc는 내림차순


            const unsub = onSnapshot(res, (snap)=>{
                const list = snap.docs.map((d)=>(
                    {id: d.id, ...d.data()}
            ));
            setTodos(list);

        });
        return()=> unsub(); // 파이아베이스 해제 - 컴포넌트 연결해제시

        }
    ,[]);
    return(
        <>
            <ul className="my-3">
                {
                    todos.map((t)=>(
                        <li key={t.id} className="flex items-center justify-between">
                            <span>{t.text}</span>
                        </li>
                    ))
                }
                
            </ul>
        </>
    );
}