import { useState } from "react";

export default function Count(){
    const [count, setCount] = useState(0);

    return(
        <>
        <h3>현재 숫자: {count}</h3>
        <button onClick={()=> setCount(count + 1)}> + 증가</button>
        <button onClick={()=> setCount(count - 1)}> - 감소</button>
        </>
    )
}

