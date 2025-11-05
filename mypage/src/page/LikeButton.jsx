import { useState } from "react";


export default function LikeButoon(){
    const [like, setLike] = useState(0);

    return(
        <>
        <h3>좋아요 ♥ {like}</h3>
        <button onClick={()=> setLike(like + 1)}>👍️</button>
        </>
    )
}
