import {useState} from "react";

export default function Contact (){
    const [name, setName] = useState("");  // setname을 사용할 때 contact 동작한다는 건데 셋네임이 동작 되면 스테이트가 동작 되면서 출력시키는?? 
    
    return(
        <div>

           <input type="text" onChange={(e)=> setName(e.target.value)}/> {/*name에 저장하려면 setName이 필요 setName() 괄호 안에 네임의 들어갈 것을 넣어*/}
           {/* setName을 한 이유는 인풋은 쓴 값을, value를 가지고 와야 하니까 내가 쓴 네임을 setName에 넣어야 함 즉 value에 이름을 넣어 setName으로 name으로 넣어주는 동작임 */}
           {/* 온체인지는 인풋이 있어서 생긴 거라고?? 내가 이해한 게 맞는지 모르겠는데 인풋에 쓴 내용이 온체인지에서(e) 셋네임으로 가지고 와서 넣는다? */}
           
           <p>당신의 이름은? {name}</p>
        </div>
    );
}

