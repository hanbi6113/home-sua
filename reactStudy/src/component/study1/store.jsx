// Store.jsx

import { Link } from "react-router-dom";
import { useState } from "react";

export default function Store(){
    const [item, setItem] = useState({
        name : "",
        price : 0,
        brand : "",
    });
    return(
        <>
            <Link to="/" className="home">HOME</Link>
        </>
    );
}