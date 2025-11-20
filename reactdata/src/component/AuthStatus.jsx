// AuthStatus.jsx

import { Link } from "react-router-dom";
import { useAuth } from "../contexts/AuthContext";


export default function AuthStatus(){
    const {user, signout}= useAuth();
    async function logout() {
        // 로그아웃 하겠냐 물어볼 거면
        // if (iwindow.confirm("로그인 하시겠습니까?")) return;
        await signout();
    }

    return(
        <header>
            <Link to="/">Home</Link>
            {
                user ? ( // 로그인 성공시 보여줄 내용
                    <div>
                        <span>{user.email} 님</span>
                        <button onClick={logout}>로그아웃</button>
                    </div>
                ):( // 로그인 안 했을 때 보여줄 내용
                    <div>
                        <Link to="/signIn">로그인</Link>
                        <Link to="/signUp">회원가입</Link>
                    </div>
                )
            }
        </header>
    );
}