import React from "react";
import Children from './Children';

function Parent(props) {
    return (
        <>
            <Children name="홍길동" birthday={"2000-03-03"} nickname="첫째" gender="남자" />

            <Children name="홍미나" birthday={"2002-06-13"} nickname="둘째" gender="여자" />
        </>
    );
}

export default Parent;