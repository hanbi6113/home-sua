


export default function ProfileCard (props){
 
    return(
        <>
        <h1>Profile Card</h1>
        <div>안녕하세요 저는 {props.name}입니다.</div>
        <div>나이는 {props.age}이고, 취미는 {props.hobby}입니다.</div>
        </>
    )
}