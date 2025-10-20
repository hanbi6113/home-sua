import React from "react";

function Book(props) {
    return (
        <>
            <h1>{`이 책의 이름은 ${props.name}`}</h1>
            <h2>{`이 책의 총 페이지 수는 ${props.numOfPage}입니다.`}</h2>
        </>
    )
}

export default Book;