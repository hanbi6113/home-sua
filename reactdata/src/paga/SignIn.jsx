
// SignIn.jsx

import { useState } from "react";
import { useAuth } from "../contexts/AuthContext";
import { useNavigate } from "react-router-dom";



export default function SignIn(){
    const {signin} = useAuth();
    const nav = useNavigate();
    
    const [email, setEmail] = useState("");
    const [pw, setPw] = useState("");
    const [loading, setLoading] = useState(false);

    async function onSubmit(e) {
        e.preventDefault();
        if(!email || !pw){
            alert("이메일과 비밀번호를 입력하세요.");
            return;
        }
        setLoading(true);
        try{
            await signin(email, pw);
            nav("/");
        }catch(err){
            console.error(err);
            if (err.code === "auth/invalid-email"){
                alert("이메일 형식이 올바르지 않습니다.");
            }else if(err.code === "auth/weak-password"){
                alert("비밀번호는 6자 이상이어야 합니다.");
            }else {
                alert("로그인 중 오류가 발생했습니다.");
            }
    }finally{ 
            setLoading(false);
        }
    }

    
    
    return(
        <>
        <div className="mx-auto mt-10 max-w-md">
            <h1>로그인</h1>
            <form onSubmit={onSubmit}>
                <div>
                    <label>이메일</label>
                    <input type="email" onChange={(e)=>setEmail(e.target.value)}></input>
                </div>
                <div>
                    <label>비밀번호</label>
                    <input type="password" onChange={(e)=>setPw(e.target.value)}></input>
                </div>
                <button disabled={loading}>{loading  ? " 로그인 중" : " 로그인 "}</button>
            </form>
        </div>
        </>
    );
}
