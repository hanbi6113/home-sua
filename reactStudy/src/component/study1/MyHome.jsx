// MyHome.jsx

export default function MyHome(props){
    return(
        <>
        <div>
                <p>7시 ~ 8시 - {props.userA}</p>
                <p>9시 ~ 17시 30분 - {props.userAa}</p>
                <p>18시 30분 ~ 19시 30분 - {props.Aaa}</p>
                <p>19시 30분 ~ 20시 30분 - {props.Aaaa}</p>
                <p>20시 30분 ~ 7시 - {props.userAaaaa}</p>
            </div>
        </>
    );
}