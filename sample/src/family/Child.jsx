import React from "react";
import './Child.css';

function Child(props){ // props 가 아닌 p라도 써도 됨
    return(
        <>
        <h1>우리 가족 소개</h1>
        <h2>{`이름 : ${props.name}`}</h2> 
        <h2>{`생일 : ${props.birthday}`}</h2>
        <h2>{`호칭 : ${props.nickname}`}</h2>
        <h2>{`성별 : ${props.gender}`}</h2>
        </>
    )
    
}
export default Child;