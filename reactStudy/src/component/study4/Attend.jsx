// Attend.jsx
//   MainMenu
// app에 path/attend , element Attend
import { Link } from "react-router-dom";
import { useState } from "react";


export default function Attend(){
    const [stds, setStds] = useState([
        {id: 1, name: "조랭이떡", className: "1학년 1반"}, {id: 9, name: "가나다라", className: "1학년 2반"},
        {id: 2, name: "조애기", className: "1학년 3반"}, {id: 10, name: "마바사아", className: "2학년 2반"},
        {id: 3, name: "큰깜댕", className: "3학년 1반"}, {id: 11, name: "김애옹", className: "1학년 3반"},
        {id: 4, name: "작은껌댕", className:"2학년 1반"}, {id: 12, name: "이애옹", className: "1학년 1반"},
        {id: 5, name: "예삐", className: "2학년 1반"}, {id: 13, name: "나애옹", className: "2학년 3반"},
        {id: 6, name: "조쨈", className: "2학년 3반"}, {id: 14, name: "장군이", className: "1학년 2반"},
        {id: 7, name: "조노리", className: "3학년 1반"}, {id: 15, name: "밍키", className: "3학년 1반"}, 
        {id: 8, name: "조바닐라", className: "2학년 2반"}
    ]);
    // 검색용  변수
    const [search, setSearch] = useState(""); // 검색은 문자열일 테니 빈문자열 초기화

    const [ asc, setAsc] = useState(true);

    // 검색 및 정렬
    const result = stds.filter((s)=> s.name.includes(search)) // 여기서 s는 stds에서 필터링 된 걸 s라고 부르는 거고 s.name.includes(search)은 s.name에서 찾을 문자(includes) 라는 뜻
                        .sort((a, b) =>  // sort는 배열을 정렬하는 함수 (오름차순, 내림차순)
                            asc ? a.name.localeCompare(b.name) : // ?는 트루 : 펄스
                                    b.name.localeCompare(a.name)
                                );
    return(
        <>
        <Link to="/" className="home">HOME</Link>
        <div>
            <div className="md-4">
                검색 <input type="text"
                onChange={(e)=> setSearch(e.target.value)}
                 className="border rounded p-2"/>
            </div>
            <div className="flex items-center gap-4">이름 정렬
                <button onClick={()=> setAsc(true)}>오름차순</button>
                <button onClick={()=> setAsc(false)}>내림차순</button>
            </div>
            <div className="mt-4">
                {
                    result.length === 0 ? 
                    <strong>검색 결과가 없습니다.</strong> :
                    result.map(
                        (std) => (
                            <div key={std.id}>{std.name} ({std.className})</div> 
                        )
                    )
                }
            </div>
            
        </div>
        </>
    );
}

