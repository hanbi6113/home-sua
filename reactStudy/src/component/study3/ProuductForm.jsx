// ProuductForm.jsx

 import { useState } from "react";

export default function ProuductForm({onAdd}){ // (props)-> props.onAdd 으로도 가능

    const [name, setName] = useState("");
    const [price, setPrice] = useState(0);

    const submit = (e) => {
        e.preventDefault();
        if( !name.trim()|| !price) return; // 상품명과 가격이 입력되지 않았다면 실행 노
        onAdd( {name:name.trim(), price : price});
        setName("");
        setPrice(0);
    }
    return(
        <>
        <form onSubmit={submit}> {/* form은 데이터 전달하는 역할 */}
        <input type="text" placeholder="상품명" onChange={(e)=> setName(e.target.value)} value={name}/>
        <input type="number" placeholder="상품 가격" onChange={(e)=> setPeice(e.target.value)} value={price}/>
        <buttom>장바구니</buttom>
        </form>
        </>
    );
}