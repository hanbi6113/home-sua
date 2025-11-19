// AuthAtatus.jsx

import { Link } from "react-router-dom";
import { useAuth } from "../contexts/AuthContext";

export default function AuthAtatus(){
    const [user, setUser] = useAuth;

    return(
        <header>
            <Link to="/">Home</Link>
            {
                user ? ( // 로그인 성공시 보여줄 내용
                    <div>
                        <span>{user.email} 님</span>
                        <button>로그아웃</button>
                    </div>
                ):( // 로그인 안 했을 때 보여줄 내용
                    <div>
                        <Link to="/signIn">로그인</Link>
                        <Link to="/signUp">로그아웃</Link>
                    </div>
                )
            }
        </header>
    );
}