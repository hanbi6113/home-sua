import React from "react";
import Child from './Child';

function Parent(props){
    return(
        <>
        <Child name="조한민" birthday={"2003-10-22"} nickname="첫째" gender="남자" />

        <Child name="조예원" birthday={"2011-08-16"} nickname="막내" gender="여자" />
        </>
    );

        
    }



export default Parent;