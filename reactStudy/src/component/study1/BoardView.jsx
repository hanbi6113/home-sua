

export default function BoardView(props){
    return(
        <>
            <div>
                <p>제목 - {props.userTitle}</p>
                <p>내용 - {props.userContent}</p>
                <p>작성자 - {props.userUser}</p>
                <p>비밀번호 - {props.userPass}</p>
            </div>
        </>
    );
}