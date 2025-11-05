

export default function Welcome(props){  // export default 하는 이유는 펑션이 하나일 때 쓰임
    return(
        <>
            <h1>props test</h1>
            <div>props 값: {props.name}</div>  
            <div>나이 : {props.age}</div>
        </>
    );
}