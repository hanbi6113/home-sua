import React, { useState } from "react";

function Total() {

    const [values, setValues] = useState({a:0, b:0, c:0});

    const handleChange = (e) => {
        const {name, value} = e.target;
        setValues((prev) => ({ // prev : 바로 앞의 상태를 기록(이전 상태)
            ...prev,
            [name]: Number(value),
        }));
    };

    const total = values.a + values.b + values.c;
    const avg = parseInt((values.a + values.b + values.c) / 3);
    
    let pass;

    if(avg>=60){ // 합격여부 if문 사용
        pass = "합격";
    }else{
        pass = "불합격";
    }

    return (
        <div>
            <h2>합계 계산기</h2>
            <div>
                <label htmlFor="">국어 : </label>
                <input type="number" value={values.a} name="a" // name 입력해주기
                    onChange={handleChange}
                />
            </div>
            <div>
                <label htmlFor="">영어 : </label>
                <input type="number" value={values.b} name="b"
                    onChange={handleChange}
                />
            </div>
            <div>
                <label htmlFor="">수학 : </label>
                <input type="number" value={values.c} name="c"
                    onChange={handleChange}
                />
            </div>
            <h3>총합 : {total} 점 </h3>
            <h3>평균 : {avg} 점 </h3>
            <h3>합격여부 : {pass} </h3>
        </div>
    )
}

export default Total;