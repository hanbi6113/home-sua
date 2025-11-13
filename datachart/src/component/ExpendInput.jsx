// ExpendInput.jsx

// import { LinK } from "react-router-dom";
import { useState, useEffect } from "react";
import BarChartCard from "./BarChartCard";
import { scales } from "chart.js";


export default function ExpendInput(){
    const [expendList, setExpendList] = useState([]);
    const [amount, setAmount] =useState(0);
    const [content, setContent] =useState("");
    const [day, setDay] =useState("");
    const [showChart, setShowChart] = useState(false);
    const [chartData, setChartData] =useState(null); // 막대 차트 컴포넌트에 보낼 거!

    useEffect(()=>{
        const jsonData = localStorage.getItem("expendList");
        if(jsonData){
            setExpendList(JSON.parse(jsonData));
        }
    }, []); //[] 이거 넣어야 한 번만 하는 거래

    const addList = () => {
        if (!amount || !day){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            alert("금액과 날짜는 반드시 입력"); return;
        }

        const newItem = {
            id:Date.now(), amount:Number(amount), content, day
        };
        setExpendList((p)=> {
            const newData = [...p,newItem];
            // 금액, 내용, 날짜 로컬스토리지에 저장
            localStorage.setItem("expendList", JSON.stringify(newData));
            return newData;
        });
        setAmount(0);
        setContent("");
        console.log(expendList);
        // 차트 버튼을 클릭하면 동작할 함수

        };
    const chartActive=()=>{
            if(expendList.length === 0){
                alert("등록된 내역이 없다! 쯧");
                return;
            }

            // 날짜별 지출 총 금액을 막대 그래프로 표현

            const totalByDate = expendList.reduce((a,c)=>{  //a는 누적값 저장 0부터 시작 c는 더할 숫자...? 다음 숫자?
                if(!a[c.day]) a[c.day] =0; // 맨처음에 0으로 만들어줘야 해서 그거에 필요한 명령어
                a[c.day] += c.amount; // 이건 날짜에 금액을 총합으로 더하는 법
                return a; // "2025-11-09" : 150000
            }, {});
            // totalByData = {"2025-11-09" : 150000,
            // "2025-11-10" : 40000, "2025-11-11" : 1230000}
            const labels = Object.keys(totalByDate).sort();
            const data = labels.map((d)=>totalByDate[d]); // totalByDate 키에 맞는 밸류를 꺼내오래
            const label = "날짜별 지출 합계"; // 데이터들의 타이틀

            setChartData({labels, data, label});
            setShowChart(true);
        };
        //

    return(
        <>
            <div className="flex gap-10 p-8 rounded">
                <div className="bg-pink-200 p-8 rounded">
                    <div className="flex items-center gap-1 mb-4">
                    <label>금액</label> 
                    <input type="number" value={amount} onChange={(e)=>setAmount(e.target.value)} className="border border-black-300 rounded"/>
                </div>
                <div className="flex items-center gap-1 mb-4">
                    <label>내용</label>
                    <textarea type="text" value={content} onChange={(e)=>setContent(e.target.value)} className="border border-black-300 rounded"/>
                    </div>
                    <div className="flex items-center gap-1 mb-4">            
                    <label>날짜</label>
                    <input type="date" value={day} onChange={(e)=> setDay(e.target.value)} className="border border-black-300 rounded"/>
                    </div>
                <button onClick={addList} className="border border-black-300 rounded">등록</button>
                </div>
                <div className="flex items-center justify-center w-80">
                {
                    showChart ?
                    <BarChartCard labels={chartData.labels} data={chartData.data} label={chartData.label}/> :
                    <button onClick={chartActive}
                    className="bg-emerald-500 text-white text-sm font-semibold rounded px-10 py-10">차트</button>
                }
                </div>
            </div>
                
        </>
    );
}

/*
    num = [1, 2, 3, 4, 5] 1부터 5까지 통합
    num.reduce((a,c)=>{
        a+=c;
        return a;
        },0)



*/