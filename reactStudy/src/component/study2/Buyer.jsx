// Buyer.jsx

import { Link, Routes, Route} from "react-router-dom";
import { useState } from "react";
import ProuductForm from "../study3/ProuductForm";
import CartList from "../study3/CartList";

export default function Buyer(){
    const [cart, setCart] = useState([]);
    const addCart = (item) =>{
        setCart((p) => [...p, {id: Date.now(), ...item}]);
    };

    const removeCart = (id) =>{ // 배열의 값을 제거하는 방법 중에 하나 filter
        setCart((p) => p.filter( (i) => i.id !== id));

    };
    return (
            <>
            <Link to="/" className="home">HOME</Link>
            <h2>계림핑</h2>
            <Link to="/productBuy/add">입력</Link>
            <Link to="productBuy/cart">목록</Link>
          
            <Routes>
                <Route path="add" element={<ProuductForm onAdd={addCart}/>}/>
                <Route path="cart" element={<CartList cart={cart} onRemove={removeCart}/>}/>
            </Routes>
            </>
    );
}