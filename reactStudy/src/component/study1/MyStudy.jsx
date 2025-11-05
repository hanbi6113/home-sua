// MyStudy.jsx
import { Link } from "react-router-dom";
import { useState } from "react";
import MyHome from "./MyHome";

export default function MyStudy(){
        const [a, setA] = useState("");
        const [aa, setAa] = useState("");
        const [aaa, setAaa] = useState("");
        const [aaaa, setAaaa] = useState("");
        const [aaaaa, setAaaaa] = useState("");
        return(
            <>
                <Link to="/" className="home">HOME</Link>
    
                <div>
                    7시 ~ 8시 : <button> <input type="text" onClick={(e)=>setA(e.target.value)}/></button> <br/>
                    9시 ~ 17시 30분 : <input type="text" onClick={(e)=>setAa(e.target.value)}/> <br/>            
                    18시 30분 ~ 19시 30분 : <input type="text" onClick={(e)=> setAaa(e.target.value)}/> <br/>
                    19시 30분 ~ 20시 30분: <input type="text" onClick={(e)=> setAaaa(e.target.value)}/> <br/>
                    20시 30분 ~ 7시: <input type="text" onClick={(e)=> setAaaaa(e.target.value)}/> <br/>
                </div>
                <MyHome userA={a} userAa={aa} userAaa={aaa} userAaaa={aaaa} userAaaaa={aaaaa}/>
            </>
        )
    }